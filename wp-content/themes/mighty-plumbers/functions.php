<?php
if (!defined('MIGHTY_PLUMBERS_VERSION')) {
    // Replace the version number of the theme on each release.
    define('MIGHTY_PLUMBERS_VERSION', wp_get_theme()->get('Version'));
}
define('MIGHTY_PLUMBERS_DEBUG', defined('WP_DEBUG') && WP_DEBUG === true);
define('MIGHTY_PLUMBERS_DIR', trailingslashit(get_template_directory()));
define('MIGHTY_PLUMBERS_URL', trailingslashit(get_template_directory_uri()));

if (!function_exists('mighty_plumbers_support')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since walker_fse 1.0.0
     *
     * @return void
     */
    function mighty_plumbers_support()
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
add_action('after_setup_theme', 'mighty_plumbers_support');

/*----------------------------------------------------------------------------------
Enqueue Styles
-----------------------------------------------------------------------------------*/
if (!function_exists('mighty_plumbers_styles')) :
    function mighty_plumbers_styles()
    {
        // registering style for theme
        wp_enqueue_style('mighty-plumbers-style', get_stylesheet_uri(), array(), MIGHTY_PLUMBERS_VERSION);
        wp_enqueue_style('mighty-plumbers-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
        wp_enqueue_style('mighty-plumbers-aos-style', get_template_directory_uri() . '/assets/css/aos.css');
        if (is_rtl()) {
            wp_enqueue_style('mighty-plumbers-rtl-css', get_template_directory_uri() . '/assets/css/rtl.css', 'rtl_css');
        }
        wp_enqueue_script('jquery');
        wp_enqueue_script('mighty-plumbers-aos-scripts', get_template_directory_uri() . '/assets/js/aos.js', array(), MIGHTY_PLUMBERS_VERSION, true);
        wp_enqueue_script('mighty-plumbers-scripts', get_template_directory_uri() . '/assets/js/mighty-plumbers-scripts.js', array(), MIGHTY_PLUMBERS_VERSION, true);
    }
endif;

add_action('wp_enqueue_scripts', 'mighty_plumbers_styles');

/**
 * Enqueue scripts for admin area
 */
function mighty_plumbers_admin_style()
{
    $hello_notice_current_screen = get_current_screen();
    if (!empty($_GET['page']) && 'about-mighty-plumbers' === $_GET['page'] || $hello_notice_current_screen->id === 'themes' || $hello_notice_current_screen->id === 'dashboard') {
        wp_enqueue_style('mighty-plumbers-admin-style', get_template_directory_uri() . '/assets/css/admin-style.css', array(), MIGHTY_PLUMBERS_VERSION, 'all');
        wp_enqueue_script('mighty-plumbers-admin-scripts', get_template_directory_uri() . '/assets/js/mighty-plumbers-admin-scripts.js', array(), MIGHTY_PLUMBERS_VERSION, true);
        wp_localize_script('mighty-plumbers-admin-scripts', 'mighty_plumbers_admin_localize', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('mighty_plumbers_admin_nonce')
        ));
        wp_enqueue_script('mighty-plumbers-welcome-notice', get_template_directory_uri() . '/inc/admin/js/mighty-plumbers-welcome-notice.js', array('jquery'), MIGHTY_PLUMBERS_VERSION, true);
        wp_localize_script('mighty-plumbers-welcome-notice', 'mighty_plumbers_localize', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('mighty_plumbers_welcome_nonce'),
            'redirect_url' => admin_url('themes.php?page=_cozy_companions')
        ));
    }
}
add_action('admin_enqueue_scripts', 'mighty_plumbers_admin_style');

/**
 * Enqueue assets scripts for both backend and frontend
 */
function mighty_plumbers_block_assets()
{
    wp_enqueue_style('mighty-plumbers-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
}
add_action('enqueue_block_assets', 'mighty_plumbers_block_assets');

/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/core/init.php';

/**
 * Load welcome page file.
 */
require_once get_template_directory() . '/inc/admin/welcome-notice.php';

if (!function_exists('mighty_plumbers_excerpt_more_postfix')) {
    function mighty_plumbers_excerpt_more_postfix($more)
    {
        if (is_admin()) {
            return $more;
        }
        return '...';
    }
    add_filter('excerpt_more', 'mighty_plumbers_excerpt_more_postfix');
}
function mighty_plumbers_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'mighty_plumbers_add_woocommerce_support');
