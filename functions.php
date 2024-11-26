<?php

if ( ! defined('_S_VERSION' ) ) {
    define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'srghtheme_setup' ) ) :

    function srghtheme_setup() {
        register_nav_menus(
            array(
                'wp_srghtheme_primary_menu' => 'Primary Menu',
                'wp_srghtheme_top_menu' => 'Top Menu',
                'wp_srghtheme_footerOne_menu' => 'Footer One',
                'wp_srghtheme_footerTwo_menu' => 'Footer Two',
            )
        );
    
        $args = array(
            'height' => 500,
            'width' => 1920
        );

        add_theme_support('custom-header', $args);
        add_theme_support('post-thumbnails');
        add_theme_support('custom-logo', array(
            'width' => 200,
            'height' => 200,
            'flex-height' => true,
            'flex-width' => true
        ));
        add_theme_support( 'responsive-embeds' );
        add_theme_support( 'wp-block-styles' );
    }
endif;
add_action( 'after_setup_theme', 'srghtheme_setup');

// LOAD SCRIPTS
function srghtheme_load_scripts() {
    wp_enqueue_script( 'srghtheme-js', get_template_directory_uri() . '/src/dist/app.js');
    wp_enqueue_style( 'srghtheme', get_template_directory_uri() . '/src/sass/main.css');
    wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css');
}

add_action( 'wp_enqueue_scripts', 'srghtheme_load_scripts' );



function add_menu_link_class( $atts, $item, $args ) {
    if (property_exists($args, 'link_class')) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

function add_menu_list_item_class($classes, $item, $args) {
    if (property_exists($args, 'list_item_class')) {
        $classes[] = $args->list_item_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);


/* SHORTCODES */
function current_year() {
    $year = date('Y');
    return $year;
}

add_shortcode('year', 'current_year');

// /* CUSTOM POST TYPE RETETE */
// function cw_post_type_retete() {
//     $supports = array(
//     'title',
//     'editor',
//     'author', 
//     'thumbnail',
//     'excerpt', 
//     'custom-fields', 
//     'comments',
//     'revisions', 
//     'post-formats',
//     );
//     $labels = array(
//     'name' => _x('Rețete', 'plural'),
//     'singular_name' => _x('Rețetă', 'singular'),
//     'menu_name' => _x('Rețete', 'admin menu'),
//     'name_admin_bar' => _x('Rețete', 'admin bar'),
//     'add_new' => _x('Adaugă Rețetă', 'add new'),
//     'add_new_item' => __('Adaugă Rețetă nouă'),
//     'new_item' => __('Rețete noi'),
//     'edit_item' => __('Edit Rețetă'),
//     'view_item' => __('View Rețetă'),
//     'all_items' => __('Toate Rețetele'),
//     'search_items' => __('Search Rețetă'),
//     'not_found' => __('No Rețete found.'),
//     );
//     $args = array(
//     'supports' => $supports,
//     'labels' => $labels,
//     'public' => true,
//     'query_var' => true,
//     'rewrite' => array('slug' => 'retete'),
//     'has_archive' => true,
//     'hierarchical' => true,
//     'show_ui' => true,
//     'show_admin_column' => true,
//     'show_in_nav_menus' => true,
//     'show_tagcloud' => true,
//     'show_in_rest' => true,
//     'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
//     );
//     register_post_type('retete', $args);
// }
// add_action('init', 'cw_post_type_retete');


// /* CUSTOM TAXONOMIES RETETE */

// function wporg_register_taxonomy_categorie() {
//     $labels = array(
//         'name'              => _x( 'Categorii', 'taxonomy general name' ),
//         'singular_name'     => _x( 'Categorie', 'taxonomy singular name' ),
//         'search_items'      => __( 'Search Categorii' ),
//         'all_items'         => __( 'All Categorii' ),
//         'parent_item'       => __( 'Parent Categorie' ),
//         'parent_item_colon' => __( 'Parent Categorie:' ),
//         'edit_item'         => __( 'Edit Categorie' ),
//         'update_item'       => __( 'Update Categorie' ),
//         'add_new_item'      => __( 'Add New Categorie' ),
//         'new_item_name'     => __( 'New Categorie Name' ),
//         'menu_name'         => __( 'Categorie' ),
//     );
//     $args   = array(
//         'hierarchical'      => true, // make it hierarchical (like categories)
//         'labels'            => $labels,
//         'show_ui'           => true,
//         'show_admin_column' => true,
//         'query_var'         => true,
//         'show_in_rest'      => true,
//         'rewrite'           => [ 'slug' => 'categorie' ],
//     );
//     register_taxonomy( 'categorie', [ 'retete' ], $args );
// }
// add_action( 'init', 'wporg_register_taxonomy_categorie' );

/* SIDEBAR */
function srghtheme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Newsletter', 'srghtheme' ),
		'id'            => 'newsletter',
		'before_widget' => '<div class="newsletter-widget">',
		'after_widget'  => '</div>',
		// 'before_title'  => '<h3 class="widget-title">',
		// 'after_title'   => '</h3>',
	) );
    register_sidebar( array(
		'name'          => __( 'Footer', 'srghtheme' ),
		'id'            => 'footer',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		// 'before_title'  => '<h3 class="widget-title">',
		// 'after_title'   => '</h3>',
	) );
}

add_action('widgets_init', 'srghtheme_widgets_init');

/* ACF BLOCKS */

add_action( 'init', 'register_acf_blocks' );
function register_acf_blocks() {
    register_block_type( __DIR__ . '/blocks/nutrition' );
    register_block_type( __DIR__ . '/blocks/newsletter' );
    register_block_type( __DIR__ . '/blocks/footer' );
    register_block_type( __DIR__ . '/blocks/posts' );
}

