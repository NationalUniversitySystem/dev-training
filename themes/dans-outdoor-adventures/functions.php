<?php


function dans_theme__add_theme_styles() {
	error_log("here!");
	wp_enqueue_style( 'theme-styles', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'dans_theme__add_theme_styles' );


function dans_theme__register_my_menus() {
	register_nav_menus(
	  array(
		'header-nav-menu' => __( 'Header Nav Menu' ),
	   )
	 );
   }

add_action( 'init', 'dans_theme__register_my_menus' );


function dans_theme__register_hike_post_type(){

	$labels = array(
		'name' => 'Hikes',
		'singular_name' => 'Hike',
		'add_new_item' => 'Add New Hike',
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_rest'       => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-admin-site',
		'supports'           => [
			'title',
			'editor',
			'thumbnail',
			'excerpt',
			'custom-fields',
			'revisions',
			'author',
		],
	);

	register_post_type( 'hike', $args );
}

add_action( 'init', 'dans_theme__register_hike_post_type' );



function dans_theme__register_hike_custom_field(){
	$fm = new Fieldmanager_TextField( array(
        'name' => 'demo-field',
    ) );
	
    $fm->add_meta_box( 'TextField Demo', array( 'hike' ) );
}


add_action( 'fm_post_hike', 'dans_theme__register_hike_custom_field');

