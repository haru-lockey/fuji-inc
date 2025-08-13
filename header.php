<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="container mx-auto px-4">
        <nav class="flex items-center justify-between py-4">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center space-x-4">
                <div class="text-2xl font-bold text-ymd-blue font-inter">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/fuji-logo.jpg" alt="" class="sm:w-24 md:w-32 lg:w-40 h-auto">
                </div>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center space-x-8" aria-label="<?php esc_attr_e( 'Primary Menu', 'metalworks-theme' ); ?>">
                <?php
                if ( has_nav_menu( 'primary' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'items_wrap'     => '<ul class="flex items-center space-x-8">%3$s</ul>',
                        'fallback_cb'    => false,
                    ) );
                }
                ?>
            </nav>

            <div class="flex items-center space-x-4">
                <a href="tel:052-776-3311" class="hidden md:flex items-center text-ymd-blue font-medium hover:text-blue-700 transition-colors">
                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    <span>052-383-8783</span>
                </a>
                <a href="/contact" class="inline-block bg-ymd-accent hover:bg-red-600 transition-colors text-white font-bold py-2 px-4 rounded">
                    お問い合わせ
                </a>

                <!-- Mobile Menu Button -->
                <div class="lg:hidden">
                    <button id="mobile-menu-toggle" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-ymd-blue" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="lg:hidden hidden" id="mobile-menu">
        <div class="pt-2 pb-3 space-y-1">
            <?php
                if ( has_nav_menu( 'primary' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'items_wrap'     => '<ul class="flex flex-col space-y-2 px-2">%3$s</ul>',
                        'fallback_cb'    => false,
                    ) );
                }
            ?>
        </div>
    </div>
</header>

<main id="content" class="site-content flex-1">
