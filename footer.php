</main> <!-- #content -->

<footer class="bg-gray-900 text-gray-300 py-12">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="text-2xl font-bold text-white mb-4 font-inter">藤工業</div>
                    <p class="text-sm">
                        〒455-0803<br />
                        名古屋市港区入場2丁目411番地<br />
                        TEL: 052-383-8783
                    </p>
                </div>

                <div>
                    <h4 class="font-bold text-white mb-4">会社情報</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="<?php echo esc_url( site_url( '/about' ) ); ?>" class="hover:text-white transition-colors">会社案内</a></li>
                        <li><a href="<?php echo esc_url( site_url( '/about' ) ); ?>" class="hover:text-white transition-colors">代表挨拶</a></li>
                        <li><a href="<?php echo esc_url( site_url( '/about' ) ); ?>" class="hover:text-white transition-colors">沿革</a></li>
                        <li><a href="<?php echo esc_url( site_url( '/about' ) ); ?>" class="hover:text-white transition-colors">アクセス</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-white mb-4">サービス</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="<?php echo esc_url( site_url( '/services' ) ); ?>" class="hover:text-white transition-colors">藤工業の強み</a></li>
                        <li><a href="<?php echo esc_url( site_url( '/products' ) ); ?>" class="hover:text-white transition-colors">オーダーメイド部品</a></li>
                        <li><a href="<?php echo esc_url( site_url( '/quality' ) ); ?>" class="hover:text-white transition-colors">品質管理</a></li>
                        <li><a href="<?php echo esc_url( site_url( '/services' ) ); ?>" class="hover:text-white transition-colors">設備一覧</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-white mb-4">その他</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="<?php echo esc_url( site_url( '/news' ) ); ?>" class="hover:text-white transition-colors">ニュース</a></li>
                        <li><a href="<?php echo esc_url( site_url( '/contact' ) ); ?>" class="hover:text-white transition-colors">お問い合わせ</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">プライバシーポリシー</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">サステナビリティ</a></li>
                    </ul>
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
