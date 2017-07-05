<?php
/**
 * Retouch_Lite functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Retouch_Lite
 */

 // Launch the Hybrid Core framework.
 require_once(trailingslashit(get_template_directory()) . 'hybrid-core/hybrid.php');

if (! function_exists('retouch_lite_setup')) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function retouch_lite_setup()
{
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on Retouch_Lite, use a find and replace
     * to change 'retouch-lite' to the name of your theme in all the template files.
     */
    load_theme_textdomain('retouch-lite', get_template_directory() . '/languages');

    // Theme layouts.
    add_theme_support('theme-layouts', array( 'default' => is_rtl() ? '2c-r' :'2c-l' ));

    // Enable custom template hierarchy.
    add_theme_support('hybrid-core-template-hierarchy');

    // The best thumbnail/image script ever.
    add_theme_support('get-the-image');

    // Breadcrumbs. Yay!
    add_theme_support('breadcrumb-trail');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Post formats.
    add_theme_support(
        'post-formats',
        array( 'aside', 'audio', 'chat', 'image', 'gallery', 'link', 'quote', 'status', 'video' )
    );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(array(
        'menu-1' => esc_html__('Primary', 'retouch-lite'),
    ));

    // Set up the WordPress core custom background feature.
    add_theme_support('custom-background', apply_filters('retouch_lite_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    )));

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support('custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ));

    // Handle content width for embeds and images.
    hybrid_set_content_width(640);
}
endif;
add_action('after_setup_theme', 'retouch_lite_setup');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function retouch_lite_widgets_init()
{
    hybrid_register_sidebar(array(
        'name'          => esc_html__('Primary', 'retouch-lite'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here to appear in your sidebar on blog posts and archive pages.', 'retouch-lite'),
    ));

    hybrid_register_sidebar(array(
        'name'          => esc_html__('Footer 1', 'retouch-lite'),
        'id'            => 'sidebar-2',
        'description'   => esc_html__('Add widgets here to appear in your footer.', 'retouch-lite'),
    ));

    hybrid_register_sidebar(array(
        'name'          => esc_html__('Footer 2', 'retouch-lite'),
        'id'            => 'sidebar-3',
        'description'   => esc_html__('Add widgets here to appear in your footer.', 'retouch-lite'),
    ));

    hybrid_register_sidebar(array(
        'name'          => esc_html__('Footer 3', 'retouch-lite'),
        'id'            => 'sidebar-4',
        'description'   => esc_html__('Add widgets here to appear in your footer.', 'retouch-lite'),
    ));

    hybrid_register_sidebar(array(
        'name'          => esc_html__('Footer 4', 'retouch-lite'),
        'id'            => 'sidebar-5',
        'description'   => esc_html__('Add widgets here to appear in your footer.', 'retouch-lite'),
    ));
}
add_action('widgets_init', 'retouch_lite_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function retouch_lite_scripts()
{
    // Fix navigation on mobile
    wp_enqueue_script('retouch-lite-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

    // Skip link fix
    wp_enqueue_script('retouch-lite-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

    // Bootstrap need tether
    wp_enqueue_script('tether', get_template_directory_uri() . '/js/tether.min.js', array('jquery'), '20151215', true);

    // Bootstrap need popper
    wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), '20151215', true);

    // Finally enqueue bootstrap
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('tether', 'popper'), '20151215', true);

    // Load gallery style if 'cleaner-gallery' is active.
    if (current_theme_supports('cleaner-gallery')) {
        wp_enqueue_style('hybrid-gallery');
    }

    // Load parent theme stylesheet if child theme is active.
    if (is_child_theme()) {
        wp_enqueue_style('hybrid-parent');
    }

    // Load active theme stylesheet.
    wp_enqueue_style('hybrid-style');
}
add_action('wp_enqueue_scripts', 'retouch_lite_scripts');

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
require get_template_directory() . '/inc/jetpack.php';
