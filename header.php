<!DOCTYPE html>

<html>

<head>
	<title><?php get_bloginfo( 'tagline' );?></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:600,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/template_css/js/jquery.flexslider.js"></script>
    <script src="https://www.outsourcedesigning.com/demo/wp-content/themes/outsource/template_css/js/jquery.flexslider.js"></script>
    	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
	<meta http-equiv="ScreenOrientation" content="autoRotate:disabled">

	
</head>

<?php wp_head();?>

<body>
<!-- <div id="preloader">
	<div class="loading-container">
<h1 class="ml8">
  <span class="letters-container">
    <span class="letters letters-left"><img src="<?php echo get_template_directory_uri(); ?>/images/footer_logo.PNG"></span>
  </span>
  <span class="circle circle-white"></span>
  <span class="circle circle-dark"></span>
  <span class="circle circle-container"><span class="circle circle-dark-dashed"></span></span>
</h1>
	</div>
</div> -->
<!-- <span class="mesege_block">
	please rotate ypour device
</span> -->

<div class="main_body_contianer">

<header>
	<div class="container">
		<div class="row">
			<div class="col-md-3 col logo-img-container">
				<?php 
					   $custom_logo_id = get_theme_mod( 'custom_logo' );
					   $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					?>
					<a href="<?php bloginfo('url');?>"><img src="<?php echo $image[0]; ?>" alt=""></a>
			</div>
			<div class="col-md-7 col main-menu_header dis-flex">
				<?php wp_nav_menu( array( 'theme_location' => 'my-custom-menu' ) ); ?>
			</div>
			<div class="col-md-2 col dis-flex header_button">
				<a href="#" class="proposal_but"  data-toggle="modal" data-target="#myModal"><?php echo get_option('header_button_text');?></a>		
			</div>
		</div>
	</div>
</header>
<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content form_main_background">
      	<div class="row heading_form">
            GET A QUOTE TODAY
            <!-- <span></span> -->
          </div>
          <div class="row sub_heaidng_form">
            Get The Best Quotation For Your Entire Venture Now
          </div>
		<?php echo do_shortcode('[wpforms id="326"]');?>
      </div>
    </div>
  </div>
</div>







<div class="header_mobile_main">
	<div class="row main_row_mobile">
		<div class="col_mobile1 col-7">
			<span class="logo_contaienr_mobile">
				<?php 
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				?>
				<a href="<?php bloginfo('url');?>"><img src="<?php echo $image[0]; ?>" alt=""></a>
			</span>
		</div>
		<div class="col_mobile3 col-5">
			<div id="burgerIcon" class="order-3">
	            <span class="span0 noe_dis" style="background: rgb(51, 51, 51);"></span>
	            <span class="noe_dis" style="background: rgb(51, 51, 51); display: block;"></span>
	            <span class="noe_dis" style="background: rgb(51, 51, 51); display: block;"></span>
	            <span class="span4" style="background: rgb(51, 51, 51);"></span>
	            <span class="span5" style="background: rgb(51, 51, 51);"></span>
	        </div>
		</div>
	</div>
	<div class="menu_mobile menu_main_mobile">
			<ul class="menu">
			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-197 current_page_item menu-item-311">
				<a href="https://www.outsourcedesigning.com/demo/" aria-current="page" style="color: rgb(0, 0, 0); font-size: 32px; padding: 20px 0px 0px;">Home
				</a>
			</li>
			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63">
				<a href="https://www.outsourcedesigning.com/demo/the-agency/">The Agency
				</a>
			</li>
			<li class="services_list_menu menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-324">
				<a href="#" style="display: block;width: 100%;">Services</a>
				<ul class="sub-menu_mobile">
					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-278">
						<a href="https://www.outsourcedesigning.com/demo/services/designing/">Designing
						</a>
					</li>
					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-279">
						<a href="https://www.outsourcedesigning.com/demo/services/development/">Development
						</a>
					</li>
					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-280">
						<a href="https://www.outsourcedesigning.com/demo/services/seo/">SEO
						</a>
					</li>
					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-323">
						<a href="https://www.outsourcedesigning.com/demo/services/ecommerce-development/">eCommerce
						</a>
					</li>
				</ul>
			</li>
			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-61">
				<a href="https://www.outsourcedesigning.com/demo/work/" style="color: rgb(0, 0, 0); font-size: 32px; padding: 20px 0px 0px;">Work
				</a>
			</li>
			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-60">
				<a href="https://www.outsourcedesigning.com/demo/blog/" style="color: rgb(0, 0, 0); font-size: 32px; padding: 20px 0px 0px;">Blog
				</a>
			</li>
			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-300">
				<a href="https://www.outsourcedesigning.com/demo/contact/" style="color: rgb(0, 0, 0); font-size: 32px; padding: 20px 0px 0px;">Let’s Talk
				</a>
			</li>
			</ul>
		<div class="req_form">
			<a href="#" class="proposal_but"  data-toggle="modal" data-target="#myModal"><?php echo get_option('header_button_text');?></a>
		</div>
		<div class="row container footer_bottom">
			<div class="col-md-6 padd_0px main_container_icons">
				<span>
					<a href=""><i class="fab fa-facebook-f"></i></a>
				</span>
				<span>
					<a href=""><i class="fab fa-instagram"></i></a>
				</span>
				<span>
					<a href=""><i class="fab fa-twitter"></i></a>
				</span>
				<span>
					<a href=""><i class="fab fa-pinterest-p"></i></a>
				</span>
				<span>
					<a href=""><i class="fab fa-youtube"></i></a>
				</span>
				<span>
					<a href=""><i class="fab fa-tumblr"></i></a>
				</span>
			</div>
		</div>
	</div>
