<?php
/**
 * Enqueue scripts and styles.
 */
function canary_scripts() {
	wp_enqueue_style( 'canary-style', get_stylesheet_uri(), array(), 1.0 );	
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), 1.0 );	

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), 1.0, true );
	wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), 1.0, true );
	
}
add_action( 'wp_enqueue_scripts', 'canary_scripts' );
