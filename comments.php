<?php
	comment_form();
?>
<?php wp_list_comments(array('callback' => 'comment_format')); ?>