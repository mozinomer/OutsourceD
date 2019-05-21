<?php


get_header(); ?>

<div id="primary" class="content-area dis_none-mobile">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) :
			the_post();?>
			<div class="seciton_page_single_post">
				<div class="row section_1_single_page" style="--my-color-var1: url('<?php echo get_post_meta($post->ID, 'inner_page_bg_color', true) ; ?>'); background-size: 100% 100% !important;" data-aos="fade-up" data-aos-anchor-placement="top-center">
					<div class="container">
						<div class="row cat_single_post">
						<?php
							$terms = get_the_terms( $post->ID , 'categoriesa' ) ? get_the_terms( $post->ID , 'categoriesa' ) : [];
							// var_dump($terms);
							if ( count( $terms ) > 0 ) 
							{
								foreach ( $terms as $term ) 
								{
									echo $term->name;
								}
							}
						?>
						</div>
						<div class="heading_title_workpage">
							<h1><?php the_title();?></h1>
						</div>
						<div class="row">
							<div class="col col-md-4 columns_fields_case_studies">
								<div class="row heading_columns_case_studies">
									<?php echo 	get_option('column1_heading_case_sudies');?>
								</div>
							    <p><?php echo get_post_meta($post->ID, 'column1', true) ; ?></p>
							</div>
							<div class="col col-md-4 columns_fields_case_studies">
								<div class="row heading_columns_case_studies">
									<?php echo get_option('column2_heading_case_sudies');?>
								</div>
							    <p><?php echo get_post_meta($post->ID, 'column2', true) ; ?></p>
							</div>
							<div class="col col-md-4 columns_fields_case_studies">
								<div class="row heading_columns_case_studies">
									<?php echo get_option('column3_heading_case_sudies');?>
								</div>
							    <p><?php echo get_post_meta($post->ID, 'column3', true) ; ?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="section_2_single_post" data-aos="fade-up">
					<div class="container">
						<div class="row main_row_container">
							<div class="images_fix-ed">
								<div class="slider_img1_laptop" data-aos="flip-up">
									<img src="<?php echo get_template_directory_uri(); ?>/images/signle/monitor.png" class="">
									<div class="slider1">
										<img src="<?php echo get_post_meta($post->ID, 'Monitor_background', true) ; ?>" class="">
									</div>
								</div>

							<div class="images_fix-ed2"  data-aos="zoom-in-right">
								<img src="<?php echo get_template_directory_uri(); ?>/images/signle/tablet.png" class="">
									<div class="slider2">
										<img src="<?php echo get_post_meta($post->ID, 'Tablet_background', true) ; ?>" class="">
									</div>
							</div>
							<div class="images_fix-ed3"  data-aos="fade-left">
								<img src="<?php echo get_template_directory_uri(); ?>/images/signle/laptop.png" class="">
									<div class="slider3">
										<img src="<?php echo get_post_meta($post->ID, 'laptop_bakgorund', true) ; ?>" class="">
									</div>
							</div>
							<div class="images_fix-ed4" data-aos="flip-right">
								<img src="<?php echo get_template_directory_uri(); ?>/images/signle/mobile.png" class="">
								<div class="slider4">
									<img src="<?php echo get_post_meta($post->ID, 'Mobile_background', true) ; ?>" class="">
								</div>
							</div>
							<p class="aijsld">
								CUSTOMER FOCUSED SITE REDESIGN INCREASES REVENUE AND CLICKS BY 40% FOR TALKAGENT
							</p>
							</div>
						</div>
					</div>
				</div>
				<div class="section_3_single_post container " data-aos="fade-up">
					<div class="row">
						<div class="col-md-3">
							<?php echo get_option('section_3_case_studies_heading_left');?>
						</div>
						<div class="col-md-9">
							<?php echo get_option('section_3_case_studies_text_left');?>
						</div>
					</div>
					<div class="row container images_section_3_casestudies">
							<?php $galleryArray = get_post_gallery_ids( $post->ID,3);
							$ii = array_slice($galleryArray,0,3);
							foreach ( $ii as $id ) {?>
								<div class="col-md-4 columns_section_3_row">
								    <?php echo '<img src="' . wp_get_attachment_url( $id ) .'">'; ?>
								</div>

							<?php } ?>
					</div>
				</div>
				<div class="section_4_single_post" data-aos="fade-up" style="background: url(<?php echo get_post_meta($post->ID, 'section4_image', true); ?>">
					<div class="container">
						<div class="row heading_section_4_single_post">
							<?php echo get_option('heading_section_4_single_post');?>
						</div>
						<div class="row carousal_sectrion_4_single_post">
							<div class="col-md-12">
								<div class="screen_on_board_carousal_1">
										<?php 
										$galleryArray = get_post_meta($post->ID, 'vdw_gallery_id', true);
									    // var_dump($galleryArray);
										// $ii = array_slice($galleryArray,3,3);
										$c = 0;
										$classes = "carousel-item carousal_lappe_bg_img";
										foreach ( $galleryArray as $id => $value ) { ?>
											<div class="<?php echo ($c == 0) ? $classes . ' active' : $classes; ?>">
											    <?php echo '<img src="' . wp_get_attachment_url( $value	 ) .'">'; ?>
											</div> <?php 
											
											$c++;
										} ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="section_5_single_post" data-aos="fade-up" style="--my-color-var11: url('<?php echo get_post_meta($post->ID, 'section_5_background', true) ; ?>');">
					<div class="container">
						<div class="row heading_section_5_single_post">
							<h1><?php echo get_option('heading_section_5_single_post');?></h1>
							<p><?php echo get_option('subheading_section_5_single_post');?></p>
						</div>
						<div class="row section_5_carousal">
							<div class="col-md-12">
								<div class="slider_4_slik">
									<?php
										$gallery2Array = get_post_meta($post->ID, 'vdw_gallery2_id', true);
										$row = [];
										
										$c = 0;
										$r = 0;
										$col = [];
										foreach ($gallery2Array as $id) { ?>
											<div>
												<?php echo '<img src="' . wp_get_attachment_url( $id ) .'">'; ?>
											</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="section_6_single_post container" data-aos="fade-up">
					<div class="row">
						<div class="col-md-3 col">
							<div class="row section_6_headin_single_post">
								<h1><?php echo get_option('section_6_headin_single_post');?></h1>
								<p><?php echo get_option('section_6_subheadin_single_post');?></p>
							</div>
							<div class="row img_100">
								<?php $galleryArray = get_post_gallery_ids( $post->ID,-1);
								    // var_dump($galleryArray);
									$ii = array_slice($galleryArray,3,1);
									foreach ( $ii as $id => $value ) {?>
										    <?php echo '<img src="' . wp_get_attachment_url( $value ) .'">'; ?>
									<?php } ?>
							</div>
						</div>
						<div class="col-md-9 col right_image_section_6 img_100">
							<?php $galleryArray = get_post_gallery_ids( $post->ID,-1);
								    // var_dump($galleryArray);
									$ii = array_slice($galleryArray,4,1);
									foreach ( $ii as $id => $value ) 
										{ ?>
									    <?php echo '<img src="' . wp_get_attachment_url( $value ) .'">'; ?>
									<?php } ?>
						</div>
					</div>
				</div>
				<div class="section_stationary_sreen">
					<?php $galleryArray = get_post_gallery_ids( $post->ID,-1);
					    // var_dump($galleryArray);
						$ii = array_slice($galleryArray,7,2);?>
						<div class="slider_main_stationary_single_works">
						<?php 
							foreach ( $ii as $id => $value ) 
							{ ?>
								<div>
						    	<?php echo '<img src="' . wp_get_attachment_url( $value ) .'">'; ?>
						    	</div>
						<?php } ?>
						</div>
				</div>
				<div class="section_7_single_post_related_post container">
					<div class="slider_related_post_single_works">
						<?php $data_query =  new WP_Query(array('post_type' => 'works', 'order_by'=>'Des', 'posts_per_page' => 2));
						while ( $data_query->have_posts() ) : $data_query->the_post(); ?>
							<div>
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
						<?php endwhile; ?>
					</div>
				</div>	
			</div>
		<?php endwhile; ?>
	</main>
</div>







<div class="dis_blk-mobile">
	<?php
	while ( have_posts() ) :
	the_post();?>
		<div class="row section_1_single_page" style="--my-color-var12: url('<?php echo get_post_meta($post->ID, 'inner_page_bg_color_for_mobile', true) ; ?>');">
			<div class="container">
				<div class="row cat_single_post_mobile">
				<?php
					$terms = get_the_terms( $post->ID , 'categoriesa' ) ? get_the_terms( $post->ID , 'categoriesa' ) : [];
					// var_dump($terms);
					if ( count( $terms ) > 0 ) 
					{
						foreach ( $terms as $term ) 
						{
							echo $term->name;
						}
					}
				?>
				</div>
				<div class="heading_title_workpage_mobile">
					<h1><?php the_title();?></h1>
				</div>
				<div class="row">
					<div class="slider_movile_section_1_single">
						<div>
							<div class="row text-center row_carousal_mobile_section_1_mobile">
								<?php echo 	get_option('column1_heading_case_sudies');?>
							</div>
						    <p class="text_para_carousal_section1_mobile"><?php echo get_post_meta($post->ID, 'column1', true) ; ?></p>
						</div>
						<div>
							<div class="row text-center row_carousal_mobile_section_1_mobile">
								<?php echo get_option('column2_heading_case_sudies');?>
							</div>
						    <p class="text_para_carousal_section1_mobile"><?php echo get_post_meta($post->ID, 'column2', true) ; ?></p>
						</div>
						<div>
							<div class="row text-center row_carousal_mobile_section_1_mobile">
								<?php echo get_option('column3_heading_case_sudies');?>
							</div>
						    <p class="text_para_carousal_section1_mobile"><?php echo get_post_meta($post->ID, 'column3', true) ; ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section_2_single_post" data-aos="fade-up">
			<div class="container">
				<div class="row main_row_container">
					<p class="aijsld">
						CUSTOMER FOCUSED SITE REDESIGN INCREASES REVENUE AND CLICKS BY 40% FOR TALKAGENT
					</p>
					<div class="">
					<div class="" data-aos="flip-up">
						<img src="<?php echo get_template_directory_uri(); ?>/images/signle/monitor.png" class="" width="100%">
						<div class="slider1">
							<img src="<?php echo get_post_meta($post->ID, 'Monitor_background', true) ; ?>" class="">
						</div>
					</div>
					<div class="tab_class_mobile"  data-aos="zoom-in-right">
						<img src="<?php echo get_template_directory_uri(); ?>/images/signle/tablet.png" class="">
						<div class="slider2">
							<img src="<?php echo get_post_meta($post->ID, 'Tablet_background', true) ; ?>" class="">
						</div>
					</div>
					<div class="mobile_class_mobile" data-aos="flip-right">
						<img src="<?php echo get_template_directory_uri(); ?>/images/signle/mobile.png" class="">
						<div class="slider4">
							<img src="<?php echo get_post_meta($post->ID, 'Mobile_background', true) ; ?>" class="">
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section_3_single_post_mobile container ">
			<div class="row">
				<div class="col-md-3">
					<?php echo get_option('section_3_case_studies_heading_left');?>
				</div>
				<div class="col-md-9">
					<?php echo get_option('section_3_case_studies_text_left');?>
				</div>
			</div>
			<div class="row container images_section_3_casestudies_mobile">
					<?php $galleryArray = get_post_gallery_ids( $post->ID,3);
					$ii = array_slice($galleryArray,0,3);
					foreach ( $ii as $id ) {?>
						<div>
						    <?php echo '<img src="' . wp_get_attachment_url( $id ) .'">'; ?>
						</div>

					<?php } ?>
			</div>
		</div>
		<div class="section_4_single_post" style="background: url(<?php echo get_post_meta($post->ID, 'section4_image_for_mobile', true); ?>">
			<div class="container">
				<div class="row heading_section_4_single_post">
					<?php echo get_option('heading_section_4_single_post');?>
				</div>
				<div class="row carousal_sectrion_4_single_post">
					<div class="col-md-12">
						<div class="screen_on_board_carousal_1">
								<?php 
								$galleryArray = get_post_meta($post->ID, 'vdw_gallery_id', true);
							    // var_dump($galleryArray);
								// $ii = array_slice($galleryArray,3,3);
								$c = 0;
								$classes = "carousel-item carousal_lappe_bg_img";
								foreach ( $galleryArray as $id => $value ) { ?>
									<div class="<?php echo ($c == 0) ? $classes . ' active' : $classes; ?>">
									    <?php echo '<img src="' . wp_get_attachment_url( $value	 ) .'">'; ?>
									</div> <?php 
									
									$c++;
								} ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section_5_single_post" style="--my-color-var113: url('<?php echo get_post_meta($post->ID, 'section_5_background_for_mobile', true) ; ?>');">
			<div class="container">
				<div class="row heading_section_5_single_post">
					<h1><?php echo get_option('heading_section_5_single_post');?></h1>
					<p><?php echo get_option('subheading_section_5_single_post');?></p>
				</div>
				<div class="row section_5_carousal">
					<div class="col-md-12">
						<div class="slider_main_stationary_single_works_1_1">
							<?php
								$gallery2Array = get_post_meta($post->ID, 'vdw_gallery2_id', true);
								foreach ($gallery2Array as $id) { ?>
									<div>
										<?php echo '<img src="' . wp_get_attachment_url( $id ) .'">'; ?>
									</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section_6_single_post container" data-aos="fade-up">
			<div class="row">
				<div class="row section_6_headin_single_post">
					<h1><?php echo get_option('section_6_headin_single_post');?></h1>
					<p><?php echo get_option('section_6_subheadin_single_post');?></p>
				</div>
				<div class="row img_100">
					<?php $galleryArray = get_post_gallery_ids( $post->ID,-1);
					    // var_dump($galleryArray);
						$ii = array_slice($galleryArray,5,1);
						foreach ( $ii as $id => $value ) {?>
							    <?php echo '<img src="' . wp_get_attachment_url( $value ) .'">'; ?>
						<?php } ?>
				</div>
				<div class="row img_2_single_mobile_work_page">
					<?php $galleryArray = get_post_gallery_ids( $post->ID,-1);
						    // var_dump($galleryArray);
							$ii = array_slice($galleryArray,6,1);
							foreach ( $ii as $id => $value ) 
								{ ?>
							    <?php echo '<img src="' . wp_get_attachment_url( $value ) .'">'; ?>
							<?php } ?>
				</div>
			</div>
		</div>
		<div class="section_stationary_sreen">
					<?php $galleryArray = get_post_gallery_ids( $post->ID,-1);
					    // var_dump($galleryArray);
						$ii = array_slice($galleryArray,7,2);?>
					<div class="slider_main_stationary_single_works">
					<?php 
						foreach ( $ii as $id => $value ) 
						{ ?>
							<div>
					    	<?php echo '<img src="' . wp_get_attachment_url( $value ) .'">'; ?>
					    	</div>
					<?php } ?>
				</div>
		</div>
	<?php endwhile; ?>
</div>





<?php get_footer();?>





