<?php
/**
 * Register Status
 *
 * @link https://www.wpbeginner.com/wp-tutorials/how-to-add-custom-post-status-for-blog-posts-in-wordpress/
 */
function content_theme_custom_post_status() {
	register_post_status('rejected', [
		'label'                     => _x('Rejected', 'post'),
		'public'                    => false,
		'exclude_from_search'       => false,
		'show_in_admin_all_list'    => true,
		'show_in_admin_status_list' => true,
		'label_count'               => _n_noop('Rejected <span class="count">(%s)</span>', 'Rejected <span class="count">(%s)</span>'),
	]);
}
add_action('init', 'content_theme_custom_post_status');

// Using jQuery to add it to post status dropdown
add_action('admin_footer-post.php', 'content_theme_append_post_status_list');

function content_theme_append_post_status_list() {
	global $post;
	$complete = '';
	$label = '';
	if ($post->post_type == 'post') {
		if ($post->post_status == 'rejected') {
			$complete = ' selected="selected"';
			$label = '<span id="post-status-display"> Rejected</span>';
		}
		echo '
		<script>
		jQuery(document).ready(function($) {
		$("select#post_status").append("<option value=\"rejected\" ' . $complete . '>Rejected</option>");
		$(".misc-pub-section label").append("' . $label . '");
		});
		</script>
		';
	}
}
