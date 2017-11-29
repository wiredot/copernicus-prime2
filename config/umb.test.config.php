<?php

$config['meta_box']['user']['test'] = array(
	'active' => true,
	'roles' => 'all',
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
