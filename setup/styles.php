<?php
/**
 * Theme Styles
 *
 * @package Content Theme
 * @subpackage Setup
 * @since 1.0.0
 */
function colab_enqueue_styles_theme() {
	wp_register_style( 'colab-theme', get_theme_file_uri( '/style.css' ), [], false );
	wp_enqueue_style( 'colab-theme' );
}
add_action( 'wp_enqueue_scripts', 'colab_enqueue_styles_theme' );
