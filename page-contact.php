<?php get_header();

if ( have_posts() ) {

	while ( have_posts() ) {

		the_post(); 

?>			

<?php $bg_img = get_the_post_thumbnail_url();?>
<div class="main_container" style="background: url(<?php echo $bg_img; ?>); background-size: 100%;padding-bottom: 0px;">
	<div class="container">
		<div class="heading_contact">
			Contact Us
		</div>
		<div class="lsub_heading_contact_page">
			LET’S GET DIGITAL—ARE YOU READY TO ROLL?
		</div>
		<div class="para_contact_page">
			Contact us today for a better tomorrow. Get the best quotations for your entire venture now. <br>
			We would love to hear about your project!
		</div>
		<div class="row">
			<div class="col-md-12 pos-rel">
				<?php echo do_shortcode('[wpforms id="296" title="false" description="false"]');?>
			</div><!-- 
			<div class="col-md-5">
				<ul class="list_contat">
					<li>
						<i class="fas fa-envelope"></i>
						info@ouasdasdasdtsourcedesigning.com
					</li>
					<li>
						<i class="fas fa-tty"></i>
						<a href="tel:1-800-664-1945">1-800-664-1945</a>
					</li>
					<li>
						<i class="fas fa-map-marked-alt"></i>
						14 Wall Street, 20th floor Manhattan, New York, 10005
					</li>
				</ul>
				<div class="row social_row_contact">
					<span>
						<a href=""><i class="fab fa-facebook-f"></i></a>
					</span>
					<span>
						<a href=""><i class="fab fa-twitter"></i></a>
					</span>
					<span>
						<a href=""><i class="fab fa-youtube"></i></a>
					</span>
					<span>
						<a href=""><i class="fab fa-pinterest-p"></i></a>
					</span>
					<span>
						<a href=""><i class="fab fa-instagram"></i></a>
					</span>
					<span>
						<a href=""><i class="fab fa-tumblr"></i></a>
					</span>
				</div>
			</div> -->
		</div>
	</div>
</div>
<?php }

}

get_footer();?>



