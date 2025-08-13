<?php
/**
 * Template Name: Equipment Page
 */

get_header();
?>

<div class="py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <!-- Hero Section -->
            <div class="text-center mb-16">
                <h1 class="text-5xl font-bold text-gray-900 mb-8">設備概要</h1>
                <p class="text-lg text-gray-600 leading-relaxed max-w-4xl mx-auto">
                    工具の歴史は、そのまま人類文明の歴史といわれています。今、新素材、新清算技術の時代を迎えて、高度に多様化した産業界では、より優れた治工具と、柔軟な発想での技術が要求されます。 藤工業（株）では、高品位の超硬合金やセラミック、ダイヤモンド焼結体、cBN焼結体、サーメット等を用いた各種治工具・耐磨治工具・機械工具部品などの設計・制作、製造・販売を通じて、産業界の基本分野への貢献を果たし続けます。
                </p>
            </div>

            <!-- Equipment List Section -->
            <section class="mb-16">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">主要設備一覧</h2>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php
                    $equipment_list = [
                        [
                            'category' => '精密平面研削盤',
                            'items' => [
                                '黒田精工 JK-156ATD 1500×600',
                                '黒田精工 GS52-PFⅡ 500×200 2台',
                                '日平トヤマ 1500×500',
                                '他計１７台'
                            ]
                        ],
                        [
                            'category' => 'プロファイル研削盤',
                            'items' => [
                                'テクノワシノ GLS-135AS 250×130×135',
                                'テクノワシノ GLS-125A 250×130×125',
                                'テクノワシノ GLS-135B 250×130×135',
                                '和井田 PGX-3000 250×130×160'
                            ]
                        ],
                        [
                            'category' => 'ワイヤーカット',
                            'items' => [
                                'アマダ AD-0i 370×270×255',
                                'アマダ AD-1i 600×400×310'
                            ]
                        ],
                        [
                            'category' => '放電加工機',
                            'items' => [
                                'アマダ SH3D'
                            ]
                        ],
                        [
                            'category' => 'NCフライス盤',
                            'items' => [
                                'OKK らくらくミル 3V',
                                'OKK らくらくミル 2V'
                            ]
                        ],
                        [
                            'category' => '内面研削盤',
                            'items' => [
                                'SCIENCE GIS-100SH'
                            ]
                        ],
                        [
                            'category' => '円筒研削盤',
                            'items' => [
                                'KONDO Hi-450'
                            ]
                        ],
                        [
                            'category' => '回転平面研削盤',
                            'items' => [
                                'アマダ SS-501 φ500'
                            ]
                        ],
                        [
                            'category' => '万能研削盤',
                            'items' => [
                                'マキノ C-400'
                            ]
                        ],
                        [
                            'category' => 'フライス盤',
                            'items' => [
                                'OKK'
                            ]
                        ],
                        [
                            'category' => '旋盤',
                            'items' => [
                                '豊和産業 6尺タイプ'
                            ]
                        ],
                        [
                            'category' => '高周波ロウ付け機',
                            'items' => [
                                '島田理化 20ｋｗ',
                                '島田理化 10ｋｗ'
                            ]
                        ],
                        [
                            'category' => 'エアロラップ',
                            'items' => [
                                'ヤマシタワークス'
                            ]
                        ],
                    ];

                    foreach ( $equipment_list as $category ) {
                        ?>
                        <div class="bg-white p-6 rounded-xl shadow-lg">
                            <h3 class="text-xl font-bold text-ymd-blue mb-4"><?php echo esc_html( $category['category'] ); ?></h3>
                            <ul class="space-y-2">
                                <?php foreach ( $category['items'] as $item ) : ?>
                                    <li class="text-gray-600 text-sm flex items-center">
                                        <span class="text-ymd-blue mr-2">•</span>
                                        <?php echo esc_html( $item ); ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </section>
        </div>
    </div>
</div>

<?php get_footer(); ?>
