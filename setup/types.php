<?php
/**
 * Register Post Types
 */
add_action('init', function () {
	register_post_type( 'type', [
		'labels' => [
			'name'          => 'Types',
			'menu_name'     => 'Types',
			'singular_name' => 'Type',
		],
		'public'       => true,
		'hierarchical' => false,
		'menu_icon'    => 'dashicons-star-filled',
		'has_archive'  => 'types',
		'rewrite'      => [
			'slug'       => 'types',
			'front_base' => false,
		],
		'supports' => [
			'title',
			'editor',
			'excerpt',
			// 'author',
			// 'thumbnail',
			// 'comments',
		],
		'show_in_rest' => true, // Enable Block Editor
	]);
});
