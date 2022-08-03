<?php

function indigo_theme_support() {
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
}

add_action('after_theme_setup', 'indigo_theme_support');

function indigo_styles() {
	wp_enqueue_style('indigo-style', get_template_directory_uri() . '/assets/css/root.css', array(), null, 'all');
}

add_action('wp_enqueue_scripts', 'indigo_styles');

function indigo_menus() {
	$locations = array(
		'tree' => 'Social Tree Menu'
	);
	register_nav_menus($locations);
}

add_action('init', 'indigo_menus');

function indigo_image($wp_customize) {
	$wp_customize->add_setting('indigo_image');
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'indigo_image', array(
		'label' => 'Profile Image',
		'section' => 'title_tagline',
		'settings' => 'indigo_image'
	)));
}

add_action('customize_register', 'indigo_image');

function indigo_link($wp_customize) {
	$wp_customize->add_setting('indigo_link');
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'indigo_link', array(
		'label' => 'Main Link',
		'section' => 'title_tagline',
		'settings' => 'indigo_link'
	)));
}

add_action('customize_regiser', 'indigo_link');

function indigo_footer($wp_customize) {
	$wp_customize->add_setting('indigo_footer');
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'indigo_footer', array(
		'label' => 'Footer Text',
		'section' => 'title_tagline',
		'settings' => 'indigo_footer'
	)));
}

add_action('customize_regiser', 'indigo_footer');
