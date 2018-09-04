<?php

$config['settings']['page']['cpp'] = array(
	'active' => true,
	'submenu' => false,
	'page_title' => __( 'Copernicus Prime', 'copernicus-prime' ),
	'menu_title' => __( 'Copernicus Prime', 'copernicus-prime' ),
	'capability' => 'manage_options',
	'icon_url' => '',
	'position' => 80,
	'options_prefix' => 'cpp_',
);

$config['settings']['tab']['cpp_general'] = array(
	'page' => 'cpp',
	'active' => true,
	'name' => __( 'General', 'copernicus-prime' ),
);

$config['settings']['section']['cpp_pages'] = array(
	'tab' => 'cpp_general',
	'active' => true,
	'name' => __( 'Page Settings', 'copernicus-prime' ),
	'description' => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'copernicus-prime' ),
	'fields' => array(
		'news_page' => array(
			'type' => 'post',
			'label' => __( 'News page', 'copernicus-prime' ),
			'attributes' => array(
				'post_type' => 'page',
			),
		),
	),
);
