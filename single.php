<?php get_header();?>
<div class="container padd_72_desk">
	<div class="row">
		<div class="col-md-8 padd_0px">
			<?php while (have_posts() ) : the_post();?>
				<div class="">
					<div class="row title_blog_pos_single">
						<?php the_title();?>
					</div>
					<div class="row date_author_blog_post">
						<span class="date_log_post date_author_blog_post_same"><span class="icon fa fa-calendar"></span><?php echo get_the_date();?></span>
						<span class="author_log_post date_author_blog_post_same"><span class="icon fa fa-user"></span><?php echo get_the_author()?></span>
					</div>
					<div class="row the_post_thumbnail_blog">
						<?php the_post_thumbnail();?>
					</div>
					<div class="row content_blog_post_single">
						<?php the_content();?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<span class="tags_heading">Tags</span>
						<?php
						$categories = get_tags( array(
							'orderby' => 'name',
							'order'   => 'ASC'
						) );
						foreach( $categories as $category ) {
							$category_link = sprintf( 
								'<span href="%1$s" alt="%2$s">%3$s</span>',
								esc_url( get_category_link( $category->term_id ) ),
								esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
								esc_html( $category->name )
							);
							echo '<p class="tags_listed">' . sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) . '</p> ';
						} ?>
					</div>
					<div class="col-md-4 marginauto_widthauto">
						<span class="share_text_mobile">Share</span>
						<span><a href="<?php echo "https://www.facebook.com/sharer/sharer.php?u=" . urlencode( get_the_permalink() ); ?>"><i class="fab fa-facebook-f class_class facebook_class"></i></a></span>
						<span><a href="<?php echo "https://twitter.com/intent/tweet?text=" . urlencode(get_the_permalink()); ?>"><i class="fab fa-twitter class_class twitter_class"></i></a></span>
						<span><a href="<?php echo "https://www.linkedin.com/sharing/share-offsite/?url=" . urlencode(get_the_permalink()); ?>"><i class="fab fa-linkedin class_class linkdin_class"></i></a></span>
						<span><i class="fab fa-pinterest class_class pinterest_class"></i></span>
						<span><i class="fab fa-youtube class_class youtube_class"></i></span>
					</div>
				</div>
			<?php endwhile?>
			<div class="row next_prev_link_single_main">
				<div class="col-md-6 next_prev_link_single">
					<span class="fa fa-angle-double-left"></span><?php previous_post_link(); ?> 
				</div>
				<div class="col-md-6 next_prev_link_single text-right">
					<?php next_post_link(); ?><span class="fa fa-angle-double-right"></span>
				</div>
			</div>
		</div>
		<div class="col-md-4 cat_right_blog_main_col">
			<div class="row">
				<span class="search_form_row">
					<?php get_search_form(); ?>
				</span>
			</div> 
			<div class="row list_categories_blog_row">
				<span class="heaidng_cat_right_blog">
					Categories
				</span>
				<?php
				$categories = get_categories( array(
					'orderby' => 'name',
					'order'   => 'ASC'
				) );
				foreach( $categories as $category ) {
					$category_link = sprintf( 
						'<a href="%1$s" alt="%2$s">%3$s</a>',
						esc_url( get_category_link( $category->term_id ) ),
						esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
						esc_html( $category->name )
					);
					echo '<p class="list_categories_blog_right">' . sprintf( esc_html__( '%s', 'textdomain' ), $category_link .'('.$category->count.')' ) . '</p> ';
				} ?>
			</div>	
			<div class="recent_new_posts_single_page">
				<span class="heaidng_cat_right_blog">
					Recent News
				</span>
			</div>
			<div class="main_block_recent_post">
				<div class="slider_recent_post">
				<?php $data_query =  new WP_Query(array('post_type' => 'post', 'order_by','Des', 'posts_per_page' => -1));?>
				<?php while ( $data_query->have_posts() ) : $data_query->the_post();?>
					<div>
						<div class="block_recent_post">
							<div class="row">
								<div class="col-md-2 padd_0px">
									<?php the_post_thumbnail();?>
								</div>
								<div class="col-md-10">
									<div class="row title_blog_pos_single_recent">
										<a href="<?php the_permalink();?>"><?php the_title();?></a>
									</div>
									<div class="row">
										<?php echo get_the_date();?>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile?>
				</div>
			</div>
			<div class="row facebook_posts_main_row"> 
				<span class="heaidng_cat_right_blog">
					Facebook Feed
				</span>
				<?php echo do_shortcode('[custom-facebook-feed]');?>
			</div>
			<div class="row float-left tweet_section"> 
				<?php dynamic_sidebar( 'blog-sidebar' ); ?>
			</div>
		</div>
	</div>
</div>
<?php //echo do_shortcode('[contact-form-7 id="276" title="Contact form 1"]');?>
</div>
<?php get_footer();?>