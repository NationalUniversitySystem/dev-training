<?php

class Hike_Shortcodes{
	public function __construct(){
		add_shortcode( 'hikes', [ $this, 'do_hikes_shortcode' ] ); // [hikes]
	}

	public function do_hikes_shortcode( $atts ) {

		$args = [
			'post_type'      => 'hike',
			'posts_per_page' => 3,
			'order'          => 'DESC',
			'orderby'        => 'date',
			'meta_query' => array(
				array(
					'key'     => 'hike-elevation',
					'value'   => '4000',
					'compare' => '>=',
				),
			),
		];

		$hikes = new WP_Query( $args );
	
		$hike_count = $hikes->found_posts;

		return "I've hiked " . $hike_count . " of the 48 4,000-footers in the White Mountains!";


	}


}
