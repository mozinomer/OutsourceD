<?php 

add_theme_support('post-thumbnails');

add_post_type_support( 'Case Studie', 'thumbnail' );    

// Our custom post type function

function create_posttype() {

 

    register_post_type( 'movies',

    // CPT Options

        array(

            'labels' => array(

                'name' => __( 'Case Studies' ),

                'singular_name' => __( 'Case Studie' )

            ),

            'public' => true,

            'has_archive' => true,

            'rewrite' => array('slug' => 'casestudies'),

            'supports' => array( 'title', 'editor',  'exerpt' )

        )

    );

}

// Hooking up our function to theme setup

add_action( 'init', 'create_posttype' );




function wpcodex_add_excerpt_case_support_for_post() {
    add_post_type_support( 'movies', 'excerpt' );
}
add_action( 'init', 'wpcodex_add_excerpt_case_support_for_post' );





add_action( 'init', 'create_tag_taxonomies', 0 );



//create two taxonomies, genres and tags for the post type "tag"

function create_tag_taxonomies() 

{

  // Add new taxonomy, NOT hierarchical (like tags)

  $labels = array(

    'name' => _x( 'Tags', 'taxonomy general name' ),

    'singular_name' => _x( 'Tag', 'taxonomy singular name' ),

    'search_items' =>  __( 'Search Tags' ),

    'popular_items' => __( 'Popular Tags' ),

    'all_items' => __( 'All Tags' ),

    'parent_item' => null,

    'parent_item_colon' => null,

    'edit_item' => __( 'Edit Tag' ), 

    'update_item' => __( 'Update Tag' ),

    'add_new_item' => __( 'Add New Tag' ),

    'new_item_name' => __( 'New Tag Name' ),

    'separate_items_with_commas' => __( 'Separate tags with commas' ),

    'add_or_remove_items' => __( 'Add or remove tags' ),

    'choose_from_most_used' => __( 'Choose from the most used tags' ),

    'menu_name' => __( 'Tags' ),

  ); 



  register_taxonomy('tag','movies',array(

    'hierarchical' => false,

    'labels' => $labels,

    'show_ui' => true,

    'update_count_callback' => '_update_post_term_count',

    'query_var' => true,

    'rewrite' => array( 'slug' => 'tag' ),

  ));

}







add_theme_support('post-thumbnails');

add_post_type_support( 'partners', 'thumbnail' );    

// Our custom post type function

function create_posttype2() {

 

    register_post_type( 'data',

    // CPT Options

        array(

            'labels' => array(

                'name' => __( 'Partners' ),

                'singular_name' => __( 'Partners' )

            ),

            'public' => true,

            'has_archive' => true,

            'rewrite' => array('slug' => 'data'),

            'supports' => array( 'title', 'editor',  'exerpts')

        )

    );

}

// Hooking up our function to theme setup

add_action( 'init', 'create_posttype2' );



function wpcodex_add_excerpt_support_for_post() {

    add_post_type_support( 'data', 'excerpt' );

}

add_action( 'init', 'wpcodex_add_excerpt_support_for_post' );











add_theme_support('post-thumbnails');

add_post_type_support( 'article', 'thumbnail' );    

// Our custom post type function

function create_posttype3() {

 

    register_post_type( 'article',

    // CPT Options

        array(

            'labels' => array(

                'name' => __( 'article' ),

                'singular_name' => __( 'article' )

            ),

            'public' => true,

            'has_archive' => true,

            'rewrite' => array('slug' => 'article'),

            'supports' => array( 'title', 'editor',  'exerpts', 'author'),

        )

    );

}

// Hooking up our function to theme setup

add_action( 'init', 'create_posttype3' );



function wpcodex_add_excerpt_support_for_post2() {

    add_post_type_support( 'article', 'excerpt' );

}

add_action( 'init', 'wpcodex_add_excerpt_support_for_post2' );













add_theme_support('post-thumbnails');

add_post_type_support( 'agency', 'thumbnail' );    

