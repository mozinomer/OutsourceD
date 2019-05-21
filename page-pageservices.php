<?php get_header();?>





<div class="services_page_main-container">

	<div class="row container margin-auto">

		<div class="col-md-4 col">

			<?php $data_query =  new WP_Query(array('post_type' => 'services','order'   => 'ASC'));?>

			<?php while ( $data_query->have_posts() ) : $data_query->the_post();?>

				<div class="row services_left-block">

					<a class="services_services-page" href="<?php the_permalink();?>"><?php the_title();?></a>

				</div>

			<?php endwhile;?>

		</div>

		<div class="col-md-8 col">

			<div class="heading_service_page">

				<?php echo get_option('heading_service_page');?>

			</div>

			<div class="tagline_heading_service_page">

				<?php echo get_option('tagline_heading_service_page');?>

			</div>

			<div class="des_heading_service_page">

				<?php echo get_option('des_heading_service_page');?>

			</div>



			<div class="services-container">

				<?php $count=0;?>

				<?php $data_query =  new WP_Query(array('post_type' => 'services','order'   => 'ASC'));?>

				<?php while ( $data_query->have_posts() ) : $data_query->the_post(); $count++;?>

					<?php if ($count % 2 === 0)

					{?>


						<div class="row">

							<div class="col-md-4 col dis-flex the_post_thumbnail_serivees_page">

								<?php $galleryArray = get_post_gallery_ids( $post->ID,3);
								$ii = array_slice($galleryArray,1,1);
								foreach ( $ii as $id ) {?>
									<?php echo '<img src="' . wp_get_attachment_url( $id ) .'">'; ?>
								<?php } ?>

							</div>

							<div class="col-m8-9 col content_services_page">

								<div class="">

									<a class="title_services_right-block" href="<?php the_permalink();?>"><?php the_title();?></a>

								</div>

								<div class="content_service_services_page">

									<?php the_content();?>

								</div>

								<div class="learn-more_button_service_page">

									<a class="leran-more_service_page" href="<?php the_permalink();?>"> <?php echo get_option('learn_more_button_text_service_page')?> </a>

								</div>

							</div>

						</div>
						

					<?php }

				// for odd post

					else{ ?>


						<div class="row">

							<div class="col-md-7 col content_services_page">

								<div class="">

									<a class="title_services_right-block" href="<?php the_permalink();?>"><?php the_title();?></a>

								</div>

								<div class="content_service_services_page">

									<?php the_content();?>

								</div>

								<div class="learn-more_button_service_page">

									<a class="leran-more_service_page" href="<?php the_permalink();?>"> <?php echo get_option('learn_more_button_text_service_page')?> </a>

								</div>

							</div>

							<div class="col-md-5 col dis-flex the_post_thumbnail_serivees_page">

								<?php $galleryArray = get_post_gallery_ids( $post->ID,3);
								$ii = array_slice($galleryArray,1,1);
								foreach ( $ii as $id ) {?>
									<?php echo '<img src="' . wp_get_attachment_url( $id ) .'">'; ?>
								<?php } ?>

							</div>

						</div>

						<?php 

					}?>

				<?php endwhile;?>

			</div>

		</div>

	</div>

	<div class="row promo_services_page_row">

		<div class="container">

			<div class="heading_services_prmotion">

				<?php echo get_option('heading_services_prmotion');?>

			</div>

			<div class="descrption_services_prmotion">

				<?php echo get_option('description_services_prmotion');?>

			</div>

			<div class="request_a_quote">

				<a href="#" class="proposal_but" data-toggle="modal" data-target="#myModal"><?php echo get_option('promo_button_text'); ?></a>

			</div>

			<div class="form_quote_req">

				<div class="container main-bg-req-form">

					<div class="heading_form_req">

						<?php echo get_option('get_a_quote_text_heaidng'); ?>

					</div>

					<div class="description_form_req">

						<?php echo get_option('get_a_quote_text_description'); ?>

					</div>

					<div class="row inner-container_form-req">

						<div class="col-md-4 col">

							<input type="text" name=""  placeholder="name:" />

						</div>

						<div class="col-md-4 col">

							<input type="text" name=""  placeholder="email:" />

						</div>

						<div class="col-md-4 col">

							<input type="number" name=""  placeholder="phone:" />

						</div>



						<div class="col-md-4 col">

							<input type="text" name=""  placeholder="company:" />

						</div>

						<div class="col-md-4 col">

							<input type="file" name=""  placeholder="email:" />

						</div>

						<div class="col-md-4 col">

							<select>

								<option>categories</option>

							</select>

						</div>

					</div>

					<div class="row inner-container_form-req">

						<div class="col-md-10 col">

							<textarea>

								

							</textarea>

						</div>

						<div class="col-md-2 col button_send_req_form">

							<a href="#">send</a>

						</div>

					</div>

					<div class="cross_icon_req_form">

						X

					</div>

				</div>

			</div>

		</div>

	</div>

</div>





<?php get_template_part( 'full_services', 'page' ); ?>

<?php get_footer();?>