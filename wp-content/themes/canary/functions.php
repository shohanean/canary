<?php
function canary_scripts() {
	wp_enqueue_style( 'canary-style', get_stylesheet_uri(), array(), 1.0 );	
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), 1.0 );	
	wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/css/slick.css', array(), 1.0 );	

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), 1.0, true );
	wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), 1.0, true );
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), 1.0, true );
	wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), 1.0, true );
	
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
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'canary_setup' );

function canary_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Right Sidebar', 'canary' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add your widgets here.', 'canary' ),
			'before_widget' => '<section id="%1$s" class="right_bar pb-3">',
			'after_widget'  => '</section>',
			'before_title'  => '<p>',
			'after_title'   => '</p>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Link Sidebar', 'canary' ),
			'id'            => 'link-sidebar',
			'description'   => esc_html__( 'Add your widgets here.', 'canary' ),
			'before_widget' => '<section id="%1$s" class="">',
			'after_widget'  => '</section>',
			'before_title'  => '<p>',
			'after_title'   => '</p>',
		)
	);
}
add_action( 'widgets_init', 'canary_widgets_init' );

function canary_customize_register( $wp_customize ) {
	// Add Section single_banner_section
    $wp_customize->add_section('single_banner_section', array(
        'title'             => __('Single Banner Image', 'canary'), 
        'priority'          => 70,
    ));    

	// Add Settings single_banner_setting
    $wp_customize->add_setting('single_banner_setting', array(
        'transport'         => 'refresh',
        'height'         => 325,
    ));

    // Add Controls single_banner_control
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'single_banner_setting', array(
        'label'             => __('Single Banner Image', 'canary'),
        'section'           => 'single_banner_section',
        'settings'          => 'single_banner_setting',    
    )));

	// Add Section
    $wp_customize->add_section('news_ticker_section', array(
        'title'             => __('News Ticker Section', 'canary'), 
        'priority'          => 70,
    ));    

	// Add Settings
    $wp_customize->add_setting('news_ticker_setting_one', array(
        'transport'         => 'refresh',
        'height'         => 325,
    ));

    // Add Controls    
	$wp_customize->add_control( 'news_ticker_setting_one', array(
		'type' => 'text',
		'settings' => 'news_ticker_setting_one',
		'section' => 'news_ticker_section',
		'label' => __( 'News Ticker One' ),
		'description' => __( 'Enter your news ticker One' ),
	) );

	// Add Settings
    $wp_customize->add_setting('news_ticker_setting_two', array(
        'transport'         => 'refresh',
        'height'         => 325,
    ));
    // Add Controls    
	$wp_customize->add_control( 'news_ticker_setting_two', array(
		'type' => 'text',
		'settings' => 'news_ticker_setting_two',
		'section' => 'news_ticker_section',
		'label' => __( 'News Ticker Two' ),
		'description' => __( 'Enter your news ticker Two' ),
	) );
}
add_action( 'customize_register', 'canary_customize_register' );

function canary_custom_post() { 
    register_post_type( 'sliders',    
		$args = array(
            'labels' => array(
                'name' => __( 'Sliders' ),
                'singular_name' => __( 'Slider' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'sliders'),
            'show_in_rest' => true,
			'menu_icon' => 'dashicons-slides',
			'supports' => array( 'title', 'thumbnail'),
        )
    );
	register_post_type( 'sliders', $args );
}
add_action( 'init', 'canary_custom_post' );