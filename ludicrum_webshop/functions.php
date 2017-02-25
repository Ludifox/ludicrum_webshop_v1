<?php
/*
 * Function file for ludicrum_webshop
 * Version: 1.0
 */

//Setup theme
function ludicrum_webshop_setup() {
	//Language files
	load_theme_textdomain( 'ludicrum', get_template_directory_uri() . '/languages' );

	//Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	//Add support for title tag
	add_theme_support( 'title-tag' );

	//Add functionality for featured images
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'ludicrum-full', 2000, 2000, true );
	add_image_size( 'ludicrum-large', 900, 900, true );
	add_image_size( 'ludicrum-medium', 300, 300, true );

	//Switch default core markup for search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
add_action( 'after_setup_theme', 'ludicrum_webshop_setup' );

//Add our custom functions javascript
function ludicrum_scripts() {
  	wp_enqueue_script( 'equalheight', get_template_directory_uri().'/js/equalheight.js', false );
	wp_enqueue_script( 'cookies', get_template_directory_uri().'/js/cookies.js', false );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/js/node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js', false );
	wp_enqueue_script( 'fancypanes', get_template_directory_uri().'/js/fancypanes.js', false );
	wp_enqueue_script( 'ludicrum-functions', get_template_directory_uri().'/js/ludicrum-functions.js', array('equalheight') );
	wp_enqueue_style( 'ludicrum-functions', get_template_directory_uri().'/css/ludicrum_framework_min.css', false, "1.0.0");
}
add_action( 'wp_enqueue_scripts', 'ludicrum_scripts' );

//Prepare navigation areas
function ludicrum_navigation_areas() {
	register_nav_menus(
		array(
			'header-menu' => __('Header menu', 'Ludicrum'),
			'my-page-menu' => __('My Page menu', 'Ludicrum')
		)
	);
}
add_action('init', 'ludicrum_navigation_areas');

//Prepare widget areas
function ludicrum_webshop_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar cart', 'ludicrum' ),
		'id'            => 'sidebar-cart',
		'description'   => __( 'Widgets placed here will appear in the bottom of the cart side', 'ludicrum' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar - profile', 'ludicrum' ),
		'id'            => 'sidebar-profile',
		'description'   => __( 'Widgets placed here will appear in the bottom of the profile tab', 'ludicrum' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar - login', 'ludicrum' ),
		'id'            => 'sidebar-login',
		'description'   => __( 'Widgets placed here will appear in the bottom of the login tab', 'ludicrum' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'ludicrum_webshop_widgets_init' );

//Add a pingback url auto-discovery header for singularly identifiable articles.
function ludicrum_webshop_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
	}
}
add_action( 'wp_head', 'ludicrum_webshop_pingback_header' );
?>
