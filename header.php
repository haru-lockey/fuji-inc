<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <style>
        /* Modern Mobile Menu Styles */
        #mobile-menu ul li a {
            display: block;
            padding: 0.75rem 1rem; /* py-3 px-4 equivalent */
            color: #333; /* Darker text for better contrast */
            font-weight: 500; /* Medium weight */
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
            border-radius: 0.25rem; /* subtle rounded corners */
        }

        #mobile-menu ul li a:hover {
            background-color: #f0f0f0; /* Light grey background on hover */
            color: #000; /* Darker text on hover */
        }

        /* Ensure the menu content itself has some padding */
        #mobile-menu > div > div.pt-2.pb-3.space-y-1 {
            padding-left: 1rem; /* px-4 */
            padding-right: 1rem; /* px-4 */
        }

        /* Hide contact button on smaller screens */
        @media (max-width: 767px) {
            a.bg-ymd-accent[href="/contact"] {
                display: none;
            }
        }

        /* Modern Dropdown Menu Styles */
        .sub-menu {
            opacity: 0;
            transform: translateY(0.5rem);
            transition: opacity 150ms ease-in-out, transform 150ms ease-in-out;
            pointer-events: none;
            display: none;
        }

        .group:hover > .sub-menu,
        .group:focus-within > .sub-menu {
            opacity: 1;
            transform: translateY(0);
            pointer-events: auto;
            display: block;
        }

        /* Animate dropdown arrow */
        .group > a > svg {
            transition: transform 150ms ease-in-out;
        }

        .group:hover > a > svg {
            transform: rotate(180deg);
        }

        .rotate-180 {
            transform: rotate(180deg);
        }
    </style>
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
                        'walker'         => new Tailwind_Nav_Walker(),
                    ) );
                }
                ?>
            </nav>

            <div class="flex items-center space-x-4">
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
    <div class="lg:hidden fixed inset-0 z-40 overflow-hidden transition-all duration-300 ease-in-out transform translate-x-full" id="mobile-menu">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black opacity-0 transition-opacity duration-300 ease-in-out" id="mobile-menu-overlay"></div>
        <div class="relative w-64 max-w-full bg-white h-full shadow-xl ml-auto">
            <div class="flex justify-end p-4">
                <button id="mobile-menu-close" type="button" class="text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-ymd-blue">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="pt-2 pb-3 space-y-1">
                <?php
                    if ( has_nav_menu( 'primary' ) ) {
                        wp_nav_menu( array(
                            'theme_location' => 'primary',
                            'container'      => false,
                            'items_wrap'     => '<ul class="flex flex-col space-y-2 px-2">%3$s</ul>',
                            'fallback_cb'    => false,
                            'walker'         => new Tailwind_Nav_Walker(),
                            'is_mobile'      => true,
                        ) );
                    }
                ?>
            </div>
        </div>
    </div>
</header>

<main id="content" class="site-content flex-1">
