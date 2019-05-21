<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php echo get_bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- bof wp_head -->
	<?php wp_head(); ?>
	<!-- eof wp_head -->

</head>
<body class="<?php echo implode(' ', get_body_class()); ?>">

	<section role="banner" class="header">
		<h1>
			<?php _e( 'Hilldrup 2019 Content Theme', 'content-theme' ); ?><br>
		</h1>
		<p>
			<?php _e( 'A custom content development theme for WordPress.', 'content-theme' ); ?>
		</p>
		<p>
			<a href="<?php echo admin_url(); ?>">
				<?php _e( 'Go to the WordPress Admin', 'content-theme' ); ?>
			</a>
		</p>

		<?php
		// if (has_nav_menu('header')) :
		// 	wp_nav_menu([
		// 		'theme_location'  => 'header',
		// 		'container'       => 'nav',
		// 		'container_class' => 'header-menu menu horizontal',
		// 		'container_id'    => false,
		// 		'menu_class'      => 'header-menu__list menu__list',
		// 		'menu_id'         => 'IGNORE',
		// 		'depth'           => 1,
		// 	]);
		// else :
		// 	wp_page_menu([
		// 		'show_home'  => true,
		// 		'container'  => 'nav', // Undocumented // Default 'div'
		// 		'menu_class' => 'header-menu menu horizontal',
		// 		'menu_id'    => false,
		// 		'before'     => '<ul class="header-menu__list menu__list">', // Default '<ul>'
		// 		'depth'      => 1,
		// 	]);
		// endif;
		?>
	</section>

	<hr>
