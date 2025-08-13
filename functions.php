<?php
/**
 * Theme functions and definitions
 */

function metalworks_theme_setup() {
    // Register navigation menus
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'metalworks-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'metalworks_theme_setup' );

function metalworks_theme_scripts() {
    // Enqueue styles
    wp_enqueue_style( 'metalworks-theme-main-styles', get_template_directory_uri() . '/assets/index-Dxg2-kSu.css' );

    // Enqueue scripts
    wp_enqueue_script( 'metalworks-theme-main-scripts', get_template_directory_uri() . '/assets/index-BMX6-3HX.js', array(), null, true );
    wp_enqueue_script( 'metalworks-theme-mobile-menu', get_template_directory_uri() . '/assets/main.js', array(), null, true ); // Add this line
}
add_action( 'wp_enqueue_scripts', 'metalworks_theme_scripts' );
?>