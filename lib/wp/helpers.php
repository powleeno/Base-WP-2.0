<?php

function generate_post_type_labels($singular, $plural) {
  $sanitized_singular = ucfirst(strtolower($singular));
  $sanitized_plural = ucfirst(strtolower($plural));
  return array(
    'name' => __($sanitized_plural, $GLOBALS['theme_name']),
    'singular_name' => __($sanitized_singular, $GLOBALS['theme_name']),
    'menu_name' => __($sanitized_plural, $GLOBALS['theme_name']),
    'name_admin_bar' => __($sanitized_singular, $GLOBALS['theme_name']),
    'add_new' => __('Add New', $GLOBALS['theme_name']),
    'add_new_item' => __('Add New ' . $sanitized_singular, $GLOBALS['theme_name']),
    'new_item' => __('New ' . $sanitized_singular, $GLOBALS['theme_name']),
    'edit_item' => __('Edit ' . $sanitized_singular, $GLOBALS['theme_name']),
    'view_item' => __('View ' . $sanitized_singular, $GLOBALS['theme_name']),
    'all_items' => __('All ' . $sanitized_plural, $GLOBALS['theme_name']),
    'search_items' => __('Search ' . $sanitized_plural, $GLOBALS['theme_name']),
    'parent_item_colon' => __('Parent ' . $sanitized_plural . ':', $GLOBALS['theme_name']),
    'not_found' => __('No ' . $sanitized_plural . ' found.', $GLOBALS['theme_name']),
    'not_found_in_trash' => __('No ' . $sanitized_plural . ' found in Trash.', $GLOBALS['theme_name']),
  );
}

function generate_post_type_taxonomy_labels($singular, $plural) {
  $sanitized_singular = ucfirst(strtolower($singular));
  $sanitized_plural = ucfirst(strtolower($plural));
  return array(
    'add_new_item' => __('Add New ' . $sanitized_singular, $GLOBALS['theme_name']),
    'add_or_remove_items' => __('Add or remove ' . $sanitized_plural, $GLOBALS['theme_name']),
    'all_items' => __('All ' . $sanitized_plural, $GLOBALS['theme_name']),
    'choose_from_most_used' => __('Choose from the most used ' . $sanitized_plural, $GLOBALS['theme_name']),
    'edit_item' => __('Edit ' . $sanitized_singular, $GLOBALS['theme_name']),
    'menu_name' => __($sanitized_plural, $GLOBALS['theme_name']),
    'name' => __($sanitized_plural, $GLOBALS['theme_name']),
    'new_item_name' => __('New ' . $sanitized_singular . ' Name', $GLOBALS['theme_name']),
    'not_found' => __('No ' . $sanitized_plural . ' found.', $GLOBALS['theme_name']),
    'parent_item_colon' => __('Parent ' . $sanitized_singular . ':', $GLOBALS['theme_name']),
    'parent_item' => __('Parent ' . $sanitized_singular, $GLOBALS['theme_name']),
    'popular_items' => __('Popular ' . $sanitized_plural, $GLOBALS['theme_name']),
    'search_items' => __('Search ' . $sanitized_plural, $GLOBALS['theme_name']),
    'separate_items_with_commas' => __('Separate ' . $sanitized_plural . ' with commas', $GLOBALS['theme_name']),
    'singular_name' => __($sanitized_singular, $GLOBALS['theme_name']),
    'update_item' => __('Update ' . $sanitized_singular, $GLOBALS['theme_name']),
  );
}
