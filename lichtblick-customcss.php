<?php
/**
* Plugin Name: Lichtblick CustomCSS DEV
* Plugin URI: https://www.lichtblick-webmanufaktur.de
* Description: Custom CSS
* Version: b0.0.01
* Author: lichtblick
* Author URI: https://www.lichtblick-webmanufaktur.de
*/
  
function process_post() {
     if( isset( $_POST['unique_hidden_field'] ) ) {
          // process $_POST data here
     }
}

add_action( 'wp_print_styles', 'safely_add_stylesheet_to_admin' );

/** * Add stylesheet to the page*/
function safely_add_stylesheet_to_admin() {
    
    wp_enqueue_style( 'prefix-style', plugins_url('/css/style.css', __FILE__) );
    wp_enqueue_style( 'prefix-kh', plugins_url('/css/kh-style.css', __FILE__) );
	   wp_enqueue_style( 'prefix-fm', plugins_url('/css/fm-style.css', __FILE__) );
 	  wp_enqueue_style( 'prefix-sv', plugins_url('/css/sv-style.css', __FILE__) );
    wp_enqueue_style( 'prefix-jk', plugins_url('/css/jk-style.css', __FILE__) );
}

?>