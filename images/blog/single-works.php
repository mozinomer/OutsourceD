<?php


get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) :
			the_post();?>
			<div class="seciton_page_single_post">
				<div class="row section_1_single_page" data-aos="fade-up" data-aos-anchor-placement="top-center">
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
				<div class="section_2_single_post" data-aos="fade-up" data-aos-anchor-placement="top-center">
					<div class="container">
						<div class="row main_row_container">
							<img src="<?php echo get_template_directory_uri(); ?>/images/signle/monitor.png" class="igm_1" data-aos="flip-up"      data-aos-offset="100"
     data-aos-duration="900">
							<img src="<?php echo get_template_directory_uri(); ?>/images/signle/tablet.png" class="igm_2" data-aos="zoom-in-right"      data-aos-offset="100"
     data-aos-duration="900">
							<img src="<?php echo get_template_directory_uri(); ?>/images/signle/laptop.png" class="igm_3" data-aos="fade-left"  data-aos-offset="100"
     data-aos-duration="900">
							<img src="<?php echo get_template_directory_uri(); ?>/images/signle/mobile.png" class="igm_4" data-aos="flip-right"
     data-aos-offset="100"
     data-aos-duration="1000">
							<p class="aijsld">
								CUSTOMER FOCUSED SITE REDESIGN INCREASES REVENUE AND CLICKS BY 40% FOR TALKAGENT
							</p>
						</div>
					</div>
				</div>
				<div class="section_3_single_post container " data-aos="fade-up" data-aos-anchor-placement="top-center">
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
								<div class="col-md-4">
								    <?php echo '<img src="' . wp_get_attachment_url( $id ) .'">'; ?>
								</div>

							<?php } ?>
					</div>
				</div>
				<div class="section_4_single_post" data-aos="fade-up" data-aos-anchor-placement="top-center">
					<div class="container">
						<div class="row heading_section_4_single_post">
							<?php echo get_option('heading_section_4_single_post');?>
						</div>
						<div class="row carousal_sectrion_4_single_post">
							<div class="col-md-1">
								<div class="left carousel-control" href="#myCarousel" data-slide="prev">
									<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon arrow_right_carousal_1" aria-hidden="true"></span>
									</a>
								</div>
							</div>
							<div class="col-md-10">
								<div class="screen_on_board_carousal_1">
									<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner"><?php
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
							<div class="col-md-1">
								<div class="right carousel-control" href="#myCarousel" data-slide="next">
									<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
									<span class="carousel-control-next-icon arrow_left_carousal_1" aria-hidden="true"></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="section_5_single_post" data-aos="fade-up" data-aos-anchor-placement="top-center">
					<div class="container">
						<div class="row heading_section_5_single_post">
							<h1><?php echo get_option('heading_section_5_single_post');?></h1>
							<p><?php echo get_option('subheading_section_5_single_post');?></p>
						</div>
						<div class="row section_5_carousal">
							<div class="col-md-1">
								<div class="left carousel-control" href="#myCarousel" data-slide="prev">
									<a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon arrow_right_carousal_1" aria-hidden="true"></span>
									</a>
								</div>
							</div>
							<div class="col-md-10">
								<div class="row">
									<div id="carouselExampleControls1" class="corousal_2 carousel slide" data-ride="carousel">
										<div class="carousel-inner">
											<?php
												$gallery2Array = get_post_meta($post->ID, 'vdw_gallery2_id', true);
												$row = [];
												
												$c = 0;
												$r = 0;
												$col = [];
												foreach ($gallery2Array as $id) {
													if ($c % 3 == 0 && $c !== 0) {
														$row[] = $col;
														$col = [];
														$r++;
													}

													$col[] = $id;
													$row[$r] = $col;

													$c++;
												}
											?>
											<?php $i = 0; foreach ($row as $col) { ?>
												<div class="carousel-item item <?php echo ($i == 0) ? 'active' : ''; ?>">
													<div class="row">
													<?php foreach ( $col as $id ) {
														?>
														<div class="col-md-4 img_100" style="background-image: <?php get_template_directory_uri();?>/images/blog/foon.PNG">
														    <?php echo '<img src="' . wp_get_attachment_url( $id ) .'">'; ?>
														</div>
													<?php } ?>
													</div>
												</div>
											<?php $i++; } ?>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-1">
								<div class="right carousel-control" href="#myCarousel" data-slide="next">
									<a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
									<span class="carousel-control-next-icon arrow_left_carousal_1" aria-hidden="true"></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="section_6_single_post container" data-aos="fade-up" data-aos-anchor-placement="top-center">
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
							<div class="row bottom_left_image_section_6 img_100">
								<?php $galleryArray = get_post_gallery_ids( $post->ID,-1);
								    // var_dump($galleryArray);
									$ii = array_slice($galleryArray,4,1);
									foreach ( $ii as $id => $value ) 
										{ ?>
									    <?php echo '<img src="' . wp_get_attachment_url( $value ) .'">'; ?>
									<?php } ?>
							</div>
						</div>
						<div class="col-md-9 col right_image_section_6 img_100">
							<?php $galleryArray = get_post_gallery_ids( $post->ID,-1);
							    // var_dump($galleryArray);
								$ii = array_slice($galleryArray,5,1);
								foreach ( $ii as $id => $value ) {?>
								    <?php echo '<img src="' . wp_get_attachment_url( $value ) .'">'; ?>
								<?php } ?>
						</div>
					</div>
				</div>
				<div class="section_7_related_posts container" data-aos="fade-up" data-aos-anchor-placement="top-center">
					<div class="row">
						<div class="col-md-1">
							<div class="left carousel-control last_last	" href="#myCarousel" data-slide="prev">
								<a class="left carousel-control last_last" href="#theCarousel" data-slide="prev">
								<span class="carousel-control-prev-icon arrow_right_carousal_1 arrow_right_carousal_1_1" aria-hidden="true"></span>
								</a>
							</div>
						</div>
						<div class="row gird_view_work col-md-10">
  <div class="row">
    <div class="col-md-12">
      <div class="carousel slide multi-item-carousel" id="theCarousel">
        <div class="carousel-inner">
									<?php $args = array( 'post_type' => 'works',);
										$loop = new WP_Query( $args );
										$i = 1;
										while ( $loop->have_posts() ) : $loop->the_post();?>

											<?php $count = $loop->found_posts;
													//echo $count;
											?>
											<?php if($i == 1){
												$active = "active";
											}
											else
											{
												$active = "";
											}
											?>
											<?php $count = $loop->found_posts;
												//echo $count;
											?>
          <div class="item <?php echo $active ?> uio">
										  <div class="block_works fadeOut col-xs-6">
												<div class="row the_post_thumbnail_works">
													<a href="<?php the_permalink();?>" class="hvr-sweep-to-top "><?php the_post_thumbnail();?></a>
												</div>
												<div class="row name_cat_works">
													<div class=" the_title_works">
													</div>
													<div class="">
														<span class="title_o">
															<?php the_title();?>
														</span>
														<?php //echo get_the_ID(); ?> 
														<span class="cat_ii">
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
											<!-- </div> -->
											</div>
          </div>
          <?php
										$i++;
										endwhile; ?>
        </div>
        <!-- <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a> -->
        <!-- <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a> -->
      </div>
    </div>
  </div>
						</div>
						<div class="col-md-1">
							<div class="right carousel-control last_last" href="#myCarousel" data-slide="next">
								<a class="right carousel-control last_last" href="#theCarousel" data-slide="next">
								<span class="carousel-control-next-icon arrow_left_carousal_1 arrow_right_carousal_1_1" aria-hidden="true"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
						<?php endwhile; ?>


<?php get_template_part( 'full_services', 'page' ); ?>
<?php get_footer();?>





