<?php
    // Register Custom Post Type Service
function create_service_cpt() {

	$labels = array(
		'name' => _x( 'Services', 'Post Type General Name', 'practice' ),
		'singular_name' => _x( 'Service', 'Post Type Singular Name', 'practice' ),
		'menu_name' => _x( 'Services', 'Admin Menu text', 'practice' ),
		'name_admin_bar' => _x( 'Service', 'Add New on Toolbar', 'practice' ),
		'archives' => __( 'Service Archives', 'practice' ),
		'attributes' => __( 'Service Attributes', 'practice' ),
		'parent_item_colon' => __( 'Parent Service:', 'practice' ),
		'all_items' => __( 'All Services', 'practice' ),
		'add_new_item' => __( 'Add New Service', 'practice' ),
		'add_new' => __( 'Add New', 'practice' ),
		'new_item' => __( 'New Service', 'practice' ),
		'edit_item' => __( 'Edit Service', 'practice' ),
		'update_item' => __( 'Update Service', 'practice' ),
		'view_item' => __( 'View Service', 'practice' ),
		'view_items' => __( 'View Services', 'practice' ),
		'search_items' => __( 'Search Service', 'practice' ),
		'not_found' => __( 'Not found', 'practice' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'practice' ),
		'featured_image' => __( 'Featured Image', 'practice' ),
		'set_featured_image' => __( 'Set featured image', 'practice' ),
		'remove_featured_image' => __( 'Remove featured image', 'practice' ),
		'use_featured_image' => __( 'Use as featured image', 'practice' ),
		'insert_into_item' => __( 'Insert into Service', 'practice' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Service', 'practice' ),
		'items_list' => __( 'Services list', 'practice' ),
		'items_list_navigation' => __( 'Services list navigation', 'practice' ),
		'filter_items_list' => __( 'Filter Services list', 'practice' ),
	);
	$args = array(
		'label' => __( 'Service', 'practice' ),
		'description' => __( 'Services Section', 'practice' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-site-alt2',
		'supports' => array('title', 'editor', 'excerpt', 'author', 'comments', 'post-formats'),
		'taxonomies' => array('category', 'post_tag'),
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
	register_post_type( 'service', $args );

}
add_action( 'init', 'create_service_cpt', 0 );
    
?>