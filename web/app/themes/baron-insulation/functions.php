<?php
/**
 * Baron Insulation functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Baron_Insulation
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function baron_insulation_setup() {

	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Baron Insulation, use a find and replace
		* to change 'baron-insulation' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'baron-insulation', get_template_directory() . '/languages' );

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
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'baron-insulation' ),
		)
	);


	/** Reusable Module include in page admin */

	/**
	 * Reusable Blocks accessible in backend
	 * @link https://www.billerickson.net/reusable-blocks-accessible-in-wordpress-admin-area
	 *
	 */
	function be_reusable_blocks_admin_menu() {
		add_menu_page( 'Reusable Modules', 'Reusable Modules', 'edit_posts', 'edit.php?post_type=wp_block', '', 'dashicons-editor-table', 22 );
	}
	add_action( 'admin_menu', 'be_reusable_blocks_admin_menu' );

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
			'baron_insulation_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);


	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'baron_insulation_setup' );


/**
 * ACF option page
 * 
 */

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> true,
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
		'show_in_graphql' => true
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
		'show_in_graphql' => true
	));
	
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */

function baron_insulation_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'baron_insulation_content_width', 640 );
}
add_action( 'after_setup_theme', 'baron_insulation_content_width', 0 );



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function baron_insulation_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'baron-insulation' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'baron-insulation' ),
			'before_widget' => '<div class="footer__col footer__col-main col-lg-4">	',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Intro', 'baron-insulation' ),
			'id'            => 'footer',
			'description'   => esc_html__( 'Add widgets here.', 'baron-insulation' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		),
		
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Menu', 'baron-insulation' ),
			'id'            => 'footer-menu',
			'description'   => esc_html__( 'Add widgets here.', 'baron-insulation' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		),
		
	);
}
add_action( 'widgets_init', 'baron_insulation_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function baron_insulation_scripts() {
	wp_enqueue_style( 'baron-insulation-font-awesome-min-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'baron-insulation-slick-css', get_template_directory_uri() .'/css/vendor/slick.css', array(), _S_VERSION );
	wp_enqueue_style( 'baron-insulation-slick-theme-css', get_template_directory_uri() .'/css/vendor/slick-theme.css', array(), _S_VERSION );
	wp_enqueue_style( 'baron-insulation-index-css', get_template_directory_uri() .'/css/index.css', array(), _S_VERSION );
	wp_enqueue_style( 'baron-insulation-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'baron-insulation-style', 'rtl', 'replace' );

	wp_enqueue_script( 'baron-insulation-jquery-min-js', get_template_directory_uri() . '/js/vendor/jquery.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'baron-insulation-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'baron-insulation-slick-min-js', get_template_directory_uri() . '/js/vendor/slick.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'baron-insulation-app-js', get_template_directory_uri() . '/js/app.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'baron_insulation_scripts' );


/*
* Enqueue scripts.js if file scripts.js exists
*/
function load_scripts() {

	wp_enqueue_script('ajax', get_template_directory_uri() . '/js/scripts.js', array('jquery'), NULL, true);

	wp_localize_script('ajax', 'wpAjax', 
		array('ajaxUrl' => admin_url('admin-ajax.php'))
	);
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );


/**
 * Filter 
 */
require get_template_directory() . '/inc/filter.php';

/**
 * Disable block
 */
require get_template_directory() . '/inc/custom-pagination.php';

/**
 * webp support
 */

require get_template_directory() . '/inc/webp-support.php';
/**
 * SVG support
 */

require get_template_directory() . '/inc/svg-support.php';
/**
 * Register taxonomy
 */

require get_template_directory() . '/inc/register-taxonomy.php';
/**
 * Register Category in block
 */

require get_template_directory() . '/inc/register-modules.php';

/**
 * Register nav walker for navigation
 */

require get_template_directory() . '/inc/class.walker.php';

/**
 * Register Category in block
 */

require get_template_directory() . '/inc/custom-block-categories.php';

/**
 * Sync Acf
 */

require get_template_directory() . '/inc/sync-acf.php';

/**
 * Register post types
 */

require get_template_directory() . '/inc/register-post-types.php';

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
