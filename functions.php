<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles(){

	wp_dequeue_style('glow-style');

    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'child-theme', get_stylesheet_directory_uri() . '/style.css');

}

function create_staff_member(){
	$labels = array(
		'name' => 'Staff Member',
		'singular_name' => 'Staff Member',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Staff Member',
		'edit_item' => 'Edit Staff Member',
		'new_item' => 'New Staff Member',
		'view_item' => 'View Staff Member',
		'search_items' => 'Search Staff Member',
		'not_found' => 'No events found',
		'not_found_in_trash' => 'No events found in Trash',
		'parent_item_colon' => '',
	);
	
	$args = array(
		'label' => __('Staff Members'),
		'labels' => $labels, // from array above
		'public' => true,
		'can_export' => true,
		'show_ui' => true,
		'_builtin' => false,
		'capability_type' => 'post',
		'menu_icon' => 'dashicons-calendar', // from this list
		'hierarchical' => false,
		'rewrite' => array( "slug" => "staffmember" ), // defines URL base
		'supports'=> array('title', 'thumbnail', 'editor', 'excerpt'),
		'show_in_nav_menus' => true,
		'taxonomies' => array( 'event_category', 'post_tag'), // own categories
		'has_archive' => true

	);

	register_post_type('staffmember', $args); // used as internal identifier
}

add_action('init','create_staff_member');



function create_product(){
	$labels = array(
		'name' => 'Product',
		'singular_name' => 'Product',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Product',
		'edit_item' => 'Edit Product',
		'new_item' => 'New SProduct',
		'view_item' => 'View Product',
		'search_items' => 'Search Product',
		'not_found' => 'No events found',
		'not_found_in_trash' => 'No events found in Trash',
		'parent_item_colon' => '',
	);
	
	$args = array(
		'label' => __('Products'),
		'labels' => $labels, // from array above
		'public' => true,
		'can_export' => true,
		'show_ui' => true,
		'_builtin' => false,
		'capability_type' => 'post',
		'menu_icon' => 'dashicons-calendar', // from this list
		'hierarchical' => false,
		'rewrite' => array( "slug" => "product" ), // defines URL base
		'supports'=> array('title', 'thumbnail', 'editor', 'excerpt'),
		'show_in_nav_menus' => true,
		'taxonomies' => array( 'event_category', 'post_tag'), // own categories
		'has_archive' => true

	);

	register_post_type('product', $args); // used as internal identifier
}


add_action('init','create_product');