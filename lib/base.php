<?php

// GLOBALS --------------------------------------

$theme_name = 'base';

// RESET ----------------------------------------

include 'wp/reset.php';

// HELPERS --------------------------------------

include 'wp/helpers.php';

// SETUP ----------------------------------------

add_action('after_setup_theme', function() {
	include 'wp/menus.php';
	include 'wp/support.php';
});

add_action('init', function() {
	// register_taxonomy_for_object_type('category', 'attachment');
	// register_taxonomy_for_object_type('post_tag', 'attachment');
	include 'wp/custom-post-types.php';
	include 'wp/custom-post-taxonomies.php';
});

add_action('widget_init', function() {
	include 'wp/widgets.php';
});

add_action('wp_enqueue_scripts', function() {
	include 'wp/styles.php';
	include 'wp/fonts.php';
	include 'wp/scripts.php';
});

// SUPPORT --------------------------------------

require_once 'base/support.php';

// SHORTCODES -----------------------------------

include 'wp/shortcodes.php';
