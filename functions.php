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
		echo "<div class='comment-list-box'>";
			echo "<div class='profileBox'>";
				echo "<div class='comment-get-avatar'>";
						echo get_avatar($comment,50);
				echo "</div>";

				echo "<div class='comment-author'>";
						echo comment_author();
				echo "</div>";
				echo "<div class='borderbox'></div>";
				echo "<div class='comment-date'>";
				 		echo comment_date();  
				echo "</div>";
			echo "</div>";

			echo "<div class='comment-edit'>";
					echo edit_comment_link('コメントを編集'); 
			echo "</div>";

			echo "<div class='comment-text'>";
			 		echo comment_text();
			echo "</div>";
			echo "<div class='comment-reply'>";
				echo "<div class='backgroundimage_return_message'></div>";
					// echo "<li id='comment-$comment->comment_ID' class='commentli'>";
						// echo "<span class='reply'>";
				 	echo comment_reply_link( array_merge( $args, array( 'reply_text' => '返信する', 'depth' => $depth, 'max_depth' => $args['max_depth'])));
				 		// echo "</span>";
				 	// echo "</li>";
			echo "</div>";
		echo "</div>";
	}


	add_filter('excerpt_length', 'custom_excerpt_length', 999);
	add_filter('excerpt_more', 'twpp_change_excerpt_more');
	
	function comment_js_queue(){
	  if ( (is_single() && comments_open() && get_option('thread_comments')) ){
	    wp_enqueue_script( 'comment-reply' );
	  }else{
	    wp_deregister_script('comment-reply');
	  }
	}
	add_action('wp_footer','comment_js_queue');
?>