<?php get_header(); ?>
		<main>
			<?php
			wp_nav_menu(
				array(
					'menu' => 'tree',
					'menu_class' => 'tree',
					'container' => 'ul',
					'theme_logation' => 'tree'
				)
			)
			?>
		</main>
<?php get_footer(); ?>
