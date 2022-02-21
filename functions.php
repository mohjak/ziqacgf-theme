<?php

/**
 * ZAD Competition with Google Forms functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ziqacgf-theme
 */

if (!defined('ZIQACGF_THEME_VERSION')) {
    // Replace the version number of the theme on each release.
    define('ZIQACGF_THEME_VERSION', '0.1.0');
}

if (!function_exists('ziqacgf_theme_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function ziqacgf_theme_setup()
    {
        /*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 */
        load_theme_textdomain('ziqacgf', get_template_directory() . '/languages');

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
                'the-header-nav-location' => esc_html__('Header Nav Menu Location', 'ziqacgf'),
            )
        );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 382,
                'width'       => 308,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action('after_setup_theme', 'ziqacgf_theme_setup');

/**
 * Enqueue scripts and styles.
 */
function ziqacgf_theme_scripts()
{
    wp_enqueue_style('ziqacgf-style', get_stylesheet_uri(), array(), ZIQACGF_THEME_VERSION);
    wp_style_add_data('ziqacgf-style', 'rtl', 'replace');

    wp_enqueue_script('main-ziqacgf-js', get_theme_file_uri('build/index.js'), array(), ZIQACGF_THEME_VERSION, true);
    wp_enqueue_style('ziqacgf_extra_styles', get_theme_file_uri('build/index.css'), array(), ZIQACGF_THEME_VERSION);
}
add_action('wp_enqueue_scripts', 'ziqacgf_theme_scripts');