/* THIS ONE FIX THE PROBLEM WITH CUSTOM POST TYPE NOT GETTING... (404 ERROR) */
flush_rewrite_rules( false );



/* DUPLICATE PAGES AND POSTS */

add_filter( 'post_row_actions', 'rd_duplicate_post_link', 10, 2 );
// for "page" post type
add_filter( 'page_row_actions', 'rd_duplicate_post_link', 10, 2 );


function rd_duplicate_post_link( $actions, $post ) {

	if( ! current_user_can( 'edit_posts' ) ) {
		return $actions;
	}

	$url = wp_nonce_url(
		add_query_arg(
			array(
				'action' => 'rd_duplicate_post_as_draft',
				'post' => $post->ID,
			),
			'admin.php'
		),
		basename(__FILE__),
		'duplicate_nonce'
	);

	$actions[ 'duplicate' ] = '<a href="' . $url . '" title="Duplicate this item" rel="permalink">Duplicate</a>';

	return $actions;
}

/*
 * Function creates post duplicate as a draft and redirects then to the edit post screen
 */
add_action( 'admin_action_rd_duplicate_post_as_draft', 'rd_duplicate_post_as_draft' );

function rd_duplicate_post_as_draft(){

	if ( empty( $_GET[ 'post' ] ) ) {
		wp_die( 'No post to duplicate has been provided!' );
	}

	if ( ! isset( $_GET[ 'duplicate_nonce' ] ) || ! wp_verify_nonce( $_GET[ 'duplicate_nonce' ], basename( __FILE__ ) ) ) {
		return;
	}

	$post_id = absint( $_GET[ 'post' ] );

	$post = get_post( $post_id );


	$current_user = wp_get_current_user();
	$new_post_author = $current_user->ID;

	if ( $post ) {

		$args = array(
			'comment_status' => $post->comment_status,
			'ping_status'    => $post->ping_status,
			'post_author'    => $new_post_author,
			'post_content'   => $post->post_content,
			'post_excerpt'   => $post->post_excerpt,
			'post_name'      => $post->post_name,
			'post_parent'    => $post->post_parent,
			'post_password'  => $post->post_password,
			'post_status'    => 'draft',
			'post_title'     => $post->post_title,
			'post_type'      => $post->post_type,
			'to_ping'        => $post->to_ping,
			'menu_order'     => $post->menu_order
		);

		$new_post_id = wp_insert_post( $args );

		$taxonomies = get_object_taxonomies( get_post_type( $post ) );
		if( $taxonomies ) {
			foreach ( $taxonomies as $taxonomy ) {
				$post_terms = wp_get_object_terms( $post_id, $taxonomy, array( 'fields' => 'slugs' ) );
				wp_set_object_terms( $new_post_id, $post_terms, $taxonomy, false );
			}
		}

		$post_meta = get_post_meta( $post_id );
		if( $post_meta ) {

			foreach ( $post_meta as $meta_key => $meta_values ) {

				if( '_wp_old_slug' == $meta_key ) {
					continue;
				}

				foreach ( $meta_values as $meta_value ) {
					add_post_meta( $new_post_id, $meta_key, $meta_value );
				}
			}
		}

		wp_safe_redirect(
			add_query_arg(
				array(
					'post_type' => ( 'post' !== get_post_type( $post ) ? get_post_type( $post ) : false ),
					'saved' => 'post_duplication_created'
				),
				admin_url( 'edit.php' )
			)
		);
		exit;

	} else {
		wp_die( 'Post creation failed, could not find original post.' );
	}

}

add_action( 'admin_notices', 'rudr_duplication_admin_notice' );

function rudr_duplication_admin_notice() {

	$screen = get_current_screen();

	if ( 'edit' !== $screen->base ) {
		return;
	}

    if ( isset( $_GET[ 'saved' ] ) && 'post_duplication_created' == $_GET[ 'saved' ] ) {

		 echo '<div class="notice notice-success is-dismissible"><p>Post copy created.</p></div>';
		 
    }
}


function wpb_list_child_pages() {
    global $post;
    $string = ''; // Initialize the variable
    $parent = '';

    // Check if the current post is a page and has a parent page
    if ( is_page() && $post->post_parent ) {
        // Get the child pages of the parent page
        $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
    } else {
        // Get the child pages of the current page
        $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
    }

    // If there are child pages, format the output
    if ( $childpages ) {
        $string = '<ul><li>' . esc_html( $parent ) . '<ul>' . $childpages . '</ul></li></ul>';
    }

    return $string;
}
add_shortcode( 'wpb_childpages', 'wpb_list_child_pages' );

add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

    global $wp_version;
    if ( $wp_version !== '4.7.1' ) {
       return $data;
    }
  
    $filetype = wp_check_filetype( $filename, $mimes );
  
    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
  
  }, 10, 4 );
  
  function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter( 'upload_mimes', 'cc_mime_types' );
  
  function fix_svg() {
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
  }
  add_action( 'admin_head', 'fix_svg' );


//   add_filter('walker_nav_menu_start_el', 'maiorano_generate_nav_images', 20, 4);
// function maiorano_generate_nav_images($item_output, $item, $depth, $args){
//     if(has_post_thumbnail($item->object_id)){
//         $dom = new DOMDocument(); //DOM Parser because RegEx is a terrible idea
//         $dom->loadHTML($item_output); //Load the markup provided by the original walker
//         $img = $dom->createDocumentFragment(); //Create arbitrary Element
//         $img->appendXML(get_the_post_thumbnail($item->object_id, 'thumbnail')); //Apply image data via string
//         $dom->getElementsByTagName('a')->item(0)->appendChild($img); //Append the image to the link
//         $item_output = $dom->saveHTML(); //Replace the original output
//     }
//     return $item_output;
// }