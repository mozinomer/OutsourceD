<!DOCTYPE html>

<html>

<head>

	<title><?php get_bloginfo( 'tagline' );?></title>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

</head>

<?php wp_head();?>

<body>




<header>

	<div class="container">

		<div class="row">

			<div class="col-md-3 col logo-img-container">

				<?php 

					   $custom_logo_id = get_theme_mod( 'custom_logo' );

					   $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

					?>

					<img src="<?php echo $image[0]; ?>" alt="">


			</div>

			<div class="col-md-7 col main-menu_header dis-flex">

				<?php wp_nav_menu( array( 'theme_location' => 'my-custom-menu' ) ); ?>

			</div>

			<div class="col-md-2 col dis-flex header_button">

				<a href="#"><?php echo get_option('header_button_text');?></a>

			</div>

		</div>

	</div>

</header>

<div data-aos="fade-up" data-aos-duration="1000" class="main_body_conainer">