// Our custom post type function

function create_posttype6() {

 

    register_post_type( 'agency',

    // CPT Options

        array(

            'labels' => array(

                'name' => __( 'agency' ),

                'singular_name' => __( 'agency' )

            ),

            'public' => true,

            'has_archive' => true,

            'rewrite' => array('slug' => 'agency'),

            'supports' => array( 'title', 'editor',  'exerpts', 'author'),

        )

    );

}

// Hooking up our function to theme setup

add_action( 'init', 'create_posttype6' );



function wpcodex_add_excerpt_support_for_post6() {

    add_post_type_support( 'agency', 'excerpt' );

}

add_action( 'init', 'wpcodex_add_excerpt_support_for_post6' );













add_theme_support('post-thumbnails');

add_post_type_support( 'services', 'thumbnail' );    

// Our custom post type function

function create_posttype4() {

 

    register_post_type( 'services',

    // CPT Options

        array(

            'labels' => array(

                'name' => __( 'services' ),

                'singular_name' => __( 'services' )

            ),

            'public' => true,

            'hierarchical' => true,

            'has_archive' => true,

            'rewrite' => array('slug' => 'services'),

            'supports' => array( 'title', 'editor',  'exerpts', 'author', 'page-attributes' ),

        )

    );

}

// Hooking up our function to theme setup

add_action( 'init', 'create_posttype4' );



function wpcodex_add_excerpt_support_for_post3() {

    add_post_type_support( 'services', 'excerpt' );

}

add_action( 'init', 'wpcodex_add_excerpt_support_for_post3' );







add_theme_support('post-thumbnails');

add_post_type_support( 'designing', 'thumbnail' );    

// Our custom post type function

function create_posttype5() {

 

    register_post_type( 'designing',

    // CPT Options

        array(

            'labels' => array(

                'name' => __( 'designing' ),

                'singular_name' => __( 'designing' )

            ),

            'public' => true,

            'hierarchical' => true,

            'has_archive' => true,

            'rewrite' => array('slug' => 'designing'),

            'supports' => array( 'title', 'editor',  'exerpts', 'author'),

        )

    );

}





// Hooking up our function to theme setup

add_action( 'init', 'create_posttype5' );



function wpcodex_add_excerpt_support_for_post4() {

    add_post_type_support( 'designing', 'excerpt' );

}

add_action( 'init', 'wpcodex_add_excerpt_support_for_post4' );





add_action( 'init', 'create_designings_hierarchical_taxonomy', 0 );

 

//create a custom taxonomy name it topics for your posts

 

function create_designings_hierarchical_taxonomy() {

 

// Add new taxonomy, make it hierarchical like categories

//first do the translations part for GUI

 

  $labels = array(

    'name' => _x( 'Topics', 'taxonomy general name' ),

    'singular_name' => _x( 'category', 'taxonomy singular name' ),

    'search_items' =>  __( 'Search categorys' ),

    'all_items' => __( 'All categorys' ),

    'parent_item' => __( 'Parent category' ),

    'parent_item_colon' => __( 'Parent category:' ),

    'edit_item' => __( 'Edit category' ), 

    'update_item' => __( 'Update category' ),

    'add_new_item' => __( 'Add New category' ),

    'new_item_name' => __( 'New category Name' ),

    'menu_name' => __( 'categorys' ),

  );    

 

// Now register the taxonomy

 

  register_taxonomy('categorys',array('designing'), array(

    'hierarchical' => true,

    'labels' => $labels,

    'show_ui' => true,

    'show_admin_column' => true,

    'query_var' => true,

    'rewrite' => array( 'slug' => 'category' ),

  ));

 

}







 add_action( 'init', 'create_services_hierarchical_taxonomy1', 0 );

