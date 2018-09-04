<?php

$config['custom_post_type']['slider'] = array(
	'active' => true,
	'labels' => array(
		'name'               => _x( 'Slider', 'post type general name', 'copernicus-prime' ),
		'singular_name'      => _x( 'Slider', 'post type singular name', 'copernicus-prime' ),
		'menu_name'          => _x( 'Slider', 'admin menu', 'copernicus-prime' ),
		'name_admin_bar'     => _x( 'Slider', 'add new on admin bar', 'copernicus-prime' ),
		'add_new'            => _x( 'Add New', 'add new', 'copernicus-prime' ),
		'add_new_item'       => __( 'Add New Slide', 'copernicus-prime' ),
		'new_item'           => __( 'New Slide', 'copernicus-prime' ),
		'edit_item'          => __( 'Edit Slide', 'copernicus-prime' ),
		'view_item'          => __( 'View Slide', 'copernicus-prime' ),
		'all_items'          => __( 'All Slides', 'copernicus-prime' ),
		'search_items'       => __( 'Search Slide', 'copernicus-prime' ),
		'parent_item_colon'  => __( 'Parent Slide:', 'copernicus-prime' ),
		'not_found'          => __( 'No Slides found.', 'copernicus-prime' ),
		'not_found_in_trash' => __( 'No Slides found in Trash.', 'copernicus-prime' ),
	),
	'description' => __( 'Description.', 'copernicus-prime' ),
	'public' => false,
	'hierarchical' => false,
	'exclude_from_search' => true,
	'publicly_queryable' => false,
	'show_ui' => true,
	'show_in_menu' => true,
	'show_in_nav_menus' => true,
	'show_in_admin_bar' => true,
	'menu_position' => null,
	'menu_icon' => 'dashicons-admin-page',
	'capability_type' => 'post',
	// 'capabilities' => array('edit_posts'),
	// 'map_meta_cap' => false,
	'supports' => array( 'title', 'editor', 'thumbnail' ), // 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'
	// 'register_meta_box_cb' => true,
	// 'taxonomies' => array(),
	// 'has_archive' => false,
	'rewrite' => array( 'slug' => 'slide' ),
	'query_var' => true,
	'can_export' => true,
	'delete_with_user' => true,
);

$config['meta_box']['post']['slider'] = array(
	'active' => true,
	'post_type' => 'slider',
	'name' => __( 'Slider Box', 'copernicus-prime' ),
	'context' => 'normal', // normal | advanced | side
	'priority' => 'default', // high | core | default | low
	'fields' => array(
		'type' => array(
			'label' => 'Slider type',
			'type' => 'select',
			'options' => array(
				-1 => '-- select --',
				1 => 'Picture & text on bottom',
				2 => 'Picture & text on right',
				3 => 'Picture & text on center',
				4 => 'Video',
				5 => 'Facebook Social Page',
				6 => 'Twitter Social Page',
				7 => 'LinkedIn Social Page',
				8 => 'Social Wall',
			),
		),
		'colors' => array(
			'label' => __( 'Colors', 'notifications' ),
			'type' => 'select',
			'options' => array(
				1 => 'Navy Blue',
				2 => 'Yellow',
				3 => 'Red',
				4 => 'Grey',
				5 => 'Green',
				6 => 'White',
				7 => 'Custom',
			),
			'condition' => array(
				'type' => array( 1, 2 ),
			),
		),
		'text_color' => array(
			'label' => 'Text color',
			'type' => 'color',
			'condition' => array(
				'colors' => array( 7 ),
			),
		),
		'description' => array(
			'label' => __( 'Description', 'slider' ),
			'type' => 'textarea',
			'condition' => array(
				'type' => array( 1, 2, 3, 4, 5, 6, 7, 8 ),
			),
		),
		'video' => array(
			'label' => __( 'Video code', 'slider' ),
			'type' => 'text',
			'condition' => array(
				'type' => array( 4 ),
			),
		),
	),
);

$config['meta_box']['post']['slider_details'] = array(
	'active' => true,
	'post_type' => 'slider',
	'name' => __( 'Slider Details', 'copernicus-prime' ),
	'context' => 'normal', // normal | advanced | side
	'priority' => 'default', // high | core | default | low
	'condition' => array(
		'type' => array( 1, 2, 3, 4, 8 ),
	),
	'fields' => array(
		'button' => array(
			'label' => __( 'Text on button', 'slider' ),
			'type' => 'text',
		),
	),
);
