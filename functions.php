<?php
/**
 * ADRC functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package IAP
 */

if ( ! defined( 'IAP_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'IAP_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function iap_setup() {
    
    // Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

    /**
    * Let WordPress manage the document title.
    * By adding theme support, we declare that this theme does not use a
    * hard-coded <title> tag in the document head, and expect WordPress to
    * provide it for us.
    */ 

	add_theme_support( 'title-tag' );


    /**
    * Enable support for Post Thumbnails on posts and pages.
    *
    * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    */
	add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'header-menu' => esc_html__( 'Header', 'iap' ),
			'footer-menu' => esc_html__( 'Footer', 'iap' ),
			'sidebar-menu' => esc_html__( 'Sidebar', 'iap' ),
		)
	);


    /**
    * Switch default core markup for search form, comment form, and comments
    * to output valid HTML5.
    */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
}
add_action( 'after_setup_theme', 'iap_setup' );

/**
 * Enqueue scripts and styles.
 */
function adrc_scripts() {
	wp_enqueue_style( 'iap-reset', get_template_directory_uri() . '/assets/css/reset.local.css', array(), IAP_VERSION );
	wp_enqueue_style( 'iap-normalize', get_template_directory_uri() . '/assets/css/normalize.css', array(), IAP_VERSION );
	
	wp_enqueue_style( 'iap-style', get_stylesheet_uri(), array(), rand(1,255) );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'adrc_scripts' );

