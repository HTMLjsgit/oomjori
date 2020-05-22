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
	function comment_format($comment, $args, $depth){
		echo "<div class='comment-get-avatar'>" . get_avatar($comment,50) . "</div>";
		echo "<div class='comment-author'>" . comment_author() . "</div>";
		echo "<div class='comment-date'>" . comment_date() . "</div>";
		echo  "<div class='comment-edit'>" . edit_comment_link('コメントを編集') . "</div>";
		echo "<div class='comment-text'>" . comment_text() . "</div>";
		echo "<div class='comment-reply'>" . comment_reply_link( array_merge( $args, array( 'reply_text' => '返信する', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ) . "</div>";
	}

	add_filter('excerpt_length', 'custom_excerpt_length', 999);
	add_filter('excerpt_more', 'twpp_change_excerpt_more');
	
?>