<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); wp_title('|', true, 'left'); ?></title>

	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/cssandjs/reset.css">
	<?php wp_head(); ?>
</head>
<body class="body">
		<header>
			<div class="menuBox">
				<div class="top">
					<a href="<?php echo home_url('/'); ?>">
						<h1 class="titleTop"><?php bloginfo('name') ?></h1>
					</a>
				</div>
				<?php wp_nav_menu(); ?>
			</div>
		</header>
	<div class="centerBox">