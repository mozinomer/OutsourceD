<section class="article-section_home-page">
	<div class="container">
		<div class="row">
			<h1 class="heaidng_home_page">
				<?php echo get_option("heading_article_home_page");?>
			</h1>
			<span class="tagline_heading_article_home-page">
				<?php echo get_option("tagline_heading_article_home_page");?>
			</span>
		</div>
		<div class="row">
			<?php $data_query =  new WP_Query(array('post_type' => 'post', 'order_by','Des', 'posts_per_page' => 3));?>
			<?php while ( $data_query->have_posts() ) : $data_query->the_post();?>
			<div class="col-md-4 article_blck" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="100">
				<a href="<?php the_permalink();?>" class="blog_home_page_link">
				<div class="row article_thumbnial">
					<?php the_post_thumbnail();?>
				</div>
				<div class="row">
					<div class="col-md-6 col article_detail">
						social media
					</div>
					<div class="col-md-6 col article_detail text-right">
						<?php echo get_the_date(); ?>
					</div>
				</div>
				<div class="row article_title">
					<?php the_title();?>
				</div>
				<div class="row article_content">
					<?php the_excerpt();?>
				</div>
				</a>
			</div>
		<?php endwhile;?>
		</div>
		<a href="https://www.outsourcedesigning.com/demo/blog/" class="view_all_button_article_movile">view all</a>
	</div>
</section>

<section class="article-section_home-page_mobile">
	<div class="container">
		<div class="row">
			<h1 class="heaidng_home_page">
				<?php echo get_option("heading_article_home_page");?>
			</h1>
			<span class="tagline_heading_article_home-page">
				<?php echo get_option("tagline_heading_article_home_page");?>
			</span>
		</div>
		<div class="row">
			<div class="slier_article_homepage">
			<?php $data_query =  new WP_Query(array('post_type' => 'post', 'order_by','Des'));?>
			<?php while ( $data_query->have_posts() ) : $data_query->the_post();?>
				<div>
					<div class="col-md-4 article_blck">
						<a href="<?php the_permalink();?>" class="blog_home_page_link">
						<div class="row article_thumbnial">
							<?php the_post_thumbnail();?>
						</div>
						<div class="row">
							<div class="col-md-6 col article_detail">
								social media
							</div>
							<div class="col-md-6 col article_detail text-right">
								<?php echo get_the_date(); ?>
							</div>
						</div>
						<div class="row article_title">
							<?php the_title();?>
						</div>
						<div class="row article_content">
							<?php the_excerpt();?>
						</div>
						</a>
					</div>
				</div>
		<?php endwhile;?>
			</div>
		</div>
		<a href="https://www.outsourcedesigning.com/demo/blog/" class="view_all_button_article_movile">view all</a>
	</div>
</section>


