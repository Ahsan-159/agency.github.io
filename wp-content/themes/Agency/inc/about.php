<?php
    // Register Custom Post Type About
function create_about_cpt() {

	$labels = array(
		'name' => _x( 'Abouts', 'Post Type General Name', 'agency' ),
		'singular_name' => _x( 'About', 'Post Type Singular Name', 'agency' ),
		'menu_name' => _x( 'Abouts', 'Admin Menu text', 'agency' ),
		'name_admin_bar' => _x( 'About', 'Add New on Toolbar', 'agency' ),
		'archives' => __( 'About Archives', 'agency' ),
		'attributes' => __( 'About Attributes', 'agency' ),
		'parent_item_colon' => __( 'Parent About:', 'agency' ),
		'all_items' => __( 'All Abouts', 'agency' ),
		'add_new_item' => __( 'Add New About', 'agency' ),
		'add_new' => __( 'Add New', 'agency' ),
		'new_item' => __( 'New About', 'agency' ),
		'edit_item' => __( 'Edit About', 'agency' ),
		'update_item' => __( 'Update About', 'agency' ),
		'view_item' => __( 'View About', 'agency' ),
		'view_items' => __( 'View Abouts', 'agency' ),
		'search_items' => __( 'Search About', 'agency' ),
		'not_found' => __( 'Not found', 'agency' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'agency' ),
		'featured_image' => __( 'Featured Image', 'agency' ),
		'set_featured_image' => __( 'Set featured image', 'agency' ),
		'remove_featured_image' => __( 'Remove featured image', 'agency' ),
		'use_featured_image' => __( 'Use as featured image', 'agency' ),
		'insert_into_item' => __( 'Insert into About', 'agency' ),
		'uploaded_to_this_item' => __( 'Uploaded to this About', 'agency' ),
		'items_list' => __( 'Abouts list', 'agency' ),
		'items_list_navigation' => __( 'Abouts list navigation', 'agency' ),
		'filter_items_list' => __( 'Filter Abouts list', 'agency' ),
	);
	$args = array(
		'label' => __( 'About', 'agency' ),
		'description' => __( 'This custom post section is used for about posts', 'agency' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-users',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'about', $args );

}
add_action( 'init', 'create_about_cpt', 0 );
    
?>