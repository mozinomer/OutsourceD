<?php get_header();?>

<div class="blog-heading">

	<h1><span class="red">///</span>Blog</h1>

</div>

<div class="container padd_0px">

	<div class="row">

		<div class="col-md-8 padd_0px">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<div class="block_blog_post">

						<div class="row the_post_thumbnail_blog">

							<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>

						</div>

						<div class="row date_author_blog_post">

							<span class="date_log_post date_author_blog_post_same"><span class="icon fa fa-calendar"></span><?php echo get_the_date();?></span>

							<span class="author_log_post date_author_blog_post_same"><span class="icon fa fa-user"></span><?php echo get_the_author()?></span>

						</div>

						<div class="row title_blog_pos">

							<a href="<?php the_permalink();?>"><?php the_title();?></a>

						</div>

						<div class="row content_blog_post">

							<?php the_content();?>

						</div>

						<div class="row">

							<a href="<?php the_permalink();?>" class="view_more_class_blog_pos">View More</a>

						</div>

					</div>

				<?php endwhile; ?>

		</div><div class="col-md-4 cat_right_blog_main_col">

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

				</div>

	</div>

</div>

		<?php //get_template_part( 'nav', 'below' ); ?>

		<?php else : ?>

			<div class="container padd_0px">

				<div class="row">

					<div class="col-md-8 padd_0px">

						<span class="sorry-nothingFound">

							Try Better To be Next Time.

						</span>

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

					<?php $data_query =  new WP_Query(array('post_type' => 'post', 'order_by','Des', 'posts_per_page' => -1));?>

					<?php while ( $data_query->have_posts() ) : $data_query->the_post();?>

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

					<?php endwhile?>

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

		<?php endif; ?>

	</main>

<?php get_footer(); ?>