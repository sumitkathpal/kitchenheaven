<?php
/**
 * Theme functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package unique_restaurant
 */

if ( ! function_exists( 'unique_restaurant_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function unique_restaurant_setup() {
		/*
		 * Make theme available for translation.
		 */ 
		load_theme_textdomain( 'unique-restaurant', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'unique-restaurant-thumb', 400, 300 );

		// Register nav menu locations.
		register_nav_menus( array(
			'primary-menu'  => esc_html__( 'Primary Menu', 'unique-restaurant' ),
		) );

		/*
		* This theme styles the visual editor to resemble the theme style,
		* specifically font, colors, icons, and column width.
		*/
		$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
		add_editor_style( array( '/css/editor-style' . $min . '.css', unique_restaurant_fonts_url() ) );

		/*
		 * Switch default core markup to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'unique_restaurant_custom_background_args', array(
			'default-color' => 'f7fcfe',
		) ) );

		// Enable support for selective refresh of widgets in Customizer.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Enable support for custom logo.
		add_theme_support( 'custom-logo', array(
			'height'      => 240,
			'width'       => 240,
			'flex-height' => true,
		) );

		// Load default block styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

		// Enable support for footer widgets.
		add_theme_support( 'footer-widgets', 4 );

		// Load Supports.
		require_once get_template_directory() . '/inc/support.php';

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'unique-restaurant' ),
					'shortName' => __( 'S', 'unique-restaurant' ),
					'size'      => 13,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'unique-restaurant' ),
					'shortName' => __( 'M', 'unique-restaurant' ),
					'size'      => 14,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'unique-restaurant' ),
					'shortName' => __( 'L', 'unique-restaurant' ),
					'size'      => 30,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'unique-restaurant' ),
					'shortName' => __( 'XL', 'unique-restaurant' ),
					'size'      => 36,
					'slug'      => 'huge',
				),
			)
		);

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Black', 'unique-restaurant' ),
					'slug'  => 'black',
					'color' => '#000',
				),
				array(
					'name'  => __( 'White', 'unique-restaurant' ),
					'slug'  => 'white',
					'color' => '#ffffff',
				),
				array(
					'name'  => __( 'Gray', 'unique-restaurant' ),
					'slug'  => 'gray',
					'color' => '#727272',
				),
				array(
					'name'  => __( 'Blue', 'unique-restaurant' ),
					'slug'  => 'blue',
					'color' => '#e81c19',
				),
				array(
					'name'  => __( 'Navy Blue', 'unique-restaurant' ),
					'slug'  => 'navy-blue',
					'color' => '#e81c19',
				),
				array(
					'name'  => __( 'Light Blue', 'unique-restaurant' ),
					'slug'  => 'light-blue',
					'color' => '#f7fcfe',
				),
				array(
					'name'  => __( 'Orange', 'unique-restaurant' ),
					'slug'  => 'orange',
					'color' => '#121212',
				),
				array(
					'name'  => __( 'Green', 'unique-restaurant' ),
					'slug'  => 'green',
					'color' => '#77a464',
				),
				array(
					'name'  => __( 'Red', 'unique-restaurant' ),
					'slug'  => 'red',
					'color' => '#e4572e',
				),
				array(
					'name'  => __( 'Yellow', 'unique-restaurant' ),
					'slug'  => 'yellow',
					'color' => '#f4a024',
				),
			)
		);
	}
endif;

add_action( 'after_setup_theme', 'unique_restaurant_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function unique_restaurant_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'unique_restaurant_content_width', 771 );
}
add_action( 'after_setup_theme', 'unique_restaurant_content_width', 0 );

/**
 * Register widget area.
 */
function unique_restaurant_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Primary Sidebar', 'unique-restaurant' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here to appear in your Primary Sidebar.', 'unique-restaurant' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Secondary Sidebar', 'unique-restaurant' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here to appear in your Secondary Sidebar.', 'unique-restaurant' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Secondary Sidebar 1', 'unique-restaurant' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add widgets here to appear in your Secondary Sidebar 1.', 'unique-restaurant' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'unique_restaurant_widgets_init' );

/**
 * Register custom fonts.
 */
function unique_restaurant_fonts_url() {
	$font_family   = array(
		'Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900' ,
		'Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700'
	);
	
	$fonts_url = add_query_arg( array(
		'family' => implode( '&family=', $font_family ),
		'display' => 'swap',
	), 'https://fonts.googleapis.com/css2' );

	$contents = wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
	return $contents;
}

/**
 * Enqueue scripts and styles.
 */
function unique_restaurant_scripts() {

	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	wp_enqueue_style( 'unique-restaurant-font-awesome', get_template_directory_uri() . '/third-party/font-awesome/css/font-awesome' . $min . '.css', '', '4.7.0' );

	$fonts_url = unique_restaurant_fonts_url();
	if ( ! empty( $fonts_url ) ) {
		wp_enqueue_style( 'unique-restaurant-google-fonts', $fonts_url, array(), null );
	}

	// Theme stylesheet.
	wp_enqueue_style( 'unique-restaurant-style', get_stylesheet_uri(), null, date( 'Ymd-Gis', filemtime( get_template_directory() . '/style.css' ) ) );

	wp_enqueue_style( 'unique-restaurant-style', get_stylesheet_uri() );
	wp_style_add_data( 'unique-restaurant-style', 'rtl', 'replace' );

	require get_parent_theme_file_path( '/inc/color-palette/custom-color-control.php' );
	 wp_add_inline_style( 'unique-restaurant-style',$unique_restaurant_color_palette_css );

	// Theme block stylesheet.
	wp_enqueue_style( 'unique-restaurant-block-style', get_theme_file_uri( '/css/blocks.css' ), array( 'unique-restaurant-style' ), '20211006' );
	wp_enqueue_style('bootstrap-style', get_template_directory_uri().'/css/bootstrap.css');
	
	wp_enqueue_script( 'unique-restaurant-custom-js', get_template_directory_uri(). '/js/custom.js', array('jquery') ,'',true);
	
	wp_enqueue_script( 'jquery-superfish', get_theme_file_uri( '/js/jquery.superfish.js' ), array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.js', array('jquery'), '', true);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'unique_restaurant_scripts' );

/*radio button sanitization*/
function unique_restaurant_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

/**
 * Enqueue styles for the block-based editor.
 *
 * @since Unique Restaurant
 */
function unique_restaurant_block_editor_styles() {
	// Theme block stylesheet.
	wp_enqueue_style( 'unique-restaurant-editor-style', get_template_directory_uri() . '/css/editor-blocks.css', array(), '20101208' );

	$fonts_url = unique_restaurant_fonts_url();
	if ( ! empty( $fonts_url ) ) {
		wp_enqueue_style( 'unique-restaurant-google-fonts', $fonts_url, array(), null );
	}
}
add_action( 'enqueue_block_editor_assets', 'unique_restaurant_block_editor_styles' );

define( 'IS_FREE_MIZAN_THEMES', 'unique-restaurant' );

/**
 * Load init.
 */
require_once get_template_directory() . '/inc/init.php';

/**
 *  Webfonts 
 */
require_once get_template_directory() . '/inc/wptt-webfont-loader.php';

require_once get_template_directory() . '/inc/recommendations/tgm.php';

/**
 *  Upsell 
 */
require_once get_template_directory() . '/inc/upsell/class-upgrade-pro.php';

/* 
 * Getting Started
*/
require get_template_directory() . '/inc/getting-started/getting-started.php';

// Dashboard Admin Info
require get_template_directory() . '/inc/dashboard-admin-info.php';

/* 
* Plugin Activation 
*/
require get_template_directory() . '/inc/getting-started/plugin-activation.php';

define('UNIQUE_RESTAURANT_DOCUMENTATION',__('https://preview.mizanthemes.com/setup-guide/unique-restaurant-free/','unique-restaurant'));
define('UNIQUE_RESTAURANT_SUPPORT',__('https://wordpress.org/support/theme/unique-restaurant/','unique-restaurant'));
define('UNIQUE_RESTAURANT_REVIEW',__('https://wordpress.org/support/theme/unique-restaurant/reviews/','unique-restaurant'));
define('UNIQUE_RESTAURANT_BUY_NOW',__('https://www.mizanthemes.com/products/restaurant-wordpress-theme/','unique-restaurant'));
define('UNIQUE_RESTAURANT_LIVE_DEMO',__('https://preview.mizanthemes.com/unique-restaurant-pro','unique-restaurant'));
define('UNIQUE_RESTAURANT_PRO_DOC',__('https://preview.mizanthemes.com/setup-guide/unique-restaurant-pro','unique-restaurant'));