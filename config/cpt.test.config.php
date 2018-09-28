<?php

$config['custom_post_type']['test'] = array(
	'active' => true,
	'labels' => array(
		'name'               => _x( 'Test CPT', 'post type general name', 'copernicus-prime' ),
		'singular_name'      => _x( 'Test CPT', 'post type singular name', 'copernicus-prime' ),
		'menu_name'          => _x( 'Test CPT', 'admin menu', 'copernicus-prime' ),
		'name_admin_bar'     => _x( 'Test CPT', 'add new on admin bar', 'copernicus-prime' ),
		'add_new'            => _x( 'Add New Test CPT', 'add new', 'copernicus-prime' ),
		'add_new_item'       => __( 'Add New Test CPT', 'copernicus-prime' ),
		'new_item'           => __( 'New Test CPT', 'copernicus-prime' ),
		'edit_item'          => __( 'Edit Test CPT', 'copernicus-prime' ),
		'view_item'          => __( 'View Test CPT', 'copernicus-prime' ),
		'all_items'          => __( 'All Test CPT', 'copernicus-prime' ),
		'search_items'       => __( 'Search Test CPT', 'copernicus-prime' ),
		'parent_item_colon'  => __( 'Parent Test CPT:', 'copernicus-prime' ),
		'not_found'          => __( 'No Test CPT found.', 'copernicus-prime' ),
		'not_found_in_trash' => __( 'No Test CPT found in Trash.', 'copernicus-prime' ),
	),
	'description' => __( 'Description.', 'copernicus-prime' ),
	'public' => true,
	'hierarchical' => false,
	'exclude_from_search' => false,
	'publicly_queryable' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'show_in_nav_menus' => true,
	'show_in_admin_bar' => true,
	'menu_position' => null,
	'menu_icon' => 'dashicons-welcome-widgets-menus',
	'capability_type' => 'post',
	// 'capabilities' => array('edit_posts'),
	// 'map_meta_cap' => false,
	'supports' => array( 'title', 'editor', 'revisions', 'thumbnail' ), // 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'
	// 'register_meta_box_cb' => true,
	// 'taxonomies' => array(),
	// 'has_archive' => false,
	'show_in_rest' => true,
	'rewrite' => array( 'slug' => 'test' ),
	'query_var' => true,
	'can_export' => true,
	'delete_with_user' => true,
	'show_in_rest' => true,
	'template' => array(
		array(
			'core/image',
			array(
				'align' => 'wide',
			),
		),
		array(
			'core/heading',
			array(
				'placeholder' => 'Add Author...',
			),
		),
		array(
			'core/paragraph',
			array(
				'placeholder' => 'Add Description...',
			),
		),
	),
);

$config['meta_box']['post']['test'] = array(
	'active' => true,
	'post_type' => array( 'test', 'page' ),
	'name' => __( 'My First Meta Box', 'copernicus-prime' ),
	'context' => 'normal', // normal | advanced | side
	'priority' => 'high', // high | core | default | low
	// 'template' => 'test',
	'fields' => array(
		'text_field' => array(
			'type' => 'text',
			'label' => __( 'Text', 'copernicus-prime' ),
			'description' => __( 'In a few words, explain what this site is about.', 'copernicus-prime' ),
			'size' => 'regular', // tiny, small, regular, large
			'translate' => true,
		),
		'date_field' => array(
			'type' => 'date',
			'label' => __( 'Date', 'copernicus-prime' ),
			'description' => array(
				__( 'In a few words, explain what this site is about.', 'copernicus-prime' ),
			),
		),
		'email_field' => array(
			'type' => 'email',
			'label' => __( 'Email', 'copernicus-prime' ),
		),
		'number_field' => array(
			'type' => 'number',
			'label' => __( 'Number', 'copernicus-prime' ),
			'attributes' => array(
				'step' => 1,
				'min' => 1,
			),
			'size' => 'small',
		),
		'textarea_field' => array(
			'type' => 'textarea',
			'label' => __( 'Textarea', 'copernicus-prime' ),
			'translate' => true,
		),
		'select_field' => array(
			'type' => 'select',
			'label' => __( 'Select', 'copernicus-prime' ),
			'attributes' => array(
				'multiple' => false,
			),
			'options' => array(
				-1 => '',
				1 => 'no',
				2 => 'yes',
			),
			'translate' => true,
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
				'post_type' => 'any',
				'order' => 'ASC',
				'orderby' => 'title',
			),
			'condition' => array(
				'checkboxes' => array( 1 ),
				'checkbox' => 1,
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

$config['meta_box']['post']['group'] = array(
	'active' => true,
	'post_type' => array( 'test', 'page' ),
	'name' => __( 'Meta Box with a Group', 'copernicus-prime' ),
	'context' => 'normal', // normal | advanced | side
	'priority' => 'high', // high | core | default | low
	'condition' => array(
		'select_field' => array( 1 ),
	),
	'fields' => array(
		'group' => array(
			'type' => 'group',
			'label' => __( 'Group', 'copernicus-prime' ),
			'fields' => array(
				'text_field' => array(
					'type' => 'text',
					'label' => __( 'Text', 'copernicus-prime' ),
					'description' => __( 'In a few words, explain what this site is about.', 'copernicus-prime' ),
					'size' => 'regular', // tiny, small, regular, large
					'translate' => true,
				),
				'date_field' => array(
					'type' => 'date',
					'label' => __( 'Date', 'copernicus-prime' ),
					'description' => array(
						__( 'In a few words, explain what this site is about.', 'copernicus-prime' ),
						__( 'In a few words, explain what this site is about.', 'copernicus-prime' ),
					),
				),
				'email_field' => array(
					'type' => 'email',
					'label' => __( 'Email', 'copernicus-prime' ),
				),
				'number_field' => array(
					'type' => 'number',
					'label' => __( 'Number', 'copernicus-prime' ),
					'attributes' => array(
						'step' => 1,
						'min' => 1,
					),
					'size' => 'small',
				),
				'textarea_field' => array(
					'type' => 'textarea',
					'label' => __( 'Textarea', 'copernicus-prime' ),
				),
				'select_field' => array(
					'type' => 'select',
					'label' => __( 'Select', 'copernicus-prime' ),
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
			),
		),
	),
);

$config['admin_custom_columns']['test'] = array(
	'active' => true,
	'post_type' => 'tesst',
	'orderby' => 'date',
	'order' => 'DESC',
	'columns' => array(
		'featured_image',
		'title',
		'taxonomy-test',
		'date',
	),
);
