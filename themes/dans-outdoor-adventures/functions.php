<?php


function add_theme_styles() {
	error_log("here!");
	wp_enqueue_style( 'theme-styles', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'add_theme_styles' );
