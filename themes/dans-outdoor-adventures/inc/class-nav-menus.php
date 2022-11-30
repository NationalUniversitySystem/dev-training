<?php

class Nav_Menus {

	public function __construct() {
		add_action( 'init', [$this, 'dans_theme__register_my_menus'] );
	}

	public function dans_theme__register_my_menus() {
		register_nav_menus(
		  array(
			'header-nav-menu' => __( 'Header Nav Menu' ),
		   )
		 );
	   }

}