</div>


<!-- 
<div class="scroll_butt_with_mouse">
</div> -->
<script type="text/javascript">
	$(document).mousemove(function(e) {
	    $('.scroll_butt_with_mouse').offset({
	        left: e.pageX + -10,
	        top: e.pageY + -10
	    });
	});
</script>



<?php 
if (is_single(array(41,32,34,39,40,50))) {?>
	<div class="main_body_conainer">
<?php }
else
{
	if(!is_page('faq')){
	?>
	<div data-aos="fade-up" data-aos-duration="1000" class="main_body_conainer padd_72">
<?php }
}

?>
















<script type="text/javascript">
	
	jQuery(window).load(function () {
	    jQuery('.ml8').delay(2000).animate({
	            width: 'toggle'
	        }); 

	    jQuery('#preloader').delay(100).animate({
	            width: 'toggle'
	        }); 
		
		jQuery('body').delay(2000).css({'overflow':'visible'});
	    
	    // setTimeout(function () {
	    //     alert('page is loaded and 1 minute has passed');   
	    // }, 60000);
	});
</script>

<script type="text/javascript">
	anime.timeline({loop: true})
  .add({
    targets: '.ml8 .circle-white',
    scale: [0, 3],
    opacity: [1, 0],
    easing: "easeInOutExpo",
    rotateZ: 360,
    duration: 1100
  }).add({
    targets: '.ml8 .circle-container',
    scale: [0, 1],
    duration: 1100,
    easing: "easeInOutExpo",
    offset: '-=1000'
  }).add({
    targets: '.ml8 .circle-dark',
    scale: [0, 1],
    duration: 1100,
    easing: "easeOutExpo",
    offset: '-=600'
  }).add({
    targets: '.ml8 .letters-left',
    scale: [0, 1],
    duration: 1200,
    offset: '-=550'
  }).add({
    targets: '.ml8 .bang',
    scale: [0, 1],
    rotateZ: [45, 15],
    duration: 1200,
    offset: '-=1000'
  }).add({
    targets: '.ml8',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1400
  });

	anime({
	  targets: '.ml8 .circle-dark-dashed',
	  rotateZ: 360,
	  duration: 8000,
	  easing: "linear",
	  loop: true
	});
</script> 