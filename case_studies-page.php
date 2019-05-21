<div class="desktop_casestudeies_view">
<!-- data block -->
	<?php
		$count = 0;
		$query=new WP_Query(array('post_type' => 'movies','order'   => 'ASC',));
	?>
	<?php while ( $query->have_posts() ) : $query->the_post();
	?>
	<?php $count ++; ?>
	<?php 
		if ($count % 2 === 0)
	{?>
		<div class="row even_column_homeposts">
			<div class="col-md-6 col" data-aos="fade-right">
					<div class="inner-contianer">
						<div class="row">
							<h2 class="heading_home_posts"><?php the_title();?><span class="excerpt_casestudies"><?php the_excerpt(); ?></span></h2>
						</div>
						<div class="row content_homepost">
							<p><?php the_content();?></p>
						</div>
						<div class="row">
							<a class="click_home_pst" href="<?php the_permalink();?>">Click to talk</a>
						</div>
					</div>
			</div>
			<div class="col-md-6 col post_thumbnail_homeposts_even"  data-aos="fade-left">
				<?php the_post_thumbnail();?>
			</div>
		</div>
	<?php }
	// for odd post
	else
	{ ?>
		<div class="row odd_post_homeposts_row">
			<div class="col-md-6 col post_thumbnail_homeposts_odd" data-aos="fade-right">
				<?php the_post_thumbnail();?>
			</div>
			<div class="col-md-6 col odd_columns_homeposts"  data-aos="fade-left">
				<div class="row">
					<h2 class="heading_home_posts"><?php the_title();?><span class="excerpt_casestudies"><?php the_excerpt(); ?></span></h2>
				</div>
				<div class="row content_homepost">
					<p><?php the_content();?></p>
				</div>
				<div class="row">
					<a class="click_home_pst" href="<?php the_permalink();?>">Click to talk</a>
				</div>
			</div>
		</div>
	<?php 
	}?>
	<?php
	endwhile;
	// Reset Post Data
	wp_reset_postdata();?>
<!-- data block -->
</div>




<!-- mobile view -->
<div class="mobile_view_responsive_casestudies">
	<?php
		$count = 0;
		$query=new WP_Query(array('post_type' => 'movies','order'   => 'ASC',));
	?>
	<?php while ( $query->have_posts() ) : $query->the_post();
	?>
		<div class="row even_column_homeposts">
			<div class="col-md-6 col post_thumbnail_homeposts_even"  data-aos="fade-left">
				<?php the_post_thumbnail();?>
			</div>
			<div class="col-md-6 col" data-aos="fade-right">
					<div class="inner-contianer">
						<div class="row">
							<h2 class="heading_home_posts"><?php the_title();?><span class="excerpt_casestudies"><?php the_excerpt(); ?></span></h2>
						</div>
						<div class="row content_homepost">
							<p><?php the_content();?></p>
						</div>
						<div class="row">
							<a class="click_home_pst" href="<?php the_permalink();?>">Click to talk</a>
						</div>
					</div>
			</div>
		</div>
	<?php
	endwhile;
	// Reset Post Data
	wp_reset_postdata();?>
</div>