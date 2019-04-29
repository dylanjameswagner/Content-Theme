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

	<h1>
		<?php _e( 'Content Theme', 'content-theme' ); ?>
	</h1>
	<p>
		<?php _e( 'Please refer to the WordPress Admin for content development.', 'content-theme' ); ?>
	</p>
	<p>
		<a href="<?php echo admin_url(); ?>">
			<?php _e( 'WordPress Admin', 'content-theme' ); ?>
		</a>
	</p>

	<!-- bof wp_footer -->
	<?php wp_footer(); ?>
	<!-- eof wp_footer -->

</body>
</html>
