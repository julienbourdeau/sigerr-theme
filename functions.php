<?php
/**
 * _s functions and definitions
 *
 * @package _s
 * @since _s 1.0
 */


require_once 'lib/tinyMceAdder.class.php';

/**
 * Define Envirment
 *    - dev = Development
 * 	  - prod = Production
 */
if ($_SERVER['SERVER_NAME'] == 'localhost') {
	define('ENV', 'dev');
} elseif ($_SERVER['SERVER_NAME'] == 'sigerr.org') {
	define('ENV', 'prod');
}



/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since _s 1.0
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'sigerr_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since _s 1.0
 */
function sigerr_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom template tags for adsense and ads.
	 */
	require( get_template_directory() . '/inc/ads.php' );

	/**
	 * Custom shortcodes that act independently of the theme templates
	 */
	require( get_template_directory() . '/inc/shortcodes.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	require( get_template_directory() . '/inc/tweaks.php' );

	/**
	 * Custom Theme Options
	 */
	//require( get_template_directory() . '/inc/theme-options/theme-options.php' );

	/**
	 * Custom Post Types
	 */
	require( get_template_directory() . '/inc/custom-post-types.php' );

	/**
	 * WordPress.com-specific functions and definitions
	 */
	//require( get_template_directory() . '/inc/wpcom.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on _s, use a find and replace
	 * to change 'sigerr' to the name of your theme in all the template files
	 */
	//load_theme_textdomain( 'sigerr', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'large-thumb', 200, 200, true );

	/**
	 * Enable visual-editor.css
	 *
	 */
	add_editor_style( 'visual-editor.css' );

	/**
	 * Override the [gallery] shortcode
	 *
	 */
	require_once( 'inc/gallery.php');

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'sigerr' ),
		//'footer' => __( 'Footer Menu', 'sigerr' ),
	) );

	/**
	 * Add support for the Aside Post Formats
	 */
	//add_theme_support( 'post-formats', array( 'aside', ) );
}
endif; // sigerr_setup
add_action( 'after_setup_theme', 'sigerr_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since _s 1.0
 */
function sigerr_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar', 'sigerr' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );
}
add_action( 'widgets_init', 'sigerr_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function sigerr_scripts() {
	global $post;

	wp_enqueue_style( 'style', get_stylesheet_uri() );
	
	if ( !is_admin() ) {
		wp_enqueue_style( 'style-min', get_template_directory_uri() . '/css/styles.css', array( 'style' ) );
	}

	//wp_enqueue_script( 'small-menu', get_template_directory_uri() . '/js/small-menu.js', array( 'jquery' ), '20120206', true );

	/*
	if ( defined('ENV') && !is_admin() ) {
		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap-'.ENV.'.js', array( 'jquery' ), '2.0.4', true );
	}
	*/

	if ( !is_admin() ) {
		wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.min.js', array( 'jquery' ), '2.0.4', true );
	}

	//if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	//	wp_enqueue_script( 'comment-reply' );
	//}

	//if ( is_singular() && wp_attachment_is_image( $post->ID ) ) {
	//	wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	//}
}
add_action( 'wp_enqueue_scripts', 'sigerr_scripts' );



/**
 * Implement the Custom Header feature
 */
//require( get_template_directory() . '/inc/custom-header.php' );

//Call the file to add these shortcode in my tinyMCE
if(!isset($sfb_button_2)){
	$name = "mybutton";
	$js = get_template_directory_uri() . '/js/visual_editor_boxes.js.php';
	$sfb_button_2 = new TinyMceAdder($name, $js);
	//var_dump($sfb_button_2); die();
	add_action('admin_head', array($sfb_button_2, 'addSelector'));
}
