<?php
/**
 * Template Name: Contact Page
 */

get_header();
?>

<div class="py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <!-- Hero Section -->
            <div class="text-center mb-16">
                <h1 class="text-5xl font-bold text-gray-900 mb-8">お問い合わせ</h1>
                <h2 class="text-3xl font-bold text-ymd-blue mb-6">
                    機械部品のオーダーメイドや生産設備に関することなら、藤工業にお任せください
                </h2>
                <p class="text-lg text-gray-600 leading-relaxed max-w-4xl mx-auto">
                    最適調達と新たなご提案で、あらゆるご要望や課題に対応いたします。図面1枚からでも気軽にお問い合わせください。
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Contact Form Placeholder -->
                <div>
                    <div class="card shadow-lg">
                        <div class="card-header p-6">
                            <h2 class="text-2xl font-bold text-ymd-blue">
                                お問い合わせフォーム
                            </h2>
                            <p class="text-gray-600">
                                下記フォームにご記入の上、送信してください。
                            </p>
                        </div>
                        <div class="card-content p-6">
                            <!-- WPForms Shortcode -->
                            <?php echo do_shortcode( '[wpforms id="56"]' ); ?>
                        </div>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="space-y-8">
                    <div class="card shadow-lg">
                        <div class="card-header p-6">
                            <h2 class="text-2xl font-bold text-ymd-blue">
                                お電話でのお問い合わせ
                            </h2>
                        </div>
                        <div class="card-content p-6 space-y-6">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-ymd-blue rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-600">電話番号</p>
                                    <a
                                            href="tel:<?php echo esc_attr( FUJI_PHONE_NUMBER ); ?>"
                                            class="text-2xl font-bold text-ymd-blue hover:text-blue-700"
                                        >
                                            <?php echo esc_html( FUJI_PHONE_NUMBER ); ?>
                                        </a>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-ymd-accent rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-600">受付時間</p>
                                    <p class="font-medium">平日 9:00〜17:00</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow-lg">
                        <div class="card-header p-6">
                            <h2 class="text-xl font-bold text-ymd-blue">
                                本社所在地
                            </h2>
                        </div>
                        <div class="card-content p-6 space-y-4">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-ymd-blue rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                                </div>
                                <div>
                                    <p class="font-medium">藤工業株式会社</p>
                                    <p class="text-gray-600">
                                        <?php echo FUJI_ADDRESS; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow-lg">
                        <div class="card-header p-6">
                            <h2 class="text-xl font-bold text-ymd-blue">
                                第二工場
                            </h2>
                        </div>
                        <div class="card-content p-6">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-ymd-accent rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                                </div>
                                <div>
                                    <p class="text-gray-600">
                                        〒455-0803<br />
                                        名古屋市港区入場2丁目2403
                                    </p>
                                    <p class="text-sm text-gray-500 mt-2">
                                        TEL: <?php echo esc_html( FUJI_PHONE_NUMBER ); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Information -->
            <div class="mt-16 bg-ymd-light p-8 rounded-xl">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">
                        お問い合わせに関するご案内
                    </h2>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-ymd-blue rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">
                            &#128221;
                        </div>
                        <h3 class="font-bold text-gray-900 mb-2">図面からお見積り</h3>
                        <p class="text-gray-600 text-sm">
                            図面1枚からでも対応可能。精度やリードタイムを的確に判断してご提案いたします。
                        </p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-ymd-accent rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">
                            &#9889;
                        </div>
                        <h3 class="font-bold text-gray-900 mb-2">迅速対応</h3>
                        <p class="text-gray-600 text-sm">
                            お問い合わせから3営業日以内にご回答。緊急案件にも可能な限り対応いたします。
                        </p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">
                            &#128295;
                        </div>
                        <h3 class="font-bold text-gray-900 mb-2">技術サポート</h3>
                        <p class="text-gray-600 text-sm">
                            モノづくりに精通したセールスエンジニアが、技術的なご相談にもお応えします。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
