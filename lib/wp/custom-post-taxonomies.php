<?php

register_taxonomy('scope', 'subjects', array(
	'hierarchical' => true,
	'labels' => generate_post_type_taxonomy_labels('scope', 'scopes'),
	'show_ui' => true,
	'show_admin_column' => true,
	'query_var' => true,
	'rewrite' => false,
));
