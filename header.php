<!DOCTYPE html>

<html lang='en'>
	<head>
		<meta charset='UTF-8'>
		<meta name='viewport' content='initial-scale=1,width=device-width'>

		<?php wp_head(); ?>
	</head>
	<body>
		<header>
			<img class='profile' src='<?php echo get_theme_mod('indigo_image'); ?>' alt='Indigo Bay Profile Picture'/>
			<h1 class='title'><a href='<?php echo get_theme_mod('indigo_link'); ?>'><?php echo get_bloginfo('name'); ?></a></h1>
		</header>
