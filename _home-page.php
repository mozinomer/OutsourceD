<!-- section top banner -->

<div class="row mian_banner_gif_row">

	<video id="video_background" preload="auto" autoplay="" muted="" loop="" width="100%">

	      <source src="http://video1.etecminds.com/themes/etecminds/assets/video/etecminds-home-up.webm" type="video/webm">

	      <source src="http://video2.etecminds.com/themes/etecminds/assets/video/etecminds-home-up.mp4" type="video/mp4">

	</video>

	<div class="auto_typer_row">

		<h1 class="h1"><span id="changingword">Gardener</span></h1>
	<div class="button_main_slider">
		<a href="#">read more</a>
	</div>
	<div class="scroll_button_main_slider">
		<a class="scroll_button" href="#section_services_homepage"></a>
	</div>
	</div>

</div>

<!-- services -->

<div class="container section_services_homepage" id="section_services_homepage">

	<div class="row container-fluid">

		<?php $data_query =  new WP_Query(array('post_type' => 'services','order' => 'ASC'));?>

		<?php while ( $data_query->have_posts() ) : $data_query->the_post();?>
			<a href="<?php the_permalink();?>" class="the_permalink_services">
			<div class="block_servies_home-page">

				<div class="row text-center services_post_thumbnail">
					<span class="img_hoverr"><?php the_post_thumbnail();?></span>
						<span class="hover_img"><?php $galleryArray = get_post_gallery_ids( $post->ID,3);
							$ii = array_slice($galleryArray,0,3);
							foreach ( $ii as $id ) {?>
								    <?php echo '<img src="' . wp_get_attachment_url( $id ) .'">'; ?>
						<?php } ?>
						</span>
				</div>

				<div class="row text-center title_post_services"><?php the_title();?></div>

			</div>
			</a>

		<?php endwhile;?>

	</div>

</div>

<!-- section_main_service_under_services_homepage -->

<?php get_template_part( 'under_services_home-page', 'page' ); ?>

<!-- section_main_service_under_services_homepage -->

<!-- case studies -->

<?php get_template_part( 'case_studies', 'page' ); ?>

<!-- data section -->

<div class="container section_recent_work_homepage">

	<div class="container-fluid">

		<?php get_template_part( 'workss', 'page' ); ?>

	</div>

</div>

<!-- section article -->

<?php get_template_part( 'article', 'page' ); ?>

<!-- full services -->

<?php get_template_part( 'full_services', 'page' ); ?>

