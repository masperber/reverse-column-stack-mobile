<?php
/*
* Plugin Name: Reverse Column Stack on Mobile
* Description: Adds a "Reverse On Mobile" Style for Columns and Media & Text Blocks.
* Version: 0.1
* Author: Michael Sperber
* Author URI: https://michaelsperber.com
* License: GPLv2
*/

function reverse_column_stack_script() {
	wp_enqueue_script('reverse-column-stack-on-mobile-script', plugin_dir_url(__FILE__).'reverse-column-stack-mobile.js', array('wp-blocks','wp-i18n','wp-element','wp-editor'), '1.0', true);
}
add_action('enqueue_block_editor_assets', 'reverse_column_stack_script');

function enqueue_reverse_stack_on_mobile() {
	wp_enqueue_style('reverse-stack-on-mobile-style', plugin_dir_url(__FILE__) . 'reverse-column-stack-mobile.css');
}
add_action('wp_enqueue_scripts', 'enqueue_reverse_stack_on_mobile');
add_action('enqueue_block_assets', 'enqueue_reverse_stack_on_mobile');
