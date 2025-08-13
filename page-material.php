<?php
/**
 * Template Name: Material Page
 */

get_header();
?>

<div class="py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <!-- Hero Section -->
            <div class="text-center mb-16">
                <h1 class="text-5xl font-bold text-gray-900 mb-8">対応材料</h1>
                <p class="text-lg text-gray-600 leading-relaxed max-w-4xl mx-auto">
                    藤工業株式会社が取り扱う主要な材料と、それらを用いた製品をご紹介します。
                </p>
            </div>

            <!-- Material Categories Section -->
            <section class="mb-16">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">材料別製品一覧</h2>

                <div class="grid md:grid-cols-1 lg:grid-cols-2 gap-8">
                    <?php
                    $material_categories = [
                        [
                            'name' => 'PCD（ダイヤモンド焼結体）',
                            'description' => [
                                'PCDセンタレスブレード',
                                '長尺PCDセンタレスブレード',
                                'PCD段付ブレード',
                                'PCDバッキングプレート',
                                '非磁性PCD治工具ツメ',
                                'PCDワーク受け',
                                'PCDロケータ',
                                'PCDレスト',
                                'PCD Vレスト',
                                'PCDシュー'
                            ]
                        ],
                        [
                            'name' => 'セラミック',
                            'description' => [
                                'セラミックV受軸',
                                'セラミック クランパーツメ',
                                'セラミックブッシュ'
                            ]
                        ],
                        [
                            'name' => '超硬（タングステン）',
                            'description' => [
                                '超硬センタレスブレード',
                                '超硬アッパースクレーパー',
                                '超硬カッター上刃下刃',
                                '超硬コータフタ',
                                '超硬シューター',
                                '超硬バルブフルーイドカップリング',
                                '超硬上部押え',
                                '超硬基準ピン',
                                '超硬端面ストッパー',
                                '超硬ツメ',
                                '超硬センター1',
                                '超硬センター2',
                                '超硬センター3',
                                '超硬センター4'
                            ]
                        ],
                    ];

                    foreach ( $material_categories as $category ) {
                        ?>
                        <div class="bg-white p-8 rounded-xl shadow-lg">
                            <h3 class="text-2xl font-bold text-ymd-blue mb-6"><?php echo esc_html( $category['name'] ); ?></h3>
                            <ul class="space-y-2">
                                <?php foreach ( $category['description'] as $item ) {
                                    ?>
                                    <li class="text-gray-600 text-sm flex items-center">
                                        <span class="text-ymd-blue mr-2">•</span>
                                        <?php echo esc_html( $item ); ?>
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
            </section>
        </div>
    </div>
</div>

<?php get_footer(); ?>
