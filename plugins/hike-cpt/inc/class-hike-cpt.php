<?php

class CPT_Hike{

	public function __construct(){
		add_action( 'init', [ $this, 'register_hike_post_type' ] );
		add_action( 'fm_post_hike', [ $this, 'register_hike_custom_fields'] );
		add_action( 'init', [ $this, 'register_hike_taxonomies' ] );
	}

	public function register_hike_post_type(){

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
	
	public function register_hike_custom_fields(){
	
		$fm = new Fieldmanager_Group( [
			'name'           => 'hike_data', 
			'label'          => 'Hike Data',
			'serialize_data' => false,
			'children' => [
				'hike-date' => new Fieldmanager_Datepicker( array(
					'label' => "Date of Hike",
					'description' => "Enter the date that the hike occurred",
					'date_format' => 'Y-m-d',
					'js_opts' => array(
						'dateFormat' => 'yy-mm-dd',
					),
				) ),
				'hike-elevation' => new Fieldmanager_TextField( array(
					'name' => 'hike-elevation',
					'label' => "Hike Elevation (ft)",
				) ),
				'hike-overnight' => new Fieldmanager_Radios( array(
					'name' => 'hike-overnight',
					'label' => "Was Hike Overnight?",
					'options' => array(
						'yes' => 'Yes',
						'no'  => 'No',
					),
				) ),
			],
		] );
	
		$fm->add_meta_box( 'Hike Data', array( 'hike' ) );
	
	}
	
	public function register_hike_taxonomies(){
		$args = array(
			'label' => 'Type of Hike',
			'hierarchical' => true, 
			'public' => true,
			'show_admin_column' => true,
			'show_in_rest' => true,
		);
	
	
		register_taxonomy( 'hike-type', 'hike', $args );
	
	}
	


}
