<?php

/**
 * Plugin Name: Hike Custom Post Type
 * Description: ajsfkld;jdslahgdsgdsfdskh
 * Version: 1.0
 */

require plugin_dir_path( __FILE__ ) . '/inc/class-hike-cpt.php';
require plugin_dir_path( __FILE__ ) . '/inc/class-hike-shortcodes.php';

new CPT_Hike();
new Hike_Shortcodes();