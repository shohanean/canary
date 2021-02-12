<?php
function canary_scripts() {
	wp_enqueue_style( 'canary-style', get_stylesheet_uri(), array(), 1.0 );	
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), 1.0 );	

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), 1.0, true );
	wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), 1.0, true );
	
}
add_action( 'wp_enqueue_scripts', 'canary_scripts' );

function canary_setup() {
	register_nav_menus(
		array(
			'header-menu' => esc_html__( 'Header Menu', 'canary' ),
		)
	);
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 74,
			'width'       => 293,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'canary_setup' );