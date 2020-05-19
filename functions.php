<?php
	add_theme_support( 'post-thumbnails' );
	add_theme_support('menus');

	if(function_exists('register_sidebar')){
		register_sidebar(array(
			'id' => 'sidebar-1',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'));
	}

	function custom_excerpt_length($length){
		return 20;
	}
	function twpp_change_excerpt_more($more){
		return '...';
	}
	add_filter('excerpt_length', 'custom_excerpt_length', 999);
	add_filter('excerpt_more', 'twpp_change_excerpt_more');
?>