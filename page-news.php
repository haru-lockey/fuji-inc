<?php
/**
 * Template Name: News Page
 */

get_header();
?>

<div class="py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <!-- Hero Section -->
            <div class="text-center mb-16">
                <h1 class="text-5xl font-bold text-gray-900 mb-8">新着情報</h1>
                <p class="text-lg text-gray-600 leading-relaxed">
                    藤工業株式会社の最新情報をお届けします。休業日のお知らせや新しい取り組みなど、
                    重要な情報を随時更新しています。
                </p>
            </div>

            <!-- News List -->
            <div class="space-y-8">
                <?php
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array(
                    'post_type'      => 'post', // Default post type for news
                    'posts_per_page' => 5,      // Number of news items per page
                    'paged'          => $paged,
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                    'post_status'    => 'publish',
                );

                $news_query = new WP_Query( $args );

                if ( $news_query->have_posts() ) : ?>
                    <div class="space-y-6">
                        <?php while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
                            <div class="card shadow-lg hover:shadow-xl transition-shadow">
                                <div class="card-content p-8">
                                    <div class="flex items-start gap-6">
                                        <!-- Date Display -->
                                        <div class="flex-shrink-0 text-center">
                                            <div class="bg-ymd-blue text-white p-4 rounded-lg">
                                                <div class="text-3xl font-bold">
                                                    <?php echo get_the_date( 'd' ); ?>
                                                </div>
                                                <div class="text-sm opacity-90">
                                                    <?php echo get_the_date( 'Y.m' ); ?>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Content -->
                                        <div class="flex-1 min-w-0">
                                            <div class="flex items-center gap-3 mb-4">
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-ymd-blue">
                                                    <svg class="w-3 h-3 mr-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                                                    <?php
                                                    $categories = get_the_category();
                                                    if ( ! empty( $categories ) ) {
                                                        echo esc_html( $categories[0]->name ); // Display the first category
                                                    }
                                                    ?>
                                                </span>
                                                <div class="flex items-center text-gray-500 text-sm">
                                                    <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                                                    <?php echo get_the_date( 'Y年m月d日' ); ?>
                                                </div>
                                            </div>

                                            <h2 class="text-2xl font-bold text-gray-900 mb-4 hover:text-ymd-blue transition-colors">
                                                <a href="<?php the_permalink(); ?>" class="text-gray-900 hover:text-ymd-blue transition-colors">
                                                    <?php the_title(); ?>
                                                </a>
                                            </h2>

                                            <div class="text-gray-600 leading-relaxed">
                                                <p><?php the_excerpt(); // Use excerpt for list view ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-8 flex justify-center">
                        <?php
                        echo paginate_links( array(
                            'total'   => $news_query->max_num_pages,
                            'current' => max( 1, get_query_var( 'paged' ) ),
                            'prev_text' => '&laquo; 前へ',
                            'next_text' => '次へ &raquo;',
                            'type'      => 'list', // Render as a ul/li list
                        ) );
                        ?>
                    </div>

                    <?php wp_reset_postdata(); // Restore original Post Data ?>

                <?php else : ?>
                    <!-- Empty state -->
                    <div class="text-center py-16">
                        <div class="bg-gray-50 p-12 rounded-xl">
                            <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center text-gray-400 text-3xl mx-auto mb-6">
                                &#128240;
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900 mb-4">
                                現在、新着情報はありません
                            </h2>
                            <p class="text-gray-600">
                                新しい情報が追加されましたら、こちらに表示されます。
                            </p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Sidebar Information -->
            <div class="mt-16 bg-ymd-light p-8 rounded-xl">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">
                        重要なお知らせ
                    </h2>
                    <p class="text-gray-600">
                        休業日や重要な変更事項は随時こちらでお知らせいたします
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-ymd-blue rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">
                            &#128197;
                        </div>
                        <h3 class="font-bold text-gray-900 mb-2">営業日カレンダー</h3>
                        <p class="text-gray-600 text-sm">
                            営業日・休業日の最新情報をお知らせします
                        </p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-ymd-accent rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">
                            &#127981;
                        </div>
                        <h3 class="font-bold text-gray-900 mb-2">工場・設備情報</h3>
                        <p class="text-gray-600 text-sm">
                            新設備導入や工場拡張などの情報をお伝えします
                        </p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">
                            &#127881;
                        </div>
                        <h3 class="font-bold text-gray-900 mb-2">会社の取り組み</h3>
                        <p class="text-gray-600 text-sm">
                            新しいサービスや認証取得などの情報をご紹介します
                        </p>
                    </div>
                </div>
            </div>

            <!-- Contact CTA -->
            <div class="mt-16 bg-ymd-blue text-white p-8 rounded-xl text-center">
                <h2 class="text-3xl font-bold mb-4">最新情報をお求めの方へ</h2>
                <p class="text-xl mb-6 opacity-90">
                    より詳しい情報やお急ぎのご相談は、直接お電話でお問い合わせください
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a
                        href="tel:052-383-8783"
                        class="inline-flex items-center justify-center bg-ymd-accent hover:bg-red-600 text-white px-8 py-3 rounded-md text-lg font-medium transition-colors"
                    >
                        📞 052-383-8783
                    </a>
                    <span class="text-blue-200 self-center">平日 9:00〜17:00</span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
