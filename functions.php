<?php

/**
 * Travel Template functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Travel_Template
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('travel_template_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function travel_template_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Travel Template, use a find and replace
		 * to change 'travel_template' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('travel_template', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary' => esc_html__('Primary', 'travel_template'),
			)
		);

		/*
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

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'travel_template_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'travel_template_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function travel_template_content_width()
{
	$GLOBALS['content_width'] = apply_filters('travel_template_content_width', 640);
}
add_action('after_setup_theme', 'travel_template_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function travel_template_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'travel_template'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'travel_template'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'travel_template_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function travel_template_scripts()
{
	wp_enqueue_style('travel_template-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('travel_template-style', 'rtl', 'replace');

	wp_enqueue_script('travel_template-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'travel_template_scripts');



function load_css()
{
	define('LOCALSTORE_DEV_MODE', true);
	$ver = LOCALSTORE_DEV_MODE ? time() : false;
	wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), $ver, 'all');
	wp_register_style('owl-carousel', get_template_directory_uri() . '/assets/css/owlcarousel/owl.carousel.min.css', array(), $ver, 'all');
	wp_register_style('owl-carousel-theme', get_template_directory_uri() . '/assets/css/owlcarousel/owl.theme.default.min.css', array(), $ver, 'all');
	wp_register_style('aos', get_template_directory_uri() . '/assets/css/aos.css', array(), $ver, 'all');
	

	wp_enqueue_style('bootstrap');
	wp_enqueue_style('owl-carousel');
	wp_enqueue_style('owl-carousel-theme');
	wp_enqueue_style('aos');
	wp_enqueue_style('stylesheet', get_template_directory_uri() . '/style.css', array(), $ver);
	
}
add_action('wp_enqueue_scripts', 'load_css');


function load_js()
{
	define('LOCALSTORE_DEV_MODE', true);
	$ver = LOCALSTORE_DEV_MODE ? time() : false;
	wp_register_script('popper', get_template_directory_uri() .  './assets/js/popper.min.js', false, true);
	wp_register_script('bootstrap_js', get_template_directory_uri() . './assets/js/bootstrap.min.js', 'jquery', false, true);
	wp_register_script('owl-carousel', get_template_directory_uri() . './assets/js/owl.carousel.min.js', ['jquery'], false, true);
	wp_register_script('carousel', get_template_directory_uri() . './assets/js/carousel.js', ['owl-carousel'], false, true);
	wp_register_script('typeit', get_template_directory_uri() . './assets/js/typeit.min.js', $ver, true);
	wp_register_script('typeit-dep', get_template_directory_uri() . './assets/js/typeit-dep.js', array('typeit'), $ver,  true);
	wp_register_script('rellax', get_template_directory_uri() . './assets/js/rellax.min.js', $ver,  true);
	wp_register_script('rellax-dep', get_template_directory_uri() . './assets/js/rellax-dep.js', array('rellax'), $ver,  true);
	wp_register_script('aos', get_template_directory_uri() . './assets/js/aos.js', $ver,  true);
	wp_register_script('aos-dep', get_template_directory_uri() . './assets/js/aos-dep.js', array('aos'), $ver,  true);
	wp_register_script('contact7-form', get_template_directory_uri() . './assets/js/c7-form.js', $ver,  true);
	
	
	wp_enqueue_script('jquery');
	wp_enqueue_script('popper');
	wp_enqueue_script('bootstrap_js');
	wp_enqueue_script('owl-carousel');
	wp_enqueue_script('carousel');
	wp_enqueue_script('typeit');
	wp_enqueue_script('typeit-dep');
	wp_enqueue_script('rellax');
	wp_enqueue_script('rellax-dep');
	wp_enqueue_script('aos');
	wp_enqueue_script('aos-dep');
	wp_enqueue_script('contact7-form');
	

}
add_action('wp_enqueue_scripts', 'load_js');



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
