<?php
/**
 * Template Name: Product List Page
 */

get_header();
?>

<div class="py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <!-- Hero Section -->
            <div class="text-center mb-16">
                <h1 class="text-5xl font-bold text-gray-900 mb-8">製品一覧</h1>
                <p class="text-lg text-gray-600 leading-relaxed max-w-4xl mx-auto">
                    藤工業株式会社が取り扱う製品の一覧です。お客様のニーズに合わせた最適な製品をご提供します。
                </p>
            </div>

            <!-- Product Categories Section -->
            <section class="mb-16">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">製品カテゴリー</h2>

                <div class="space-y-12">
                    <?php
                    $product_categories = [
                        [
                            'category' => 'センターレスブレード',
                            'subcategories' => [
                                [
                                    'name' => 'PCD（ダイヤモンド焼結体）',
                                    'products' => [
                                        'PCDセンタレスブレード',
                                        '長尺PCDセンタレスブレード',
                                        'PCD段付ブレード'
                                    ]
                                ],
                                [
                                    'name' => '超硬',
                                    'products' => [
                                        '超硬センタレスブレード'
                                    ]
                                ],
                                [
                                    'name' => 'セラミック',
                                    'products' => [
                                        'まだ情報はありません。'
                                    ]
                                ]
                            ]
                        ],
                        [
                            'category' => '耐摩耗冶工具',
                            'subcategories' => [
                                [
                                    'name' => 'シュー',
                                    'products' => [
                                        'PCDシュー'
                                    ]
                                ],
                                [
                                    'name' => 'レスト',
                                    'products' => [
                                        'PCDレスト',
                                        'PCD Vレスト'
                                    ]
                                ],
                                [
                                    'name' => 'ストッパー',
                                    'products' => [
                                        '超硬端面ストッパー'
                                    ]
                                ],
                                [
                                    'name' => 'バッキングプレート',
                                    'products' => [
                                        'PCDバッキングプレート'
                                    ]
                                ],
                                [
                                    'name' => 'ローラー',
                                    'products' => [
                                        'SKD11 ローラー'
                                    ]
                                ],
                                [
                                    'name' => 'ツメ',
                                    'products' => [
                                        '非磁性PCD治工具ツメ',
                                        '超硬ツメ',
                                        'セラミック クランパーツメ'
                                    ]
                                ],
                                [
                                    'name' => 'その他',
                                    'products' => [
                                        'セラミックV受軸',
                                        'PCDワーク受け',
                                        'PCDロケータ',
                                        '超硬アッパースクレーパー',
                                        '超硬カッター上刃下刃',
                                        '超硬コータフタ',
                                        '超硬バルブフルーイドカップリング',
                                        '超硬上部押え',
                                        '超硬基準ピン',
                                        'セラミックブッシュ',
                                        'SKD11 角度ゲージ',
                                        'SKD11 カッター 上刃 下刃1',
                                        'SKD11 カッター 上刃 下刃 (1)',
                                        'SKD11 カッター 上刃 下刃2',
                                        'SKD11 カッター 上刃 下刃 (2)',
                                        'SKD11 カッター 上刃 下刃3',
                                        'SKD11 カッター 上刃 下刃 (3)',
                                        'SKD11 カッター 上刃 下刃4',
                                        'SKD11 カッター 上刃 下刃 (4)'
                                    ]
                                ]
                            ]
                        ],
                        [
                            'category' => '特殊レースセンター',
                            'subcategories' => [
                                [
                                    'name' => '超硬センター',
                                    'products' => [
                                        '超硬センター1',
                                        '超硬センター2',
                                        '超硬センター3',
                                        '超硬センター4'
                                    ]
                                ]
                            ]
                        ]
                    ];

                    foreach ( $product_categories as $category ) {
                        ?>
                        <div class="bg-white p-8 rounded-xl shadow-lg">
                            <h3 class="text-2xl font-bold text-ymd-blue mb-6"><?php echo esc_html( $category['category'] ); ?></h3>
                            <div class="space-y-6">
                                <?php foreach ( $category['subcategories'] as $subcategory ) {
                                    ?>
                                    <div>
                                        <h4 class="font-bold text-gray-900 mb-3"><?php echo esc_html( $subcategory['name'] ); ?></h4>
                                        <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2 text-gray-600 text-sm">
                                            <?php foreach ( $subcategory['products'] as $product ) {
                                                ?>
                                                <li class="flex items-center">
                                                    <span class="text-ymd-blue mr-2">•</span>
                                                    <?php echo esc_html( $product ); ?>
                                                </li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
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
