<?php
if (!defined('HANDYMAN_BLOCKS_VERSION')) {
    // Replace the version number of the theme on each release.
    define('HANDYMAN_BLOCKS_VERSION', wp_get_theme()->get('Version'));
}
define('HANDYMAN_BLOCKS_DEBUG', defined('WP_DEBUG') && WP_DEBUG === true);
define('HANDYMAN_BLOCKS_DIR', trailingslashit(get_template_directory()));
define('HANDYMAN_BLOCKS_URL', trailingslashit(get_template_directory_uri()));

if (!function_exists('handyman_blocks_support')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since walker_fse 1.0.0
     *
     * @return void
     */
    function handyman_blocks_support()
    {
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        // Add support for block styles.
        add_theme_support('wp-block-styles');
        add_theme_support('post-thumbnails');
        // Enqueue editor styles.
        add_editor_style('style.css');
    }

endif;
add_action('after_setup_theme', 'handyman_blocks_support');

/*----------------------------------------------------------------------------------
Enqueue Styles
-----------------------------------------------------------------------------------*/
if (!function_exists('handyman_blocks_styles')) :
    function handyman_blocks_styles()
    {
        // registering style for theme
        wp_enqueue_style('handyman-blocks-style', get_stylesheet_uri(), array(), HANDYMAN_BLOCKS_VERSION);
        wp_enqueue_style('handyman-blocks-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
        wp_enqueue_style('handyman-blocks-aos-style', get_template_directory_uri() . '/assets/css/aos.css');
        if (is_rtl()) {
            wp_enqueue_style('handyman-blocks-rtl-css', get_template_directory_uri() . '/assets/css/rtl.css', 'rtl_css');
        }
        wp_enqueue_script('jquery');
        wp_enqueue_script('handyman-blocks-aos-scripts', get_template_directory_uri() . '/assets/js/aos.js', array(), HANDYMAN_BLOCKS_VERSION, true);
        wp_enqueue_script('handyman-blocks-scripts', get_template_directory_uri() . '/assets/js/handyman-blocks-scripts.js', array(), HANDYMAN_BLOCKS_VERSION, true);
    }
endif;

add_action('wp_enqueue_scripts', 'handyman_blocks_styles');

/**
 * Enqueue scripts for admin area
 */
function handyman_blocks_admin_style()
{
    $hello_notice_current_screen = get_current_screen();
    if (!empty($_GET['page']) && 'about-handyman-blocks' === $_GET['page'] || $hello_notice_current_screen->id === 'themes' || $hello_notice_current_screen->id === 'dashboard') {
        wp_enqueue_style('handyman-blocks-admin-style', get_template_directory_uri() . '/assets/css/admin-style.css', array(), HANDYMAN_BLOCKS_VERSION, 'all');
        wp_enqueue_script('handyman-blocks-admin-scripts', get_template_directory_uri() . '/assets/js/handyman-blocks-admin-scripts.js', array(), HANDYMAN_BLOCKS_VERSION, true);
        wp_localize_script('handyman-blocks-admin-scripts', 'handyman_blocks_admin_localize', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('handyman_blocks_admin_nonce')
        ));
        wp_enqueue_script('handyman-blocks-welcome-notice', get_template_directory_uri() . '/inc/admin/js/handyman-blocks-welcome-notice.js', array('jquery'), HANDYMAN_BLOCKS_VERSION, true);
        wp_localize_script('handyman-blocks-welcome-notice', 'handyman_blocks_localize', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('handyman_blocks_welcome_nonce'),
            'redirect_url' => admin_url('themes.php?page=_cozy_companions')
        ));
    }
}
add_action('admin_enqueue_scripts', 'handyman_blocks_admin_style');

/**
 * Enqueue assets scripts for both backend and frontend
 */
function handyman_blocks_block_assets()
{
    wp_enqueue_style('handyman-blocks-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
}
add_action('enqueue_block_assets', 'handyman_blocks_block_assets');

/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/core/init.php';

/**
 * Load welcome page file.
 */
require_once get_template_directory() . '/inc/admin/welcome-notice.php';

if (!function_exists('handyman_blocks_excerpt_more_postfix')) {
    function handyman_blocks_excerpt_more_postfix($more)
    {
        if (is_admin()) {
            return $more;
        }
        return '...';
    }
    add_filter('excerpt_more', 'handyman_blocks_excerpt_more_postfix');
}
function handyman_blocks_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'handyman_blocks_add_woocommerce_support');
