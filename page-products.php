<?php
/**
 * Template Name: Products Page
 */

get_header();
?>

<div class="py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <!-- Hero Section -->
            <div class="text-center mb-16">
                <h1 class="text-5xl font-bold text-gray-900 mb-8">取り扱い製品</h1>
                <h2 class="text-3xl font-bold text-ymd-blue mb-6">
                    PCD・超硬・セラミック耐摩耗工具・治具の専門家
                </h2>
                <p class="text-lg text-gray-600 leading-relaxed max-w-4xl mx-auto">
                    藤工業株式会社は、PCD（焼結ダイヤモンド）、超硬、セラミックといった特殊素材を用いた耐摩耗工具・治具の設計、製造、販売を行っています。長年の経験と高精度加工技術で、お客様の多様なニーズにお応えし、最適な製品を提供します。
                </p>
            </div>

            <!-- Product Categories -->
            <section class="mb-16">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">製品カテゴリー</h2>

                <div class="grid md:grid-cols-1 gap-16">
                    <?php
                    $product_categories = [
                        [
                            'id' => '01',
                            'title' => 'センターレスブレード',
                            'subtitle' => 'Centerless Blades',
                            'description' => 'PCD、超硬、セラミック製の高精度センターレスブレード。研削加工の効率と精度を向上させます。',
                            'image' => 'https://images.unsplash.com/photo-1587293852726-70cdb56c2866?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400',
                            'color' => 'bg-ymd-blue',
                            'details' => [
                                'PCDセンターレスブレード',
                                '超硬センターレスブレード',
                                'セラミックセンターレスブレード',
                                '各種研削加工用ブレード'
                            ]
                        ],
                        [
                            'id' => '02',
                            'title' => '耐摩耗治具',
                            'subtitle' => 'Wear-Resistant Jigs',
                            'description' => 'PCD、超硬、セラミック製の耐摩耗治具。長寿命で安定した加工精度を維持し、生産効率を向上させます。',
                            'image' => 'https://images.unsplash.com/photo-1581094288338-2314dddb7ece?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400',
                            'color' => 'bg-ymd-accent',
                            'details' => [
                                'PCD耐摩耗治具',
                                '超硬耐摩耗治具',
                                'セラミック耐摩耗治具',
                                '各種専用治具'
                            ]
                        ],
                        [
                            'id' => '03',
                            'title' => '特殊旋盤用センター',
                            'subtitle' => 'Special Lathe Centers',
                            'description' => 'PCD、超硬、セラミック製の特殊旋盤用センター。高精度な旋削加工をサポートし、製品品質を向上させます。',
                            'image' => 'https://images.unsplash.com/photo-1565814329452-e1efa11c5b89?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400',
                            'color' => 'bg-green-600',
                            'details' => [
                                'PCD特殊旋盤用センター',
                                '超硬特殊旋盤用センター',
                                'セラミック特殊旋盤用センター',
                                '各種特殊加工用センター'
                            ]
                        ]
                    ];

                    foreach ( $product_categories as $index => $product ) {
                        $image_order_class = ( $index % 2 === 1 ) ? 'order-1 md:order-2' : '';
                        $text_order_class = ( $index % 2 === 1 ) ? 'order-2 md:order-1' : '';
                        ?>
                        <div class="grid md:grid-cols-2 gap-12 items-center">
                            <div class="<?php echo esc_attr( $text_order_class ); ?>">
                                <div class="inline-block <?php echo esc_attr( $product['color'] ); ?> text-white px-4 py-2 rounded-lg font-bold text-lg mb-4">
                                    <?php echo esc_html( $product['id'] ); ?>
                                </div>
                                <h3 class="text-3xl font-bold mb-2"><?php echo esc_html( $product['title'] ); ?></h3>
                                <p class="text-ymd-blue font-medium mb-4"><?php echo esc_html( $product['subtitle'] ); ?></p>
                                <p class="text-gray-600 leading-relaxed mb-6"><?php echo esc_html( $product['description'] ); ?></p>

                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-bold text-gray-900 mb-3">対応製品例</h4>
                                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-2 text-sm text-gray-600">
                                        <?php foreach ( $product['details'] as $detail ) : ?>
                                            <li class="flex items-center">
                                                <span class="text-ymd-blue mr-2">•</span>
                                                <?php echo esc_html( $detail ); ?>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="<?php echo esc_attr( $image_order_class ); ?>">
                                <img
                                    src="<?php echo esc_url( $product['image'] ); ?>"
                                    alt="<?php echo esc_attr( $product['title'] ); ?>"
                                    class="rounded-xl shadow-lg w-full"
                                />
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </section>

            <!-- Materials Section -->
            <section class="mb-16">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">対応材料</h2>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <?php
                    $materials = [
                        [
                            'category' => '主要取扱材料',
                            'items' => ['PCD（焼結ダイヤモンド）', '超硬（タングステンカーバイド）', 'セラミック']
                        ],
                        [
                            'category' => 'その他対応材料',
                            'items' => ['ハイス', 'ステンレス', 'アルミ', '銅', '真鍮', '樹脂']
                        ]
                    ];

                    foreach ( $materials as $material ) {
                        ?>
                        <div class="bg-white p-6 rounded-xl shadow-lg">
                            <h3 class="text-xl font-bold text-ymd-blue mb-4"><?php echo esc_html( $material['category'] ); ?></h3>
                            <ul class="space-y-2">
                                <?php foreach ( $material['items'] as $item ) : ?>
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

            <!-- Manufacturing Processes -->
            <section class="mb-16">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">製造プロセス</h2>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php
                    $processes = [
                        [
                            'name' => '研削加工',
                            'description' => '平面研削、円筒研削、プロファイル研削など高精度研削加工',
                            'image' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=300'
                        ],
                        [
                            'name' => 'ワイヤーカット放電加工',
                            'description' => '複雑な形状や高精度な加工に対応',
                            'image' => 'https://images.unsplash.com/photo-1587293852726-70cdb56c2866?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=300'
                        ],
                        [
                            'name' => 'NCフライス加工',
                            'description' => '高精度な切削加工を実現',
                            'image' => 'https://images.unsplash.com/photo-1565814329452-e1efa11c5b89?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=300'
                        ],
                        [
                            'name' => '旋盤加工',
                            'description' => '円筒形状の精密加工',
                            'image' => 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=300'
                        ],
                        [
                            'name' => '検査・測定',
                            'description' => '三次元測定機、画像測定機による厳格な品質検査',
                            'image' => 'https://images.unsplash.com/photo-1556742044-3c52d6e88c62?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=300'
                        ]
                    ];

                    foreach ( $processes as $process ) {
                        ?>
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                            <img
                                src="<?php echo esc_url( $process['image'] ); ?>"
                                alt="<?php echo esc_attr( $process['name'] ); ?>"
                                class="w-full h-48 object-cover"
                            />
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-ymd-blue mb-3"><?php echo esc_html( $process['name'] ); ?></h3>
                                <p class="text-gray-600"><?php echo esc_html( $process['description'] ); ?></p>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </section>

            <!-- Quality Assurance -->
            <section class="mb-16 bg-ymd-light p-8 rounded-xl">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">品質保証</h2>
                    <p class="text-lg text-gray-600">すべての製品に対して徹底した品質管理を実施</p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-ymd-blue rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">
                            &#10003;
                        </div>
                        <h3 class="font-bold text-gray-900 mb-2">全数検査</h3>
                        <p class="text-gray-600 text-sm">専任検査員による原則全数検査を実施</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-ymd-accent rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">
                            &#128295;
                        </div>
                        <h3 class="font-bold text-gray-900 mb-2">精密測定</h3>
                        <p class="text-gray-600 text-sm">最新の測定機器による高精度検査</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">
                            &#128221;
                        </div>
                        <h3 class="font-bold text-gray-900 mb-2">品質証明</h3>
                        <p class="text-gray-600 text-sm">検査成績書・材料証明書の発行</p>
                    </div>
                </div>
            </section>

            <div class="text-center">
                <a href="<?php echo esc_url( site_url( '/contact' ) ); ?>" class="inline-block bg-ymd-blue hover:bg-blue-700 text-white font-bold py-3 px-6 rounded mr-4">
                    製品に関するお問い合わせ
                </a>
                <a href="<?php echo esc_url( site_url( '/quality' ) ); ?>" class="inline-block border-2 border-ymd-blue text-ymd-blue hover:bg-ymd-blue hover:text-white font-bold py-3 px-6 rounded">
                    品質への取り組みを見る
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
