</main> <!-- #content -->

<footer class="bg-gray-900 text-gray-300 py-12">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="text-2xl font-bold text-white mb-4 font-inter"><?php echo esc_html( FUJI_COMPANY_NAME ); ?></div>
                    <p class="text-sm">
                        <?php echo FUJI_ADDRESS; ?><br />
                        TEL: <?php echo esc_html( FUJI_PHONE_NUMBER ); ?>
                    </p>
                </div>

                <div>
                    <h4 class="font-bold text-white mb-4">会社情報</h4>
                    <?php
                    if ( has_nav_menu( 'footer_company_info' ) ) {
                        wp_nav_menu( array(
                            'theme_location' => 'footer_company_info',
                            'container'      => false,
                            'items_wrap'     => '<ul class="space-y-2 text-sm">%3$s</ul>',
                            'fallback_cb'    => false,
                        ) );
                    }
                    ?>
                </div>

                <div>
                    <h4 class="font-bold text-white mb-4">サービス</h4>
                    <?php
                    if ( has_nav_menu( 'footer_services' ) ) {
                        wp_nav_menu( array(
                            'theme_location' => 'footer_services',
                            'container'      => false,
                            'items_wrap'     => '<ul class="space-y-2 text-sm">%3$s</ul>',
                            'fallback_cb'    => false,
                        ) );
                    }
                    ?>
                </div>

                <div>
                    <h4 class="font-bold text-white mb-4">その他</h4>
                    <?php
                    if ( has_nav_menu( 'footer_other' ) ) {
                        wp_nav_menu( array(
                            'theme_location' => 'footer_other',
                            'container'      => false,
                            'items_wrap'     => '<ul class="space-y-2 text-sm">%3$s</ul>',
                            'fallback_cb'    => false,
                        ) );
                    }
                    ?>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-12 pt-8 text-center text-sm text-gray-400">
                <p>&copy; <?php echo date('Y'); ?> 藤工業株式会社. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
