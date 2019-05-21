<section class="data-section_home-page">
	<div class="row">
		<h1 class="heaidng_home_page">
			<?php echo get_option("heading_data_home_page");?>
		</h1>
		<span class="tagline_heading_data_home-page">
			<?php echo get_option("tagline_heading_data_home_page");?>
		</span>
	</div>
	<div class="row">
		<?php $data_query =  new WP_Query(array('post_type' => 'data', 'order_by','Des'));?>
		<?php while ( $data_query->have_posts() ) : $data_query->the_post();?>

		<div class="col-md-4 data_columns_home_page text-center">
			<div class="container">
				<div class="row text-center margin-auto">
					<?php the_post_thumbnail();?>
				</div>
				<div class="row the_excerpt_data">
					<?php the_excerpt();?>
				</div>
				<div class="row">
					<a class="view-case-study" href="<?php the_permalink();?>"><?php echo get_option('button_title_data_home_page')?></a>
				</div>
			</div>
		</div>

		<?php endwhile;?>
	</div>
</section>