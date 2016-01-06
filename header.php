<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1">
<title><?php bloginfo('name'); ?> <?php wp_title('|'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/pageControl.js"></script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
		<div id="container">
				<div id="header">
					<div class="menu_normal">
						<a href="<?php echo home_url(); ?>" class="blogTitle"> <?php bloginfo('name'); ?> </a>
						<?php bloginfo('description'); ?>
						<span class="menubtn"></span>
					</div>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'main_menu',
						));
					?>
				</div>