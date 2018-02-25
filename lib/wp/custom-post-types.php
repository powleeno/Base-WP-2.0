<?php

register_post_type('subjects', array(
  'capability_type' => 'post',
  'has_archive' => true,
  'hierarchical' => false,
  'labels' => generate_post_type_labels('subject', 'subjects'),
  'menu_icon' => 'dashicons-lightbulb', // http://developer.wordpress.org/resource/dashicons/
  'menu_position' => 5,
  'public' => true,
  'publicly_queryable' => true,
  'query_var' => true,
  'rewrite' => array('slug' => __('subjects', $GLOBALS['theme_name']), 'with_front' => false),
  'show_in_menu' => true,
  'show_ui' => true,
  'supports' => array('title', 'thumbnail', 'page-attributes'),
));
