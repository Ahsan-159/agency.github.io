<?php
    // Register Custom Post Type Team
function create_team_cpt() {

	$labels = array(
		'name' => _x( 'Teams', 'Post Type General Name', 'agency' ),
		'singular_name' => _x( 'Team', 'Post Type Singular Name', 'agency' ),
		'menu_name' => _x( 'Teams', 'Admin Menu text', 'agency' ),
		'name_admin_bar' => _x( 'Team', 'Add New on Toolbar', 'agency' ),
		'archives' => __( 'Team Archives', 'agency' ),
		'attributes' => __( 'Team Attributes', 'agency' ),
		'parent_item_colon' => __( 'Parent Team:', 'agency' ),
		'all_items' => __( 'All Teams', 'agency' ),
		'add_new_item' => __( 'Add New Team', 'agency' ),
		'add_new' => __( 'Add New', 'agency' ),
		'new_item' => __( 'New Team', 'agency' ),
		'edit_item' => __( 'Edit Team', 'agency' ),
		'update_item' => __( 'Update Team', 'agency' ),
		'view_item' => __( 'View Team', 'agency' ),
		'view_items' => __( 'View Teams', 'agency' ),
		'search_items' => __( 'Search Team', 'agency' ),
		'not_found' => __( 'Not found', 'agency' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'agency' ),
		'featured_image' => __( 'Featured Image', 'agency' ),
		'set_featured_image' => __( 'Set featured image', 'agency' ),
		'remove_featured_image' => __( 'Remove featured image', 'agency' ),
		'use_featured_image' => __( 'Use as featured image', 'agency' ),
		'insert_into_item' => __( 'Insert into Team', 'agency' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Team', 'agency' ),
		'items_list' => __( 'Teams list', 'agency' ),
		'items_list_navigation' => __( 'Teams list navigation', 'agency' ),
		'filter_items_list' => __( 'Filter Teams list', 'agency' ),
	);
	$args = array(
		'label' => __( 'Team', 'agency' ),
		'description' => __( 'This section will be used for our custom team', 'agency' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-id',
		'supports' => array('title', 'excerpt', 'thumbnail'),
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
	register_post_type( 'team', $args );

}
add_action( 'init', 'create_team_cpt', 0 );
    
?>