/*
 * Function file for ludicrum_webshop
 * Version: 1.0
 */

//Setup theme
function ludicrum_webshop_setup() {
	//Language files
	load_theme_textdomain( 'ludicrum', get_stylesheet_directory_uri() . '/languages' );

	//Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

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
  	wp_enqueue_script( 'equalheight', get_stylesheet_directory_uri().'/js/equalheight.js', false );
	wp_enqueue_script( 'cookies', get_stylesheet_directory_uri().'/js/cookies.js', false );
	wp_enqueue_script( 'ludicrum-functions', get_stylesheet_directory_uri().'/js/ludicrum-functions.js', array('equalheight') );
}
add_action( 'wp_enqueue_scripts', 'ludicrum_scripts' );

//Prepare widget areas
function ludicrum_webshop_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'ludicrum' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Widgets placed here will appear in the right sidebar', 'ludicrum' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer: outer left', 'ludicrum' ),
		'id'            => 'footer-ol',
		'description'   => __( 'Place widgets in the outer left light footer.', 'ludicrum' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer: inner left', 'ludicrum' ),
		'id'            => 'footer-il',
		'description'   => __( 'Place widgets in the inner left light footer.', 'ludicrum' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer: inner right', 'ludicrum' ),
		'id'            => 'footer-ir',
		'description'   => __( 'Place widgets in the inner right light footer.', 'ludicrum' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer: outer right', 'ludicrum' ),
		'id'            => 'footer-ir',
		'description'   => __( 'Place widgets in the outer right light footer.', 'ludicrum' ),
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