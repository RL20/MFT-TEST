<?php

	add_action( 'wp_enqueue_scripts', 'tt_child_enqueue_parent_styles' );

	function tt_child_enqueue_parent_styles() {
	   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
	}

add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}

function QuadLayers_custom_post_type() {
	$labels = array(
		'name'                => _x( 'Products', 'Post Type General Name', 'twentytwenty' ),
		'singular_name'       => _x( 'Product', 'Post Type Singular Name', 'twentytwenty' ),
		'menu_name'           => __( 'Products', 'twentytwenty' ),
		'parent_item_colon'   => __( 'Parent Product', 'twentytwenty' ),
		'all_items'           => __( 'All Products', 'twentytwenty' ),
		'view_item'           => __( 'View Product', 'twentytwenty' ),
		'add_new_item'        => __( 'Add New Product', 'twentytwenty' ),
		'add_new'             => __( 'Add New', 'twentytwenty' ),
		'edit_item'           => __( 'Edit Product', 'twentytwenty' ),
		'update_item'         => __( 'Update Product', 'twentytwenty' ),
		'search_items'        => __( 'Search Product', 'twentytwenty' ),
		'not_found'           => __( 'Not Found', 'twentytwenty' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwenty' ),
);
	
  
$args = array(
	'label'               => __( 'movies', 'storefront' ),
	'description'         => __( 'Movie news and reviews', 'storefront' ),
	'labels'              => $labels,  
	'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),     
	'taxonomies'          => array( 'genres' ),     
	'hierarchical'        => false,
	'public'              => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'show_in_nav_menus'   => true,
	'show_in_admin_bar'   => true,
	'menu_position'       => 5,
	'can_export'          => true,
	'has_archive'         => true,
	'exclude_from_search' => false,
	'publicly_queryable'  => true,
	'capability_type'     => 'post',
	'show_in_rest' => true, 
);
// Registering your Custom Post Type
register_post_type( 'products', $args );
}
add_action( 'init', 'QuadLayers_custom_post_type', 0 );
}?>