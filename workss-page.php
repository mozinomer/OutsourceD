<section class="data-section_home-page">
  	<?php wp_nonce_field( "ajax-register-nonce", 'ajaxRegisterNonceID' ); 
	if(!is_page('work')){?>
		<div class="row pos-rel">
			<h1 class="heaidng_home_page">
				<?php echo get_option("heading_data_home_page");?>
			</h1>
			<span class="tagline_heading_data_home-page">
				<?php echo get_option("tagline_heading_data_home_page");?>
			</span>
			<span class="view_all_works">
				<a href="<?php echo get_permalink( get_page_by_path( 'work' ) );?>">view all</a>
			</span>
		</div>
	<?php }
	$args = array(
		'type'                     => 'categoriesa',
		'child_of'                 => 0 
	);
	$categories = get_terms([
		'taxonomy' => 'categoriesa',	
	]);?>
	<div class="row fitler_row">
		<span class="filter_span">
			Filter By
		</span>
		<ul class="filter_by_cats_work">
		<?php 
		foreach ($categories as $category) {
			$url = get_term_link($category); ?>
			<li><a class="call-upon-liberation" data-taxno-id="<?php echo $category->term_id; ?>" href="<?php echo $url;?>"><?php echo $category->name; ?>cc</a></li>
			<?php
		}?>
		</ul>
	</div>
	<?php
	$color = 1; ?>
	<div class="row gird_view_work never-wanted-to-leave dis_none-mobile">
		<?php $data_query =  new WP_Query(array('post_type' => 'works', 'order_by'=>'Des', 'posts_per_page' => 4));
			while ( $data_query->have_posts() ) : $data_query->the_post(); ?>
			
			<div class="col-md-6 block_works fadeOut" data-aos="fade-up">
				<div class="row the_post_thumbnail_works">
					<span class="random_color_gen <?php echo $color ?>"></span>
					<a href="<?php the_permalink();?>" class="hvr-sweep-to-top" style="--my-color-var: <?php echo get_post_meta($post->ID, 'color_vlaue', true) ; ?>;" ><?php the_post_thumbnail();?></a>
				</div>
				<div class="row name_cat_works">
					<div class=" the_title_works">
					</div>
					<div class="title_post_work_and_cat">
						<span class="title_post_work"><?php the_title();?></span>
						<?php //echo get_the_ID(); ?> 
						<span class="post_work_and_cat">
							<?php
							$terms = get_the_terms( $post->ID , 'categoriesa' ) ? get_the_terms( $post->ID , 'categoriesa' ) : [];
							// var_dump($terms);
							if ( count( $terms ) > 0 ) {
								foreach ( $terms as $term ) {
									echo $term->name;
								}
							}
							?>
						</span>
					</div>
				</div>
			</div>
			<?php $color++?>
		<?php endwhile;?>
	</div>
	<?php if(is_page('home')){?>
	<div class="mobile_work_grids dis_blk-mobile">
	  <div class="your-class">
		<?php $data_query =  new WP_Query(array('post_type' => 'works', 'order_by'=>'Des', 'posts_per_page' => 4));
		while ( $data_query->have_posts() ) : $data_query->the_post(); ?>
		    <div>
					<div class="row the_post_thumbnail_works">
						<span class="random_color_gen <?php echo $color ?>"></span>
						<a href="<?php the_permalink();?>" class="hvr-sweep-to-top" style="--my-color-var: <?php echo get_post_meta($post->ID, 'color_vlaue', true) ; ?>;" ><?php the_post_thumbnail();?></a>
					</div>
					<div class="row name_cat_works">
						<div class="the_title_works">
						</div>
						<div class="title_post_work_and_cat">
							<span class="title_post_work"><?php the_title();?></span>
						</div>
					</div>
			</div>
		<?php endwhile;?>
	  </div>
	  <span class="view_all_link_mobile">
	  	<a href="https://www.outsourcedesigning.com/demo/work/">View All</a>
	  </span>
	</div>
	<?php } ?>
</section>


<?php if(is_page('work')){ ?>

<div class="mobile_view_work_page dis_blk-mobile">
	<?php $data_query =  new WP_Query(array('post_type' => 'works', 'order_by'=>'Des', 'posts_per_page' => 4));
	while ( $data_query->have_posts() ) : $data_query->the_post(); ?>
		<div class="row" data-aos="fade-up">
			<span class="img_container_work_page_mobile">
				<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
			</span>
			<span class="name_work_case_strudie_mobile_view">
				<?php the_title();?>
			</span>
			<span class="category_casestudies_mobile_view">
				<?php
					$terms = get_the_terms( $post->ID , 'categoriesa' ) ? get_the_terms( $post->ID , 'categoriesa' ) : [];
					// var_dump($terms);
					if ( count( $terms ) > 0 ) {
						foreach ( $terms as $term ) {
							echo $term->name;
						}
					}
				?>
			</span>
		</div>
	<?php endwhile; ?>
</div>


<?php } ?>