<?php
/**
 * Custom Gutenberg functions
 */

function dot1001_gutenberg_block() {

    wp_register_script( 'gutenberg-block-js', get_template_directory_uri() . '/build/index.js', array( 'wp-blocks'));

    register_block_type('dot1001/custom-block', array('editor_script' => 'gutenberg-block-js'));
}

add_action('init', 'dot1001_gutenberg_block');

?>