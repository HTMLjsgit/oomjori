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
?>