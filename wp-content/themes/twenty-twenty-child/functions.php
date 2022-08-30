<?php

	add_action( 'wp_enqueue_scripts', 'tt_child_enqueue_parent_styles' );

	function tt_child_enqueue_parent_styles() {
	   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
	}

//●	Disable wp admin bar for this user, using code
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}

// Our custom post type function
function create_posttype() {
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
	
  
	register_post_type( 'products',
	// CPT Options
	 array(
					'labels' => $labels,
					'main_image' => true,
					'product_image_gallery ' => array('','','','','',''),
					'title' => '',
					'description'=>'',
					'price'=>'',
					'sale_price'=>'',
					'is_on_sale'=>'',
					'youtube_video'=>'',
					'category'=>'',

			)
	);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );



}?>