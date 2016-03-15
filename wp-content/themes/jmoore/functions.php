<?php
/**
 * jmoore functions and definitions
 *
 * @package jmoore
 */

// Featured Images
add_theme_support( 'post-thumbnails' );
// remove_filter('the_content', 'wpautop');

// Control how long the blog post excerpt is on the blog page.
add_filter('excerpt_length', 'my_excerpt_length');

function my_excerpt_length($length) {

	return rand(45, 99);
}

if ( ! function_exists( 'jmoore_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function jmoore_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on jmoore, use a find and replace
	 * to change 'jmoore' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'jmoore', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary'		=> __( 'Primary Menu', 'jmoore' ),
		'secondary'	=> __( 'Secondary Menu', 'jmoore' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'jmoore_custom_background_args', array(
		'default-color'		=> '',
		'default-image'		=> '',
	) ) );
}
endif; // jmoore_setup
add_action( 'after_setup_theme', 'jmoore_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function jmoore_widgets_init() {
	register_sidebar( array(
		'name'				=> __( 'Sidebar', 'jmoore' ),
		'id'					=> 'sidebar-1',
		'description'		=> '',
		'before_widget'	=> '<aside id="%1$s" class="widget %2$s">',
		'after_widget'		=> '</aside>',
		'before_title'		=> '<h1 class="widget-title">',
		'after_title'			=> '</h1>',
	) );
}
add_action( 'widgets_init', 'jmoore_widgets_init' );

/**
 * Enqueue scripts.
 */
function jmoore_scripts() {
	if ( ( 'wp-login.php' !== $GLOBALS['pagenow'] ) && ( ! is_admin() ) ) {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', array(), '2.1.3', true );
		wp_enqueue_script( 'jquery' );
		
		wp_register_script( 'libs', get_template_directory_uri() . '/js/libs.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'libs' );
		
		wp_register_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
		wp_enqueue_script( 'main' );
	}
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		// wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'jmoore_scripts' );

/**
 * Enqueue styles.
 */
function jmoore_styles() {
	wp_enqueue_style( 'jmoore-style', get_stylesheet_uri() );
	wp_register_style( 'fonts-style', get_template_directory_uri() . '/fonts/stylesheet.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'fonts-style' );
}
add_action( 'wp_enqueue_scripts', 'jmoore_styles' );

/**
 * Custom Post Types.
 */
function create_post_type() {
	register_post_type( 'slides',
		array(
			'labels' => array(
				'name'					=> __( 'Hero Carousel' ),
				'singular_name'		=> __( 'Slide' ),
				'description'			=> __( 'Slides for the Homepage Hero Carousel' ),
				'add_new'				=> __( 'Add Slide' ),
				'add_new_item'		=> __( 'Add New Slide' ),
				'not_found'				=> __( 'Not found', 'text-domain' ),
				'not_found_in_trash'	=> __( 'Not found in trash', 'text_domain' ),
			),
			'public'						=> true,
			'has_archive'				=> false,
		)
	);

	register_post_type( 'books',
		array(
			'labels' => array(
				'name'					=> __( 'Books' ),
				'singular_name'		=> __( 'Book' ),
				'description'			=> __( 'List of works written by Author Jenny Moore' ),
				'add_new'				=> __( 'Add Book' ),
				'add_new_item'		=> __( 'Add New Book' ),
				'not_found'				=> __( 'Not found', 'text-domain' ),
				'not_found_in_trash'	=> __( 'Not found in trash', 'text_domain' ),
			),
			'public'						=> true,
			'has_archive'				=> false,
			'taxonomies' => array('category'),
		)
	);

	register_post_type( 'news',
		array(
			'labels' => array(
				'name'					=> __( 'News/Events' ),
				'singular_name'		=> __( 'News Article' ),
				'description'			=> __( 'List of Events and News' ),
				'add_new'				=> __( 'Add News Article' ),
				'add_new_item'		=> __( 'Add New News Article' ),
				'not_found'				=> __( 'Not found', 'text-domain' ),
				'not_found_in_trash'	=> __( 'Not found in trash', 'text_domain' ),
			),
			'public'						=> true,
			'has_archive'				=> false,
		)
	);

	register_post_type( 'ahoy',
		array(
			'labels' => array(
				'name'					=> __( 'Ahoy' ),
				'singular_name'		=> __( 'Ahoy Article' ),
				'description'			=> __( 'Ahoy Posts' ),
				'add_new'				=> __( 'Add Ahoy Article' ),
				'add_new_item'		=> __( 'Add New Ahoy Article' ),
				'not_found'				=> __( 'Not found', 'text-domain' ),
				'not_found_in_trash'	=> __( 'Not found in trash', 'text_domain' ),
			),
			'public'						=> true,
			'has_archive'				=> false,
		)
	);

	register_post_type( 'faqs',
		array(
			'labels' => array(
				'name'					=> __( 'FAQ\'s' ),
				'singular_name'		=> __( 'FAQ' ),
				'description'			=> __( 'List of Frequently Asked Questions for the About Page.' ),
				'add_new'				=> __( 'Add FAQ' ),
				'add_new_item'		=> __( 'Add New FAQ' ),
				'not_found'				=> __( 'Not found', 'text-domain' ),
				'not_found_in_trash'	=> __( 'Not found in trash', 'text_domain' ),
			),
			'public'						=> true,
			'has_archive'				=> false,
		)
	);
}
add_action( 'init', 'create_post_type' );


add_action('nav_menu_css_class', 'add_current_nav_class', 10, 2 );
	
function add_current_nav_class($classes, $item) {
	
	// Getting the current post details
	global $post;
	
	// Getting the post type of the current post
	$current_post_type = get_post_type_object(get_post_type($post->ID));
	$current_post_type_slug = $current_post_type->rewrite[slug];
		
	// Getting the URL of the menu item
	$menu_slug = strtolower(trim($item->url));
	
	// If the menu item URL contains the current post types slug add the current-menu-item class
	if (strpos($menu_slug,$current_post_type_slug) !== false) {
	
	   $classes[] = 'current-menu-item';
	
	}
	
	// Return the corrected set of classes to be added to the menu item
	return $classes;

}

/**
 * Hide the Admin Bar when user is logged in.
 */
add_filter('show_admin_bar', '__return_false');

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
