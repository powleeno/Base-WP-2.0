<?php

// DEREGISTER
wp_deregister_script( 'jquery' );

// HEADER
wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-1.12.4.min.js', false, '1.12.4', false );

// FOOTER
wp_enqueue_script( 'base-scripts', get_template_directory_uri() . '/assets/scripts.min.js', false, (string) time(), true );
