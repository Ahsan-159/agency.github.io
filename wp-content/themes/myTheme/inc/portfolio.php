<?php
    // Register Custom Post Type Portfolio
function create_portfolio_cpt() {

	$labels = array(
		'name' => _x( 'Portfolios', 'Post Type General Name', 'wptheme' ),
		'singular_name' => _x( 'Portfolio', 'Post Type Singular Name', 'wptheme' ),
		'menu_name' => _x( 'Portfolios', 'Admin Menu text', 'wptheme' ),
		'name_admin_bar' => _x( 'Portfolio', 'Add New on Toolbar', 'wptheme' ),
		'archives' => __( 'Portfolio Archives', 'wptheme' ),
		'attributes' => __( 'Portfolio Attributes', 'wptheme' ),
		'parent_item_colon' => __( 'Parent Portfolio:', 'wptheme' ),
		'all_items' => __( 'All Portfolios', 'wptheme' ),
		'add_new_item' => __( 'Add New Portfolio', 'wptheme' ),
		'add_new' => __( 'Add New', 'wptheme' ),
		'new_item' => __( 'New Portfolio', 'wptheme' ),
		'edit_item' => __( 'Edit Portfolio', 'wptheme' ),
		'update_item' => __( 'Update Portfolio', 'wptheme' ),
		'view_item' => __( 'View Portfolio', 'wptheme' ),
		'view_items' => __( 'View Portfolios', 'wptheme' ),
		'search_items' => __( 'Search Portfolio', 'wptheme' ),
		'not_found' => __( 'Not found', 'wptheme' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'wptheme' ),
		'featured_image' => __( 'Featured Image', 'wptheme' ),
		'set_featured_image' => __( 'Set featured image', 'wptheme' ),
		'remove_featured_image' => __( 'Remove featured image', 'wptheme' ),
		'use_featured_image' => __( 'Use as featured image', 'wptheme' ),
		'insert_into_item' => __( 'Insert into Portfolio', 'wptheme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Portfolio', 'wptheme' ),
		'items_list' => __( 'Portfolios list', 'wptheme' ),
		'items_list_navigation' => __( 'Portfolios list navigation', 'wptheme' ),
		'filter_items_list' => __( 'Filter Portfolios list', 'wptheme' ),
	);
	$args = array(
		'label' => __( 'Portfolio', 'wptheme' ),
		'description' => __( 'This is Custom Post', 'wptheme' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-awards',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
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