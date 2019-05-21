<?php
// registering the nav menu

function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'my-custom-menu' => __( 'My Custom Menu' ),
      'extra-menu' => __( 'Extra Menu' ),
      'logo-menu' => __( 'Logo Menu' ),
      'web-des' => __( 'Web Designing Services' ),
      'sm-ser' => __( 'Social Meida Services' ),
      'web-dev-ser' => __( 'Web Development Services' ),
      'digital-ser' => __( 'Digital Marketing Services' ),
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );


// relating th stylesheet 


function styleaddding_function()
{
    wp_enqueue_style('style',get_stylesheet_uri());
    wp_enqueue_script( 'outsource', get_theme_file_uri( '/js/functions.js' ), array( 'jquery' ), '0.1', true );

    wp_localize_script( 'outsource', 'outsource_auth_object', array(
        'ajax_url' => admin_url( 'admin-ajax.php' ),
        'redirecturl' => home_url(),
        'loadingmessage' => __('Loading...')
    ));
}
add_action('wp_enqueue_scripts','styleaddding_function');


add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
) );


/***************************************
************AJAX START HERE*************
****************************************/

function themesupport_ajax_function()
{
    // Throwing hackers away!
    check_ajax_referer( 'ajax-register-nonce', 'security' );

    $taxonomy = $_POST['taxonomy'];

    $taxonomy = intval($taxonomy);

    // $term = get_the_terms( 19 , 'categoriesa' )

    $args = array(
      'posts_per_page' => 100, 
      'post_type' => 'works',
      'tax_query' => array(
        array (
          'taxonomy' => 'categoriesa',
          'field'    => 'term_id',
          'terms'    => $taxonomy,
        )
      )
    );
    $wp_query = new WP_Query( $args );

    $works_posts = $wp_query->posts;

    $html = "";
    // mocking up HTML
    if ( $wp_query->have_posts() ) {
        while ( $wp_query->have_posts() ) { $wp_query->the_post();

            $terms = get_the_terms( get_the_ID() , 'categoriesa' ) ? get_the_terms( get_the_ID() , 'categoriesa' ) : [];
            $terms_name = '';

            if ( count( $terms ) > 0 ) {
              foreach ( $terms as $term ) {
                $terms_name .= $term->name . ' ';
              }
            }

            $html .= '<div class="col-md-6 block_works fadeOut" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500">
              <div class="row the_post_thumbnail_works">
                <a href="'.get_the_permalink().'" class="hvr-sweep-to-top" >'.get_the_post_thumbnail().'</a>
              </div>
              <div class="row name_cat_works">
                <div class=" the_title_works">
                </div>
                <div class="title_post_work_and_cat">
                  <span class="title_post_work">'.get_the_title().'</span>

                  <span class="post_work_and_cat">'.$terms_name.'</span>
                </div>
              </div>
            </div>';
        } // end while
    } // end if

    // preparation
    $json_response = json_encode( array(
        "message" => "Successfull",
        "html" => $html,
        "posts" => $works
    ) );

    wp_reset_postdata();

    // sending response
    echo $json_response;

    // stoping memory leakage 
    die();
}

add_action( "wp_ajax_nopriv_themesupport", "themesupport_ajax_function" );