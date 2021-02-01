<?php

function equality_supports() {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('menus');

	register_nav_menu('header', 'En tête du menu');

	$labelEcarts = array(
		'name' => _x('Ecart de salaire', 'Post Type General Name'),
		'menu_name' => __('Ecart de salaire'),
		'all_items' => __('Tous les articles'),
		'view_item' => __('Voir les articles'),
		'add_new_item' => __('Ajouter un nouvel article'),
		'add_new' => __('Ajouter'),
		'edit_item' => __('Editer un article'),
		'update_item' => __('Modifier un article'),
		'search_item' => __('Rechercher un article'),
		'not_found' => __('Non trouvé'),
		'not_found_in_trash' => __('Non trouvé dans la corbeille')
	);

	$argsEcarts = array(
		'label' => __('Ecart de salaire', 'Post Type General Name'),
		'description' => __('Tous les articles'),
		'labels' => $labelEcarts,
		'menu_icon' => 'dashicons-money',
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'author',
			'thumbnail',
			'comments',
			'revisions',
			'custom-fields',
		),
		'show_in_rest' => true,
		'hierarchical' => false,
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'ecarts'),
	);

	$labelAccess = array(
		'name' => _x('Accès des femmes', 'Post Type General Name'),
		'menu_name' => _('Accès des femmes'),
		'all_items' => _('Tous les articles'),
		'view_item' => _('Voir les articles'),
		'add_new_item' => _('Ajouter un nouvel article'),
		'add_new' => _('Ajouter'),
		'edit_item' => _('Editer un article'),
		'update_item' => _('Modifier un article'),
		'search_item' => _('Rechercher un article'),
		'not_found' => _('Non trouvé'),
		'not_found_in_trash' => _('Non trouvé dans la corbeille')
	);

	$argsAccess = array(
		'label' => __('Accès des femmes aux postes à resonsabilités', 'Post Type General Name'),
		'description' => __('Tous les articles'),
		'labels' => $labelAccess,
		'menu_icon' => 'dashicons-businesswoman',
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'author',
			'thumbnail',
			'comments',
			'revisions',
			'custom-fields',
		),
		'show_in_rest' => true,
		'hierarchical' => false,
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'access'),
	);

	register_post_type('ecarts', $argsEcarts);
	register_post_type('access', $argsAccess);
}

/**
 * Supprime le margin-top sur la balise html
 */
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}

/**
 * Importe le css et le js de Bootstrap et les icones de fontawesome
 */
function equality_register_assets() {
	// Register styles
	wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
	wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js',
		['popper', 'jquery'], false, true);
	wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js',
		[], false, true);
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', [], false, true);
	wp_enqueue_style('bootstrap');
	wp_enqueue_script('bootstrap');
	wp_enqueue_style('style', get_stylesheet_uri('style.css'));
	wp_enqueue_style('style');
}

/* actions */
add_action('after_setup_theme', 'equality_supports');
add_action('get_header', 'remove_admin_login_header');
add_action('wp_enqueue_scripts', 'equality_register_assets');

/* filters */