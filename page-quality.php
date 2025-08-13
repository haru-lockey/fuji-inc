<?php
/**
 * Template Name: Quality Page
 */

get_header();
?>

<div class="py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <!-- Hero Section -->
            <div class="text-center mb-16">
                <h1 class="text-5xl font-bold text-gray-900 mb-8">品質管理</h1>
                <h2 class="text-3xl font-bold text-ymd-blue mb-6">
                    高精度加工を支える、徹底した品質管理体制
                </h2>
                <p class="text-lg text-gray-600 leading-relaxed max-w-4xl mx-auto">
                    藤工業株式会社では、お客様に最高の製品をお届けするため、PCD・超硬・セラミック工具・治具の製造において、厳格な品質管理体制を構築しています。最新鋭の検査設備と熟練の検査員による徹底した品質チェックにより、製品の信頼性を保証します。
                </p>
            </div>

            <!-- Quality Policy -->
            <section class="mb-16">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">品質方針</h2>

                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <img
                            src="https://images.unsplash.com/photo-1587293852726-70cdb56c2866?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400"
                            alt="品質検査の様子"
                            class="rounded-xl shadow-lg"
                        />
                    </div>
                    <div>
                        <div class="bg-white p-6 rounded-xl shadow-lg">
                            <h3 class="text-xl font-bold text-ymd-blue mb-6">品質への取り組み</h3>
                            <ul class="space-y-4 text-gray-600">
                                <li class="flex items-start">
                                    <span class="text-ymd-blue font-bold mr-3">•</span>
                                    <span>厳格な品質基準に基づいた全数検査</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-ymd-blue font-bold mr-3">•</span>
                                    <span>最新鋭の測定機器による精密測定</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-ymd-blue font-bold mr-3">•</span>
                                    <span>熟練の検査員による多角的な品質チェック</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-ymd-blue font-bold mr-3">•</span>
                                    <span>製造工程における徹底した品質管理</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-ymd-blue font-bold mr-3">•</span>
                                    <span>お客様への品質保証体制</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Quality Process -->
            <section class="mb-16">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">品質保証プロセス</h2>

                <div class="grid md:grid-cols-4 gap-8">
                    <?php
                    $quality_steps = [
                        [
                            'step' => '1',
                            'title' => '調達品受入検査',
                            'description' => '調達先から納入された部品の全数検査を実施',
                        ],
                        [
                            'step' => '2',
                            'title' => '工程内検査',
                            'description' => '加工・組付工程での品質確認と管理',
                        ],
                        [
                            'step' => '3',
                            'title' => '最終検査',
                            'description' => '納品前の最終品質チェックと検査成績書作成',
                        ],
                        [
                            'step' => '4',
                            'title' => '出荷判定',
                            'description' => '品質基準クリア製品のみ出荷承認',
                        ],
                    ];

                    foreach ( $quality_steps as $item ) {
                        ?>
                        <div class="bg-white p-6 rounded-xl shadow-lg text-center">
                            <div class="w-16 h-16 bg-ymd-blue text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-4">
                                <?php echo esc_html( $item['step'] ); ?>
                            </div>
                            <h3 class="font-bold text-gray-900 mb-3"><?php echo esc_html( $item['title'] ); ?></h3>
                            <p class="text-gray-600 text-sm"><?php echo esc_html( $item['description'] ); ?></p>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </section>

            <!-- Equipment List -->
            <section class="mb-16">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">検査設備一覧</h2>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php
                    $equipments = [
                        [ 'name' => '精密平面研削盤', 'description' => '高精度な平面研削加工を実現' ],
                        [ 'name' => 'プロファイル研削盤', 'description' => '複雑な形状の研削加工に対応' ],
                        [ 'name' => '円筒研削盤', 'description' => '円筒形状の高精度研削加工' ],
                        [ 'name' => 'ワイヤーカット放電加工機', 'description' => '微細加工や複雑形状加工に最適' ],
                        [ 'name' => 'NCフライス盤', 'description' => '高精度な切削加工を実現' ],
                        [ 'name' => '三次元測定機', 'description' => '製品の寸法精度を厳密に測定' ],
                        [ 'name' => '画像測定機', 'description' => '非接触で高精度な形状測定' ],
                        [ 'name' => '真円度測定機', 'description' => '円筒部品の真円度を測定' ],
                        [ 'name' => '表面粗さ測定機', 'description' => '製品表面の粗さを測定し品質を保証' ],
                        [ 'name' => '硬度計', 'description' => '材料の硬度を測定し品質を管理' ]
                    ];

                    foreach ( $equipments as $equipment ) {
                        ?>
                        <div class="bg-white p-6 rounded-xl shadow-lg">
                            <h3 class="text-xl font-bold text-ymd-blue mb-4"><?php echo esc_html( $equipment['name'] ); ?></h3>
                            <p class="text-gray-600"><?php echo esc_html( $equipment['description'] ); ?></p>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </section>

            <!-- ISO Certification -->
            <section class="mb-16">
                <div class="bg-ymd-light p-8 rounded-xl">
                    <div class="grid md:grid-cols-2 gap-8 items-center">
                        <div>
                            <h2 class="text-3xl font-bold text-gray-900 mb-6">ISO9001認証取得</h2>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                2006年にISO9001認証を取得後、継続的に更新を行い、品質マネジメントシステムの維持・改善に当社役員・全社員で取り組んでいます。
                            </p>
                            <p class="text-gray-600 leading-relaxed">
                                国際基準に基づいた品質管理システムにより、お客様に安心してご利用いただける製品をお届けしています。
                            </p>
                        </div>
                        <div class="text-center">
                            <div class="w-32 h-32 bg-ymd-blue rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">
                                ISO<br/>9001
                            </div>
                            <p class="text-gray-600 font-medium">品質マネジメントシステム</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Factory Images -->
            <section class="mb-16">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">品質管理体制</h2>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <img
                            src="https://images.unsplash.com/photo-1587293852726-70cdb56c2866?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=300"
                            alt="検査室"
                            class="rounded-lg shadow-md mb-4"
                        />
                        <h3 class="font-bold text-gray-900">検査室</h3>
                        <p class="text-gray-600 text-sm">温度管理された環境での精密検査</p>
                    </div>
                    <div class="text-center">
                        <img
                            src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=300"
                            alt="測定機器"
                            class="rounded-lg shadow-md mb-4"
                        />
                        <h3 class="font-bold text-gray-900">最新測定機器</h3>
                        <p class="text-gray-600 text-sm">高精度測定による品質保証</p>
                    </div>
                    <div class="text-center">
                        <img
                            src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=300"
                            alt="検査作業"
                            class="rounded-lg shadow-md mb-4"
                        />
                        <h3 class="font-bold text-gray-900">検査作業</h3>
                        <p class="text-gray-600 text-sm">専任検査員による全数検査</p>
                    </div>
                </div>
            </section>

            <div class="text-center">
                <a href="<?php echo esc_url( site_url( '/contact' ) ); ?>" class="inline-block bg-ymd-blue hover:bg-blue-700 text-white font-bold py-3 px-6 rounded mr-4">
                    品質に関するお問い合わせ
                </a>
                <a href="<?php echo esc_url( site_url( '/products' ) ); ?>" class="inline-block border-2 border-ymd-blue text-ymd-blue hover:bg-ymd-blue hover:text-white font-bold py-3 px-6 rounded">
                    製品情報を見る
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
