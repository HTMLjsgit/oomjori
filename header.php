<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); wp_title('|', true, 'left'); ?></title>

	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/cssandjs/reset.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
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
			<nav class="nav">
				<?php wp_nav_menu(); ?>
			</nav>
		</div>
		<div class="smartmenuBox">
			<div class="top">
				<a href="<?php echo home_url('/'); ?>">
					<h1 class="titleTop"><?php bloginfo('name') ?></h1>
				</a>
			</div>
			<nav class="smartNav">
				<div class="cp_offcm01">
					<input type="checkbox" id="cp_toggle01">
					<label for="cp_toggle01" id="home_label">
						<span id="home_span"></span>
					</label>

					<div class="cp_menu">
						<ul>
							<li>
								<?php wp_nav_menu(); ?>	
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<div class="centerBox">