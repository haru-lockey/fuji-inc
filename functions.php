<?php
/**
 * Theme functions and definitions
 */

// Include theme constants
require_once get_template_directory() . '/constants.php';

function metalworks_theme_setup() {
    // Register navigation menus
    register_nav_menus( array(
        'primary'           => esc_html__( 'Primary Menu', 'metalworks-theme' ),
        'footer_company_info' => esc_html__( 'Footer - Company Info', 'metalworks-theme' ),
        'footer_services'   => esc_html__( 'Footer - Services', 'metalworks-theme' ),
        'footer_other'      => esc_html__( 'Footer - Other', 'metalworks-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'metalworks_theme_setup' );

/**
 * Enqueue scripts and styles.
 *
 * Improvement Suggestion (Performance & Maintainability):
 * - For 'assets/index-Dxg2-kSu.css' and 'assets/index-BMX6-3HX.js', these appear to be minified/bundled outputs.
 *   It's highly recommended to maintain unminified source files (e.g., SCSS/LESS for CSS, separate JS modules for JS)
 *   and use a proper build process (e.g., Webpack, Gulp, Vite) to compile and minify them.
 *   This improves development experience, debugging, and long-term maintainability.
 * - While 'assets/main.js' is simple, for larger projects, explicitly declaring dependencies (e.g., jQuery if used)
 *   in wp_enqueue_script ensures correct loading order and avoids potential conflicts.
 */
function metalworks_theme_scripts() {
    $theme_dir = get_template_directory();

    // Enqueue styles
    wp_enqueue_style(
        'metalworks-theme-main-styles',
        get_template_directory_uri() . '/assets/index-Dxg2-kSu.css',
        array(),
        filemtime( $theme_dir . '/assets/index-Dxg2-kSu.css' ),
        'all'
    );

    // Enqueue scripts
    wp_enqueue_script(
        'metalworks-theme-main-scripts',
        get_template_directory_uri() . '/assets/index-BMX6-3HX.js',
        array(),
        filemtime( $theme_dir . '/assets/index-BMX6-3HX.js' ),
        true
    );
    wp_enqueue_script(
        'metalworks-theme-mobile-menu',
        get_template_directory_uri() . '/assets/main.js',
        array('metalworks-theme-main-scripts'), // Dependent on main scripts
        filemtime( $theme_dir . '/assets/main.js' ),
        true
    );
}
add_action( 'wp_enqueue_scripts', 'metalworks_theme_scripts' );
?>
