<?php

function equality_supports() {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('menus');

	register_nav_menu('header', 'En tête du menu');
}

function equality_register_assets() {
	wp_register_style('tailwind',
		'https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css');
	wp_register_style('fontawesome',
		'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css');

	wp_enqueue_style('tailwind');
	wp_enqueue_style('fontawesome');
}

function equality_title_separator(): string {
	return '|';
}

add_action('after_setup_theme', 'equality_supports');
add_action('wp_enqueue_scripts', 'equality_register_assets');

add_filter('document_title_separator', 'equality_title_separator');