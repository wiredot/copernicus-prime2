<?php

$config['theme']['textdomain'] = array(
	'domain' => 'copernicus_prime',
	'path' => get_template_directory() . '/languages',
);

$config['theme']['support'] = array(
	'automatic-feed-links' => true,
	'title-tag' => true,
	'post-thumbnails' => true,
	'html5' => array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	),
	'custom-logo' => array(
		'width'       => 250,
		'height'      => 40,
		'flex-width'  => true,
	),
	'align-wide',
);
