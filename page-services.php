<?php
/**
 * Template Name: Services Page
 */

get_header();
?>

<div class="py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <!-- Hero Section -->
            <div class="text-center mb-16">
                <h1 class="text-5xl font-bold text-gray-900 mb-8">藤工業の強み</h1>
                <h2 class="text-3xl font-bold text-ymd-blue mb-6">
                    お客様の課題を解決する、藤工業のサービス
                </h2>
                <p class="text-lg text-gray-600 leading-relaxed max-w-4xl mx-auto">
                    藤工業株式会社は、PCD・超硬・セラミック耐摩耗工具・治具の提供を通じて、お客様のモノづくりにおける様々な課題を解決します。設計から製造、アフターサポートまで一貫したサービスで、お客様の生産性向上とコスト削減に貢献します。
                </p>
            </div>

            <!-- Features Section -->
            <section class="mb-16">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">藤工業のサービス</h2>

                <div class="space-y-16">
                    <?php
                    $features = [
                        [
                            'id' => 'FEATURE01',
                            'title' => '技術力',
                            'description' => '当社はすべて最新の機械ばかりだけではありません、それは、いかなる高性能でも機械力だけでは成し遂げられない要因があることを知っていると同時に、 そこから生まれる製品が必ずしも高品質を意味するものではないと考えるからです。<br>
真に最高精度の工具はごまかしや妥協のない「職人気質」から生み出される作業者の卓越した「勘」に代表される感性を通してのみ製作可能です。 そのために弊社は日々精神をみがき最高度の技術習得に努めています。私たちの信頼される技術は、一人ひとりの優れた人間性とそれを支える機械との調和によって支えられています。',
                            'image' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400',
                        ],
                        [
                            'id' => 'FEATURE02',
                            'title' => '精度',
                            'description' => '当社はその社歴の中で要求される精度が高精度から超高精度への変革の体現者ともいえます。 製品造りには幾多の工程があるので今日求められている精度は技術力に長けた一人では製作できないモノが多く、 そのために工程に携わる全員が製品を理解することが不可欠です。 私たち精密加工者はこれまで以上に“後工程気配り”の本質が精密さに求められていることを使命として受け止めています。',
                            'image' => 'https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400',
                        ],
                        [
                            'id' => 'FEATURE03',
                            'title' => '品質',
                            'description' => '当社はツールのロングライフはもちろん、生産環境や加工ニーズさえ念頭に置いた品質性に配慮しています。
その製品がどのように使われて、どのような役割を果たすものなのかを考慮して自らの品質性を厳しく設定しています。 そのため製造過程においては試行錯誤のすえ、時には過去の成功事例に反する発想をすることもあります。 それゆえ失敗を繰り返すこともありますが、それらの経験が品質向上に不可欠であると考えています。 製造過程は遠回りですが高品質。つねに“製品の役割”が考慮された品質を探求しています。',
                            'image' => 'https://images.unsplash.com/photo-1587293852726-70cdb56c2866?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400',
                        ],
                        [
                            'id' => 'FEATURE04',
                            'title' => '短納期',
                            'description' => '当社の製品は工業用ダイヤモンドやセラミック、超硬合金などの異種金属のろう付けや接着された製品が多く、 そのため短納期達成のために多種サイズ・グレードの材料・素材をストックしてお客様の短納期対応に備えています。',
                            'image' => 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400',
                        ],
                    ];

                    foreach ( $features as $index => $feature ) {
                        $image_order_class = ( $index % 2 === 1 ) ? 'order-1 md:order-2' : '';
                        $text_order_class = ( $index % 2 === 1 ) ? 'order-2 md:order-1' : '';
                        ?>
                        <div class="grid md:grid-cols-2 gap-12 items-center">
                            <div class="<?php echo esc_attr( $text_order_class ); ?>">
                                <span class="text-ymd-blue font-bold text-lg font-inter"><?php echo esc_html( $feature['id'] ); ?></span>
                                <h3 class="text-3xl font-bold mb-6"><?php echo esc_html( $feature['title'] ); ?></h3>
                                <p class="text-gray-600 leading-relaxed"><?php echo esc_html( $feature['description'] ); ?></p>
                            </div>
                            <div class=" <?php echo esc_attr( $image_order_class ); ?>">
                                <img
                                    src="<?php echo esc_url( $feature['image'] ); ?>"
                                    alt="<?php echo esc_attr( $feature['title'] ); ?>"
                                    class="rounded-xl shadow-lg w-full"
                                />
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </section>

            <!-- Case Studies -->
            <section class="mb-16">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">対応事例</h2>

                <div class="grid md:grid-cols-1 lg:grid-cols-3 gap-8">
                    <?php
                    $cases = [
                        [
                            'title' => '治具材質変更による寿命向上',
                            'problem' => '製品を挟む形状の治具でIDタグを管理していたが、治具の樹脂の部分が割れてしまう',
                            'solution' => '治具を細分化し摩擦対策の観点から、折れやすい箇所のPEEKを非弱性のあるSUS440Cへ変更',
                            'result' => '治具の寿命が延び、バラシ・組付作業が不要となり、作業時間を短縮'
                        ],
                        [
                            'title' => '設備排水対策の簡易カバー',
                            'problem' => '設備排水の勢いが強く、安全確保のため、飛び散った水を定期的に拭き取る必要がある',
                            'solution' => '磁石を使用した簡易的なカバーで対応',
                            'result' => '工事申請を行わずに対応可能、水の飛び散りは解消され、拭き取り作業が不要に'
                        ],
                        [
                            'title' => '黒染め工程の品質向上',
                            'problem' => '黒染め工程で製品同士が干渉し、傷が入ることで、黒染め液の付着不良が発生',
                            'solution' => '黒染め液用として過去に使用実績のあるテフロンとステンレスを使用して仕切りを製作',
                            'result' => '製品同士の干渉・傷の発生がなくなった'
                        ],
                    ];

                    foreach ( $cases as $case_item ) {
                        ?>
                        <div class="bg-white p-6 rounded-xl shadow-lg">
                            <h3 class="text-xl font-bold text-ymd-blue mb-4"><?php echo esc_html( $case_item['title'] ); ?></h3>

                            <div class="space-y-4">
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-2">ご相談内容</h4>
                                    <p class="text-gray-600 text-sm"><?php echo esc_html( $case_item['problem'] ); ?></p>
                                </div>

                                <div>
                                    <h4 class="font-bold text-gray-900 mb-2">対応内容</h4>
                                    <p class="text-gray-600 text-sm"><?php echo esc_html( $case_item['solution'] ); ?></p>
                                </div>

                                <div>
                                    <h4 class="font-bold text-gray-900 mb-2">結果</h4>
                                    <p class="text-gray-600 text-sm"><?php echo esc_html( $case_item['result'] ); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </section>

            <!-- Process Flow -->
            <section class="mb-16">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">納品までの流れ</h2>

                <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-8">
                    <?php
                    $process_flow = [
                        [ 'step' => '1', 'title' => 'ご相談', 'description' => 'お電話またはお問い合わせフォームからご連絡ください' ],
                        [ 'step' => '2', 'title' => 'お打ち合わせ', 'description' => '当社営業がヒアリングに伺い、最適なご提案をいたします' ],
                        [ 'step' => '3', 'title' => 'お見積もり', 'description' => 'お打ち合わせ内容をもとに、お見積もりを算出します' ],
                        [ 'step' => '4', 'title' => '調達', 'description' => 'お客様のニーズに合わせて、製品を調達します' ],
                        [ 'step' => '5', 'title' => '加工・組付け', 'description' => '調達した製品を設計・加工、必要に応じて組付けも行います' ],
                        [ 'step' => '6', 'title' => '検品', 'description' => '専任の検査員がすべての製品に対して検査を行います' ],
                        [ 'step' => '7', 'title' => '納品', 'description' => '品質を保証した製品をお客様にお届けします' ],
                    ];

                    foreach ( $process_flow as $item ) {
                        ?>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-ymd-blue text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-4">
                                <?php echo esc_html( $item['step'] ); ?>
                            </div>
                            <h3 class="font-bold text-gray-900 mb-2"><?php echo esc_html( $item['title'] ); ?></h3>
                            <p class="text-gray-600 text-sm"><?php echo esc_html( $item['description'] ); ?></p>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </section>

            <div class="text-center">
                <a href="<?php echo esc_url( site_url( '/contact' ) ); ?>" class="inline-block bg-ymd-accent hover:bg-red-600 text-white font-bold py-3 px-6 rounded mr-4">
                    お問い合わせ
                </a>
                <a href="<?php echo esc_url( site_url( '/quality' ) ); ?>" class="inline-block border-2 border-ymd-blue text-ymd-blue hover:bg-ymd-blue hover:text-white font-bold py-3 px-6 rounded">
                    品質管理について
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
