<?php

$config['taxonomy']['testb'] = array(
	'active' => true,
	'post_type' => 'test',
	'args' => array(
		'labels' => array(
			'name'               => _x( 'Testb CPT', 'post type general name', 'copernicus-prime' ),
			'singular_name'      => _x( 'Testb CPT', 'post type singular name', 'copernicus-prime' ),
			'menu_name'          => _x( 'Testb CPT', 'admin menu', 'copernicus-prime' ),
			'name_admin_bar'     => _x( 'Testb CPT', 'add new on admin bar', 'copernicus-prime' ),
			'add_new'            => _x( 'Add New Testb CPT', 'add new', 'copernicus-prime' ),
			'add_new_item'       => __( 'Add New Testb CPT', 'copernicus-prime' ),
			'new_item'           => __( 'New Testb CPT', 'copernicus-prime' ),
			'edit_item'          => __( 'Edit Testb CPT', 'copernicus-prime' ),
			'view_item'          => __( 'View Testb CPT', 'copernicus-prime' ),
			'all_items'          => __( 'All Testb CPT', 'copernicus-prime' ),
			'search_items'       => __( 'Search Testb CPT', 'copernicus-prime' ),
			'parent_item_colon'  => __( 'Parent Testb CPT:', 'copernicus-prime' ),
			'not_found'          => __( 'No Testb CPT found.', 'copernicus-prime' ),
			'not_found_in_trash' => __( 'No Testb CPT found in Trash.', 'copernicus-prime' ),
		),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_in_rest' => false,
		'capability_type' => 'post',
		'hierarchical' => false,
		'exclude_from_search' => false,
		'rewrite' => array( 'slug' => 'testb' ),
	),
);

$config['meta_box']['term']['testb'] = array(
	'active' => true,
	'taxonomy' => 'testb',
	'name' => __( 'My First Meta Box', 'copernicus-prime' ),
	'context' => 'normal', // normal | advanced | side
	'priority' => 'high', // high | core | default | low
	'fields' => array(
		'text_field' => array(
			'type' => 'text',
			'label' => __( 'Text field', 'copernicus-prime' ),
		),
		'date_field' => array(
			'type' => 'date',
			'label' => __( 'Date field', 'copernicus-prime' ),
		),
		'email_field' => array(
			'type' => 'email',
			'label' => __( 'Email field', 'copernicus-prime' ),
		),
		'textarea_field' => array(
			'type' => 'textarea',
			'label' => __( 'Textarea field', 'copernicus-prime' ),
		),
		'select_field' => array(
			'type' => 'select',
			'label' => __( 'Select field', 'copernicus-prime' ),
			'attributes' => array(
				'multiple' => false,
			),
			'options' => array(
				-1 => '',
				1 => 'no',
				2 => 'yes',
			),
		),
		'select_multiple' => array(
			'type' => 'select',
			'label' => __( 'Select (multiple)', 'copernicus-prime' ),
			'attributes' => array(
				'multiple' => true,
			),
			'options' => array(
				-1 => '',
				1 => 'no',
				2 => 'yes',
			),
		),
		'checkbox' => array(
			'type' => 'checkbox',
			'label' => __( 'Checkbox', 'copernicus-prime' ),
		),
		'checkboxes' => array(
			'type' => 'checkbox',
			'label' => __( 'Checkboxes', 'copernicus-prime' ),
			'options' => array(
				1 => 'one',
				2 => 'two',
				3 => 'three',
			),
		),
		'radios' => array(
			'type' => 'radio',
			'label' => __( 'Radios', 'copernicus-prime' ),
			'options' => array(
				1 => 'one',
				2 => 'two',
				3 => 'three',
			),
		),
		'post' => array(
			'type' => 'post',
			'label' => __( 'Posts', 'copernicus-prime' ),
			'arguments' => array(
				'post_type' => 'test',
			),
		),
		'users' => array(
			'type' => 'user',
			'label' => __( 'Users', 'copernicus-prime' ),
			'arguments' => array(),
		),
		'user_roles' => array(
			'type' => 'user_role',
			'label' => __( 'User Role', 'copernicus-prime' ),
			'arguments' => array(),
		),
		'photos' => array(
			'type' => 'upload',
			'label' => __( 'Photos', 'copernicus-prime' ),
			'labels' => array(
				'button' => __( 'Add Photos', 'copernicus-prime' ),
				'button_window' => __( 'Add Photos', 'copernicus-prime' ),
				'title' => __( 'Upload or Choose Photos', 'copernicus-prime' ),
			),
			'attributes' => array(
				'multiple' => true,
				'filetype' => 'image',
			),
		),
	),
);
