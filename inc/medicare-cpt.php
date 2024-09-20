<?php

// Register Custom Post Type For Services
function medicare_cpt() {

	$labels = array(
		'name'                  => _x( 'Services', 'Post Type General Name', 'medicare' ),
		'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'medicare' ),
		'menu_name'             => __( 'Services', 'medicare' ),
		'name_admin_bar'        => __( 'Post Type', 'medicare' ),
		'archives'              => __( 'Item Archives', 'medicare' ),
		'attributes'            => __( 'Item Attributes', 'medicare' ),
		'parent_item_colon'     => __( 'Parent Item:', 'medicare' ),
		'all_items'             => __( 'All Services', 'medicare' ),
		'add_new_item'          => __( 'Add New Service', 'medicare' ),
		'add_new'               => __( 'Add New Service', 'medicare' ),
		'new_item'              => __( 'New Service', 'medicare' ),
		'edit_item'             => __( 'Edit Service', 'medicare' ),
		'update_item'           => __( 'Update Service', 'medicare' ),
		'view_item'             => __( 'View Service', 'medicare' ),
		'view_items'            => __( 'View Services', 'medicare' ),
		'search_items'          => __( 'Search Service', 'medicare' ),
		'not_found'             => __( 'Not found service', 'medicare' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'medicare' ),
		'featured_image'        => __( 'Service Image', 'medicare' ),
		'set_featured_image'    => __( 'Set Service image', 'medicare' ),
		'remove_featured_image' => __( 'Remove Service image', 'medicare' ),
		'use_featured_image'    => __( 'Use as Service image', 'medicare' ),
		'insert_into_item'      => __( 'Insert into service', 'medicare' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'medicare' ),
		'items_list'            => __( 'Items list', 'medicare' ),
		'items_list_navigation' => __( 'Items list navigation', 'medicare' ),
		'filter_items_list'     => __( 'Filter items list', 'medicare' ),
	);
	$args = array(
		'label'                 => __( 'Service', 'medicare' ),
		'description'           => __( 'service description', 'medicare' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'services', $args );

}
add_action( 'init', 'medicare_cpt', 0 );