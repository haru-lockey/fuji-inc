<?php
/**
 * Theme functions and definitions
 */

// Include theme constants
require_once get_template_directory() . '/constants.php';

// Include custom nav walker
require_once get_template_directory() . '/tailwind-nav-walker.php';

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


function metalworks_setup_initial_menu() {
    $menu_name = 'Primary Navigation';
    $menu_location = 'primary';

    if ( ! has_nav_menu( $menu_location ) ) {
        $menu_exists = wp_get_nav_menu_object( $menu_name );

        if ( ! $menu_exists ) {
            $menu_id = wp_create_nav_menu( $menu_name );

            $menu_structure = [
                ['title' => '会社案内', 'slug' => 'about', 'children' => [
                    ['title' => '会社概要', 'slug' => 'about'],
                    ['title' => '品質方針', 'slug' => 'quality'],
                ]],
                ['title' => '事業案内', 'slug' => 'services', 'children' => [
                     ['title' => '設備紹介', 'slug' => 'equipment'],
                ]],
                ['title' => '製品紹介', 'slug' => 'products', 'children' => [
                    ['title' => '製品一覧', 'slug' => 'product-list'],
                    ['title' => '加工材料', 'slug' => 'material'],
                ]],
                ['title' => 'お知らせ', 'slug' => 'news'],
                ['title' => 'お問い合わせ', 'slug' => 'contact'],
            ];

            foreach ( $menu_structure as $item ) {
                $page = isset($item['slug']) ? get_page_by_path( $item['slug'] ) : null;
                $url = '#';
                if ($page) {
                    $url = get_permalink($page->ID);
                } elseif (isset($item['url'])) {
                    $url = $item['url'];
                }

                $parent_id = wp_update_nav_menu_item($menu_id, 0, [
                    'menu-item-title' => $item['title'],
                    'menu-item-url' => $url,
                    'menu-item-status' => 'publish',
                ]);

                if ( ! empty( $item['children'] ) && $parent_id ) {
                    foreach ( $item['children' ] as $child_item ) {
                        $child_page = isset($child_item['slug']) ? get_page_by_path( $child_item['slug'] ) : null;
                        if ($child_page) {
                            wp_update_nav_menu_item($menu_id, 0, [
                                'menu-item-title' => $child_item['title'],
                                'menu-item-object-id' => $child_page->ID,
                                'menu-item-object' => 'page',
                                'menu-item-parent-id' => $parent_id,
                                'menu-item-status' => 'publish',
                            ]);
                        }
                    }
                }
            }
        }

        $menu_object = wp_get_nav_menu_object( $menu_name );
        if ($menu_object) {
            $locations = get_theme_mod( 'nav_menu_locations' );
            $locations[$menu_location] = $menu_object->term_id;
            set_theme_mod( 'nav_menu_locations', $locations );
        }
    }
}
add_action( 'init', 'metalworks_setup_initial_menu' );

?>
