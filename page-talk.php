<?php 
    get_header();
?>

<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootbusiness | Short description about company">
    <meta name="author" content="Your name">
    <title>Outsourcedesigning</title>
    <link href="<?php echo get_template_directory_uri(); ?>/template_css/main.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/template_css/tabs.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/template_css/toggle.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/template_css/colorbox.css" type="text/css" rel="stylesheet" />
    <!-- Start Bootstrap -->
    <link href="<?php echo get_template_directory_uri(); ?>/template_css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/template_css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/template_css/boot-business.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
    <!-- End Bootstrap -->
  </head>

  <body>

 <!--contact us-->

 <div class="contact-section" id="contact-section">

    <div class="container">

      

      <div class="row-fluid">

      <div class="page-header" id="conatct-header">

        	<h2>Contact Us</h2>

            <h3>LET’S GET <span>DIGITAL</span> – WE ARE READY TO ROLL</h3>

        	<p>With an ardor for precision drives our creative approach. We develop a clear picture of our customer’s needs bases on our creative decision and our experience.</p>

      	</div>

      

      <div class="lighbox-form" id="lightbox-form">

               <?php echo do_shortcode('[contact-form-7 id="283" title="contect-form"]');?>

                

        </div>	

        

      </div>

    </div>

 </div>




<div class="contactus-bottom">
    
    <div id="contact container" style="max-width: 1170px;margin: 0 auto;">
        <div class="row">
            <div class="col-md-6">
                <h4 class="heading_contect_a">info@outsourcedesigning.com</h4>
            </div>
            <div class="col-md-6">
                <h4 class="heading_contect_a">support@outsourcedesigning.com</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="links-tabs">
                        <a href="#."><img alt="" src="<?php bloginfo('template_url'); ?>/template_css/template_images/images/social-links/fb_icon.png"></a>
                        <a href="#."><img alt="" src="<?php bloginfo('template_url'); ?>/template_css/template_images/images/social-links/twittwr_icon.png"></a>
                        <a href="#."><img alt="" src="<?php bloginfo('template_url'); ?>/template_css/template_images/images/social-links/youtube_icon.png"></a>
                        <a href="#."><img alt="" src="<?php bloginfo('template_url'); ?>/template_css/template_images/images/social-links/lindin_icon.png"></a>
                        <a href="#."><img alt="" src="<?php bloginfo('template_url'); ?>/template_css/template_images/images/social-links/pinterest_icon.png"></a>
                        <a href="#."><img alt="" src="<?php bloginfo('template_url'); ?>/template_css/template_images/images/social-links/gplus_icon.png"></a>
                        <a href="#."><img alt="" src="<?php bloginfo('template_url'); ?>/template_css/template_images/images/social-links/b_icon.png"></a>
                 </div>
            </div>
        </div>
    </div>
</div>
<?php //get_template_part( 'full_services', 'page' ); ?>
<footer style="background: #fff;color: #000;">
    <div class="container">
        <div class="row dis-flex main-row-top-footer">
            <div class="col-md-4 text-center">
                <span class="footer_icons footer_icons1">sales@outsourcedesigning.com </span>
            </div>
            <div class="col-md-4 text-center">
                <span class="footer_icons footer_icons2">14 Wall Street, 20th floor Manhattan, New York, 10005 </span>
            </div>
            <div class="col-md-4 text-center">
                <span class="footer_icons footer_icons3">Phone: 1-800-664-1945</span>
            </div>
        </div>
    </div>
    <div class="row container footer_bottom">
        <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri(); ?>/images/footer_socials.PNG">
        </div>
        <div class="col-md-6">
            <ul class="dis-flex list_footer_middle">
                <li>terms of services</li>
                <li>private policy</li>
                <li>information</li>
            </ul>
        </div>
    </div>
    <div class="row container footer_bottom_bottom">
        d &copy; 2019. All right reserved
    </div>
</footer>

 

 <!-- Start: FOOTER -->

   

    <!-- End: FOOTER -->

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/template_css/js/jquery.min.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/template_css/js/bootstrap.min.js"></script>

    <script src="<?php bloginfo('template_url'); ?>/template_css/js/jquery.easytabs.min.js" type="text/javascript"></script>

    <script type="text/javascript">

    $(document).ready( function() {

      $('#tab-container').easytabs();

    });

    </script>

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/template_css/js/toggle.js"></script>

	



    

    

  </body>

</html>

