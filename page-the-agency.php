<?php get_header();?>
<div class="container main_row_agency">
	<div class="heading_agency_page">
		the <span><?php echo get_option('heading_agency_page');?></span>
	</div>
	<div class="description_heading_agency_page">
		<?php echo get_option('description_heading_agency_page');?>
	</div>
	<div class="sub_heading_agency_page">
		<?php echo get_option('sub_heading_agency_page');?>
		<span><?php echo get_option('strong_sub_heading_text1');?></span>
		and
		<span><?php echo get_option('strong_sub_heading_text2');?></span>
	</div>
	<div class="row text-center desktop_sldier_agency">
		<?php $data_query =  new WP_Query(array('post_type' => 'agency', 'order_by','Des'));?>
		<?php while ( $data_query->have_posts() ) : $data_query->the_post();?>
		<div class="col-md-4">
			<div class="row the_post_thumbnail_agency" data-aos="zoom-in-up" data-aos-duration="1000">
				<?php the_post_thumbnail();?>
			</div>
			<div class="row the_title_agency">
				<?php the_title();?>
			</div>
			<div class="row the_content_agency">
				<?php the_content();?>
			</div>
		</div>
		<?php endwhile;?>
	</div>
	<div class="row text-center mobile_sldier_agency">
		<div class="sldier_mobile_agency">
		<?php $data_query =  new WP_Query(array('post_type' => 'agency', 'order_by','Des'));?>
		<?php while ( $data_query->have_posts() ) : $data_query->the_post();?>
			<div>
				<div class="col-md-4">
					<div class="row the_post_thumbnail_agency">
						<?php the_post_thumbnail();?>
					</div>
					<div class="row the_title_agency">
						<?php the_title();?>
					</div>
					<div class="row the_content_agency">
						<?php the_content();?>
					</div>
				</div>
			</div>
		<?php endwhile;?>
		</div>
	</div>
</div>
<section class="about-us_agency" id="desktop_sldier_agency_block" data-aos="fade-up" data-aos-duration="1000">
	<div class="container">
		<h1 class="heading_aboutus_agency">
			<?php echo get_option('heading_aboutus_agency');?>
		</h1>
		<span class="first_left blocks">
			<strong><?php echo get_option('inner_heading1_aboutus_agency');?></strong>
			<?php echo get_option('inner_para1_aboutus_agency');?>
		</span>
		<span class="first_right blocks">
			<strong><?php echo get_option('inner_heading2_aboutus_agency');?></strong>
			<?php echo get_option('inner_para2_aboutus_agency');?>
		</span>
		<div class="row row-second-agency">
			<span class="first_left blocks">
				<strong><?php echo get_option('inner_heading3_aboutus_agency');?></strong>
				<?php echo get_option('inner_para3_aboutus_agency');?>
			</span>
			<span class="first_right blocks">
				<strong><?php echo get_option('inner_heading4_aboutus_agency');?></strong>
				<?php echo get_option('inner_para4_aboutus_agency');?>
			</span>
		</div>
		<div class="row row-third-agency">
			<span class="first_left blocks">
				<strong><?php echo get_option('inner_heading5_aboutus_agency');?></strong>
				<?php echo get_option('inner_para5_aboutus_agency');?>
			</span>
			<span class="first_right blocks">
				<strong><?php echo get_option('inner_heading6_aboutus_agency');?></strong>
				<?php echo get_option('inner_para6_aboutus_agency');?>
			</span>
		</div>
		<div class="row row-fourth-agency">
			<span class="first_left blocks">
				<strong><?php echo get_option('inner_heading7_aboutus_agency');?></strong>
				<?php echo get_option('inner_para7_aboutus_agency');?>
			</span>
			<span class="first_right blocks">
				<strong><?php echo get_option('inner_heading8_aboutus_agency');?></strong>
				<?php echo get_option('inner_para8_aboutus_agency');?>
			</span>
		</div>
		<div class="heading_bottom_agency_about">
			<?php echo get_option('heading_bottom_about_agency');?>
		</div>
	</div>
</section>


<section class="mobile_about_us_agency">
	<div class="container">
		<h1 class="heading_aboutus_agency">
			<?php echo get_option('heading_aboutus_agency');?>
		</h1>
		<div class="row">
			<span class="text-left dis_flex_mobile_agency">
				<span class="circle_text">1</span>
				<span>
				<strong><?php echo get_option('inner_heading1_aboutus_agency');?></strong>
				<?php echo get_option('inner_para1_aboutus_agency');?>
				</span>
			</span>
		</div>
		<div class="row">
			<span class="text-right disflex_right_mobile">
				<span class="circle_text fl-right">2</span>
				<span>
					<strong><?php echo get_option('inner_heading2_aboutus_agency');?></strong>
					<?php echo get_option('inner_para2_aboutus_agency');?>
				</span>
			</span>
		</div>
		<div class="row">
			<span class="text-left dis_flex_mobile_agency">
				<span class="circle_text">3</span>
				<span>
					<strong><?php echo get_option('inner_heading3_aboutus_agency');?></strong>
					<?php echo get_option('inner_para3_aboutus_agency');?>
				</span>
			</span>
		</div>
		<div class="row">
			<span class="text-right disflex_right_mobile">
				<span class="circle_text fl-right">4</span>
				<span>
					<strong><?php echo get_option('inner_heading4_aboutus_agency');?></strong>
					<?php echo get_option('inner_para4_aboutus_agency');?>
				</span>
			</span>
		</div>
		<div class="row">
			<span class="text-left dis_flex_mobile_agency">
				<span class="circle_text">5</span>
				<span>
					<strong><?php echo get_option('inner_heading5_aboutus_agency');?></strong>
					<?php echo get_option('inner_para5_aboutus_agency');?>
				</span>
			</span>
		</div>
		<div class="row">
			<span class="text-right disflex_right_mobile">
				<span class="circle_text fl-right">6</span>
				<span>
					<strong><?php echo get_option('inner_heading6_aboutus_agency');?></strong>
					<?php echo get_option('inner_para6_aboutus_agency');?>
				</span>
			</span>
		</div>
		<div class="row">
			<span class="text-left dis_flex_mobile_agency">
				<span class="circle_text">7</span>
				<span>
					<strong><?php echo get_option('inner_heading7_aboutus_agency');?></strong>
					<?php echo get_option('inner_para7_aboutus_agency');?>
				</span>
			</span>
		</div>
		<div class="row">
			<span class="text-right disflex_right_mobile">
				<span class="circle_text fl-right">8</span>
				<span>
					<strong><?php echo get_option('inner_heading8_aboutus_agency');?></strong>
					<?php echo get_option('inner_para8_aboutus_agency');?>
				</span>
			</span>
		</div>
		<div class="heading_bottom_agency_about">
			<?php echo get_option('heading_bottom_about_agency');?>
		</div>
	</div>
</section>

<?php // get_template_part( 'full_services', 'page' ); ?>
<?php get_footer();?>









