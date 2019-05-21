

<div class="services_page_main-container">
	<div class="row container margin-auto">
		<div class="col-md-4 col">
			<?php
		       $args = array(
		       'orderby'                  => 'name',
		       'order'                    => 'ASC',
		       'hide_empty'               => 0,
		       'hierarchical'             => 1,
		       'taxonomy'                 => 'categories',
		       'pad_counts'               => false );
		       $categories = get_categories($args);
		       $cat_count =  count($categories);

				// echo $cat_count;
				//  echo'<pre>';print_r($categories) ; echo '</pre>';

		       foreach ($categories as $categories_index => $value) 
		       {
			       	// echo'<pre>'; print_r($categories_index) ; echo '</pre>';
			       	?>
					<div class="row services_left-block">
						<a class="services_services-page" href="<?php echo $url;?>"><?php echo $value->name; ?></a>
					</div>
			       	<?php 
		       }
		   ?>
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
				<?php
		       $args = array(
		       'orderby'                  => 'name',
		       'order'                    => 'ASC',
		       'hide_empty'               => 0,
		       'hierarchical'             => 1,
		       'taxonomy'                 => 'categories',
		       'pad_counts'               => false );
		       $categories = get_categories($args);
		       $cat_count =  count($categories);
		       foreach ($categories as $categoriess_index => $value) 
		       {
					if($categoriess_index % 2 == 0)
			       	{?>
						<div class="row">
							<div class="col-md-9 col">
								<div class="title_services_right-block">
									<?php echo $value->name;?>
								</div>
								<div class="content_service_services_page">
									<?php echo $value->description;?>
								</div>
								<div class="learn-more_button_service_page">
									<a class="leran-more_service_page" href="<?php the_permalink();?>"> <?php echo get_option('learn_more_button_text_service_page')?> </a>
								</div>
							</div>
							<div class="col-md-3 col dis-flex the_post_thumbnail_serivees_page">
								asd
							</div>
						</div>
			       	<?php }
			       	else
			       	{?>
						<div class="row">
							<div class="col-md-3 col dis-flex the_post_thumbnail_serivees_page">
								asd
							</div>
							<div class="col-md-9 col">
								<div class="">
									<a class="title_services_right-block" href="<?php the_permalink();?>"><?php echo $value->name; ?></a>
								</div>
								<div class="content_service_services_page">
									<?php echo $value->description; ?>
								</div>
								<div class="learn-more_button_service_page">
									<a class="leran-more_service_page" href="<?php the_permalink();?>"> <?php echo get_option('learn_more_button_text_service_page')?> </a>
								</div>
							</div>
						</div>
			       	<?php }
		       }
		       
		         // <?php }
		   ?>
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
				<a href=""><?php echo get_option('promo_button_text'); ?></a>
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
<?php get_template_part( 'data', 'page' ); ?>
<?php get_template_part( 'article', 'page' ); ?>








<!-- sniperts  get the cat name of the post -->

	<?php 
		$cateogries = get_the_category();
		$seprator = ",";
		$output = '';
		if($cateogries)
		{
			foreach ($cateogries as $category) 
			{
				$output.=$category->cat_name . $seprator;
			}
			echo $output;
		}
	?>
<!-- sniperts  get the cat name of the post -->



<!-- snippets to get post of same cat -->

<!-- function example_cats_related_post() {

    $post_id = get_the_ID();
    $cat_ids = array();
    $categories = get_the_category( $post_id );

    if(!empty($categories) && is_wp_error($categories)):
        foreach ($categories as $category):
            array_push($cat_ids, $category->term_id);
        endforeach;
    endif;

    $current_post_type = get_post_type($post_id);
    $query_args = array( 

        'category__in'   => $cat_ids,
        'post_type'      => $current_post_type,
        'post__not_in'    => array($post_id),
        'posts_per_page'  => '3'


     );

    $related_cats_post = new WP_Query( $query_args );

    if($related_cats_post->have_posts()):
         while($related_cats_post->have_posts()): $related_cats_post->the_post(); ?>
            <ul>
                <li>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                    <?php the_content(); ?>
                </li>
            </ul>
        <?php endwhile;

        // Restore original Post Data
        wp_reset_postdata();
     endif;

<?php example_cats_related_post() ?>

} -->

<!-- snippets to get post of same cat -->