function create_services_hierarchical_taxonomy1() {

 

// Add new taxonomy, make it hierarchical like categories

//first do the translations part for GUI

 

  $labels = array(

    'name' => _x( 'categories', 'taxonomy general name' ),

    'singular_name' => _x( 'category', 'taxonomy singular name' ),

    'search_items' =>  __( 'Search categorys' ),

    'all_items' => __( 'All categorys' ),

    'parent_item' => __( 'Parent category' ),

    'parent_item_colon' => __( 'Parent category:' ),

    'edit_item' => __( 'Edit category' ), 

    'update_item' => __( 'Update category' ),

    'add_new_item' => __( 'Add New category' ),

    'new_item_name' => __( 'New category Name' ),

    'menu_name' => __( 'categories' ),

  );    

 

// Now register the taxonomy

 

  register_taxonomy('categories',array('services'), array(

    'hierarchical' => true,

    'labels' => $labels,

    'show_ui' => true,

    'show_admin_column' => true,

    'query_var' => true,

    'rewrite' => array( 'slug' => 'category' ),

  ));

 

}











add_theme_support('post-thumbnails');

add_post_type_support( 'works', 'thumbnail' );    

// Our custom post type function

function create_posttype_work() {

 

    register_post_type( 'works',

    // CPT Options

        array(

            'labels' => array(

                'name' => __( 'Works' ),

                'singular_name' => __( 'Works' )

            ),

            'public' => true,

            'has_archive' => true,

            'rewrite' => array('slug' => 'works'),

            'supports' => array( 'title', 'editor',  'exerpts','custom-fields' )

        )

    );

}

// Hooking up our function to theme setup

add_action( 'init', 'create_posttype_work' );



add_action( 'init', 'create_works_hierarchical_taxonomy2', 0 );



function create_works_hierarchical_taxonomy2() {

 

// Add new taxonomy, make it hierarchical like categories

//first do the translations part for GUI

 

  $labels = array(

    'name' => _x( 'categories', 'taxonomy general name' ),

    'singular_name' => _x( 'category', 'taxonomy singular name' ),

    'search_items' =>  __( 'Search categorys' ),

    'all_items' => __( 'All categorys' ),

    'parent_item' => __( 'Parent category' ),

    'parent_item_colon' => __( 'Parent category:' ),

    'edit_item' => __( 'Edit category' ), 

    'update_item' => __( 'Update category' ),

    'add_new_item' => __( 'Add New category' ),

    'new_item_name' => __( 'New category Name' ),

    'menu_name' => __( 'categories' ),

  );    

 

// Now register the taxonomy

 

  register_taxonomy('categoriesa',array('works'), array(

    'hierarchical' => true,

    'labels' => $labels,

    'show_ui' => true,

    'show_admin_column' => true,

    'query_var' => true,

    'rewrite' => array( 'slug' => 'categories' ),

  ));

 

}





// hooks to made a fetured gallery in custom post type 



function add_featured_galleries_to_works( $postTypes ) 

{

    array_push($postTypes, 'works' );

    return $postTypes;

}

add_filter('fg_post_types', 'add_featured_galleries_to_works' );

function add_featured_galleries_to_works1( $postTypes ) 

{

    array_push($postTypes, 'services' );

    return $postTypes;

}

add_filter('fg_post_types', 'add_featured_galleries_to_works1' );

/**
 * Register Sidebar
 */
function textdomain_register_sidebars() {
 
    /* Register the primary sidebar. */
    register_sidebar(
        array(
            'id' => 'blog-sidebar',
            'name' => __( 'Sidebar Name', 'textdomain' ),
            'description' => __( 'A short description of the sidebar.', 'textdomain' ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
    );
 
    /* Repeat register_sidebar() code for additional sidebars. */
}
add_action( 'widgets_init', 'textdomain_register_sidebars' );


require_once dirname( __FILE__ ) . '/includes/options.php';

require_once dirname( __FILE__ ) . '/includes/theme_suport.php';

require_once dirname( __FILE__ ) . '/includes/meta_boxes.php';

require_once dirname( __FILE__ ) . '/includes/meta/featured-galleries.php';
