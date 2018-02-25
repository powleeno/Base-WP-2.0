<?php

// Remove link to the Windows Live Writer manifest file
remove_action('wp_head', 'wlwmanifest_link');
// Remove link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'rsd_link');
// Remove the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'feed_links');
// Remove the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links_extra');
// Remove index link
remove_action('wp_head', 'index_rel_link');
// Remove prev link
remove_action('wp_head', 'parent_post_rel_link');
// Remove start link
remove_action('wp_head', 'start_post_rel_link');
// Remove relational links for the posts adjacent to the current post.
remove_action('wp_head', 'adjacent_posts_rel_link');
// Remove shortlink
remove_action('wp_head', 'wp_shortlink_wp_head');

// Remove the REST API lines from the HTML Header
remove_action('wp_head', 'rest_output_link_wp_head', 10 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
// Remove the REST API endpoint.
remove_action( 'rest_api_init', 'wp_oembed_register_route' );
// Turn off oEmbed auto discovery.
add_filter( 'embed_oembed_discover', '__return_false' );
// Don't filter oEmbed results.
remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );
// Remove oEmbed discovery links.
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
// Remove oEmbed-specific JavaScript from the front-end and back-end.
remove_action( 'wp_head', 'wp_oembed_add_host_js' );
// Remove all embeds rewrite rules.
add_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' );
// Filters for WP-API version 1.x
add_filter('json_enabled', '__return_false');
add_filter('json_jsonp_enabled', '__return_false');
// Filters for WP-API version 2.x
add_filter('rest_enabled', '__return_false');
add_filter('rest_jsonp_enabled', '__return_false');

// DNS prefetch related
add_filter( 'emoji_svg_url', '__return_false' );
// remove_action('wp_head', 'wp_resource_hints', 2);


// Remove WP version
remove_action('wp_head', 'wp_generator');

// Remove WPML version
if (!empty($sitepress)) {
	remove_action('wp_head', array($sitepress, 'meta_generator_tag'));
}

// Remove emojis
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// Remove_action('wp_head', '_admin_bar_bump_cb');
add_filter('show_admin_bar', '__return_false');

// Disable XMLRPC
add_filter('xmlrpc_enabled', '__return_false');

// Disable auto updates
add_filter('auto_update_plugin', '__return_false');
add_filter('auto_update_theme', '__return_false');
add_filter('auto_update_core', '__return_false');
add_filter('automatic_updater_disabled', '__return_true');
