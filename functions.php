<?php
/**
 * sorrisodambrosio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sorrisodambrosio
 */

// namespace DigitalNavas\sorrisodambrosio;

/**
 * Get all the include files for the theme.
 *
 * @author ElPuasDigitalCrafts
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
function sorrisodambrosio_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on sorrisodambrosio, use a find and replace
		* to change 'sorrisodambrosio' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'sorrisodambrosio', get_template_directory() . '/languages' );

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
			'dambrosio-header-menu' => esc_html__( 'Header Menu', 'sorrisodambrosio' ),
			'dambrosio-footer-menu' => esc_html__( 'Footer Menu', 'sorrisodambrosio' ),
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
			'sorrisodambrosio_custom_background_args',
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
	$logo_width  = 300;
	$logo_height = 100;
	add_theme_support(
		'custom-logo',
		array(
			'height'               => $logo_height,
			'width'                => $logo_width,
			'flex-width'           => true,
			'flex-height'          => true,
			'unlink-homepage-logo' => true,
		)
	);
}
add_action( 'after_setup_theme', 'sorrisodambrosio_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sorrisodambrosio_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sorrisodambrosio_content_width', 640 );
}
add_action( 'after_setup_theme', 'sorrisodambrosio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sorrisodambrosio_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'sorrisodambrosio' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'sorrisodambrosio' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'sorrisodambrosio_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sorrisodambrosio_scripts() {
	//Register styles

	wp_enqueue_style( 'sorrisodambrosio-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/library/css/bootstrap.min.css', array(), '5.3.1', 'all' );

	wp_style_add_data( 'sorrisodambrosio-style', 'rtl', 'replace' );

	wp_enqueue_script( 'sorrisodambrosio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/library/js/bootstrap.bundle.js', [], '5.3.1', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sorrisodambrosio_scripts' );

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
 * Bootstrap navwalker
*/
require_once('class-wp-bootstrap-navwalker.php');

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


//Block patterns
function register_slider_block_pattern() {
    if ( function_exists( 'register_block_pattern' ) ) {

		ob_start();

		get_template_part( 'template-parts/patterns/block-pattern-left' );

		$block_content_left = ob_get_contents();

		ob_end_clean();

        register_block_pattern(
            'block/left',
            array(
                'title'       => esc_html__( 'Block Pattern Left', 'sorrisodambrosio' ),
                'description' => esc_html__( 'Block Pattern Left with image, title, and text', 'sorrisodambrosio' ),
				'categories' => ['block-pattern-left'],
                'content'     => $block_content_left,
            )
        );

		ob_start();

		get_template_part( 'template-parts/patterns/block-pattern-right' );

		$block_content_right = ob_get_contents();

		ob_end_clean();

		register_block_pattern(
            'block/right',
            array(
                'title'       => esc_html__( 'Block Pattern Right', 'sorrisodambrosio' ),
                'description' => esc_html__( 'Block Pattern Right with  title, text and image', 'sorrisodambrosio' ),
				'categories' => ['block-pattern-right'],
                'content'     => $block_content_right,
            )
        );
    }
}
add_action( 'init', 'register_slider_block_pattern' );

// Patterns categories
function register_block_pattern_categories( ) {

	$pattern_categories = array( 
		'block-pattern-left' => esc_html__( 'Block Pattern Left' ),
		'block-pattern-right' => esc_html__( 'Block Pattern right' ),
		// another category
	);

	if ( ! empty( $pattern_categories ) && is_array( $pattern_categories ) ) {
		foreach( $pattern_categories as $pattern_category => $pattern_category_label ) {
			register_block_pattern_category(
				$pattern_category, array(
					'label' => $pattern_category_label,
				)
			);
		}
	}
}
add_action( 'init', 'register_block_pattern_categories' );

