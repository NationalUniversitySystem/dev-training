<?php


function add_theme_styles() {
	error_log("here!");
	wp_enqueue_style( 'theme-styles', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'add_theme_styles' );


// 1) Register nav menu
function register_my_menus() {
	register_nav_menus(
	  array(
		'header-nav-menu' => __( 'Header Nav Menu' ),
	   )
	 );
   }

add_action( 'init', 'register_my_menus' );


// 2) Placeholder in template
// 3) Define menu options