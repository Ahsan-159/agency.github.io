<?php
// Register Custom Post Type Portfolio
function create_portfolio_cpt() {

	$labels = array(
		'name' => _x( 'Portfolios', 'Post Type General Name', 'agency' ),
		'singular_name' => _x( 'Portfolio', 'Post Type Singular Name', 'agency' ),
		'menu_name' => _x( 'Portfolios', 'Admin Menu text', 'agency' ),
		'name_admin_bar' => _x( 'Portfolio', 'Add New on Toolbar', 'agency' ),
		'archives' => __( 'Portfolio Archives', 'agency' ),
		'attributes' => __( 'Portfolio Attributes', 'agency' ),
		'parent_item_colon' => __( 'Parent Portfolio:', 'agency' ),
		'all_items' => __( 'All Portfolios', 'agency' ),
		'add_new_item' => __( 'Add New Portfolio', 'agency' ),
		'add_new' => __( 'Add New', 'agency' ),
		'new_item' => __( 'New Portfolio', 'agency' ),
		'edit_item' => __( 'Edit Portfolio', 'agency' ),
		'update_item' => __( 'Update Portfolio', 'agency' ),
		'view_item' => __( 'View Portfolio', 'agency' ),
		'view_items' => __( 'View Portfolios', 'agency' ),
		'search_items' => __( 'Search Portfolio', 'agency' ),
		'not_found' => __( 'Not found', 'agency' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'agency' ),
		'featured_image' => __( 'Featured Image', 'agency' ),
		'set_featured_image' => __( 'Set featured image', 'agency' ),
		'remove_featured_image' => __( 'Remove featured image', 'agency' ),
		'use_featured_image' => __( 'Use as featured image', 'agency' ),
		'insert_into_item' => __( 'Insert into Portfolio', 'agency' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Portfolio', 'agency' ),
		'items_list' => __( 'Portfolios list', 'agency' ),
		'items_list_navigation' => __( 'Portfolios list navigation', 'agency' ),
		'filter_items_list' => __( 'Filter Portfolios list', 'agency' ),
	);
	$args = array(
		'label' => __( 'Portfolio', 'agency' ),
		'description' => __( 'This custom post is for Portfolios', 'agency' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-images-alt2',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
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
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'create_portfolio_cpt', 0 );

?>