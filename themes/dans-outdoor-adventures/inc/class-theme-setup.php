<?php

class Theme_Setup {

	public function __construct() {
		// Add hooks
		add_action( 'wp_enqueue_scripts', [ $this, 'add_theme_styles' ] );
	}

	public function add_theme_styles() {
		error_log("here!");
		wp_enqueue_style( 'theme-styles', get_stylesheet_uri() );
	}

}
