<?php
/**
 * The front page template file
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero-gradient text-white py-20 relative overflow-hidden">
    <!-- 背景動画 -->
    <video
        class="absolute inset-0 w-full h-full object-cover z-0"
        src="<?php echo get_template_directory_uri(); ?>/img/fuji-top.mp4"
        autoplay
        muted
        loop
        playsinline
    ></video>
    <!-- 背景テキスト -->
    <div class="absolute inset-0 opacity-10 z-10">
        <div class="sliding-text whitespace-nowrap text-6xl font-light">
            藤工業株式会社 Fujikogyo Inc. 藤工業株式会社 Fujikogyo Inc. 藤工業株式会社 Fujikogyo Inc.
        </div>
    </div>
    <div class="container mx-auto px-4 relative z-20">
        <div class="max-w-4xl mx-auto text-center fade-in">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                機械加工の最適解は、
                <br />
                <span class="text-ymd-accent font-inter"><?php echo esc_html( FUJI_COMPANY_NAME ); ?></span>
            </h1>

            <p class="text-xl md:text-2xl mb-4 font-light leading-relaxed">
                各種治工具、超硬合金、セラミック、PCDの設計、製造、販売を通じて、
                <br />
                モノづくりを動かす原動力となる、それが藤工業株式会社です。
            </p>

            <p class="text-lg mb-8 opacity-90">
                センターレスブレード、機械工具部品、耐磨治工具、レースセンターなど、
                <br />
                お客様の多様なニーズに応えるオーダーメイドの製品を提供します。
            </p>

        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-16 section-gradient">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <p class="text-ymd-blue text-sm font-medium tracking-wide uppercase mb-4 font-inter">
                    FEATURE
                </p>
                <h2 class="text-4xl font-bold text-gray-900">藤工業の強み</h2>
            </div>

            <div class="space-y-16">
                <!-- Feature 1 -->
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <img
                            src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400"
                            alt="オーダーメイド部品"
                            class="rounded-xl shadow-lg"
                        />
                    </div>
                    <div>
                        <span class="text-ymd-blue font-bold text-lg font-inter">FEATURE01</span>
                        <h3 class="text-3xl font-bold mb-6">
                            オーダーメイド部品で
                            <br />
                            実現する多様なニーズ
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            当社の部品は99％がオーダーメイドです。お客様のご要望はもちろん、時にはニーズを先回りして当社からご提案いたします。世界で唯一作れる部品もあり、細やかな対応で高い評価をいただいています。
                        </p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="order-2 md:order-1">
                        <span class="text-ymd-blue font-bold text-lg font-inter">FEATURE02</span>
                        <h3 class="text-3xl font-bold mb-6">
                            豊富な
                            <br />
                            国内外ネットワークで
                            <br />
                            「最適調達」を叶える
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            中国、韓国、ベトナム、スウェーデンなど国内外100社以上の調達先を持ち、上海には協力工場を保有しています。海外でも技術と調達力を磨き、様々なご要望に対して迅速な対応が可能です。
                        </p>
                    </div>
                    <div class="order-1 md:order-2">
                        <img
                            src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400"
                            alt="国際ネットワーク"
                            class="rounded-xl shadow-lg"
                        />
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <img
                            src="https://images.unsplash.com/photo-1587293852726-70cdb56c2866?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400"
                            alt="品質検査体制"n                            class="rounded-xl shadow-lg"
                        />
                    </div>
                    <div>
                        <span class="text-ymd-blue font-bold text-lg font-inter">FEATURE03</span>
                        <h3 class="text-3xl font-bold mb-6">
                            「最良品質」を保証する
                            <br />
                            徹底した検査体制
                        </h3>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            最適調達された製品は、徹底した品質管理方針に則り、専任の検査員が原則全数検査します。豊富な設備と経験豊富な目で品質を保証しています。
                        </p>
                        <a href="<?php echo esc_url( site_url( '/quality' ) ); ?>" class="text-ymd-blue font-medium hover:text-blue-700 p-0">
                            品質管理について →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <p class="text-ymd-blue text-sm font-medium tracking-wide uppercase mb-4 font-inter">
                    OUR MISSION
                </p>
                <h2 class="text-4xl font-bold text-gray-900 mb-8">
                    お客様のモノづくりを支える
                    <br />
                    PCD・超硬・セラミック工具・治具の専門家
                </h2>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <p class="text-lg leading-relaxed mb-6">
                        私たちは、PCD（焼結ダイヤモンド）、超硬、セラミックといった特殊素材を用いた
                        <br />
                        耐摩耗工具・治具の設計、製造、販売を一貫して手掛けています。
                    </p>

                    <p class="text-lg leading-relaxed mb-6">
                        長年の経験で培われた高精度加工技術と、お客様のニーズに応える柔軟な対応力で、
                        <br />
                        多岐にわたる産業分野の課題解決に貢献しています。
                    </p>

                    <p class="text-base text-gray-600 leading-relaxed">
                        国内だけでなく、海外にもコネクションを広げ、調達ネットワークはさらに拡大中。
                        <br />
                        すべては、お客様のビジネスを前進させ、最大の満足度をお届けするために。
                        <br />
                        これからも挑戦と進化を続けます。
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <img
                        src="https://images.unsplash.com/photo-1565814329452-e1efa11c5b89?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=300"
                        alt="精密加工機械"
                        class="rounded-lg shadow-md"
                    />
                    <img
                        src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=300"
                        alt="CNC加工作業"
                        class="rounded-lg shadow-md"
                    />
                    <img
                        src="https://images.unsplash.com/photo-1587293852726-70cdb56c2866?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=300"
                        alt="品質検査"
                        class="rounded-lg shadow-md"
                    />
                    <img
                        src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=300"
                        alt="工場ライン"
                        class="rounded-lg shadow-md"
                    />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Products Showcase Section -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <p class="text-ymd-blue text-sm font-medium tracking-wide uppercase mb-4 font-inter">
                    PRODUCTS
                </p>
                <h2 class="text-4xl font-bold text-gray-900">取り扱い製品</h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <?php
                $products_showcase = [
                    [
                        'id' => '01',
                        'title' => 'オーダーメイド部品',
                        'description' => '精密部品・金型部品・組付部品などをオーダーメイドでご提供します。',
                        'image' => 'https://images.unsplash.com/photo-1587293852726-70cdb56c2866?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=250',
                        'color' => 'bg-ymd-blue',
                    ],
                    [
                        'id' => '02',
                        'title' => '生産設備',
                        'description' => '専用機・自動化設備・省力化設備など生産や加工の効率化を支援する設備をご提供します。',
                        'image' => 'https://images.unsplash.com/photo-1581094288338-2314dddb7ece?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=250',
                        'color' => 'bg-ymd-accent',
                    ],
                    [
                        'id' => '03',
                        'title' => 'その他の部品',
                        'description' => '板ばねやスプリング、座金、バイクパーツなど様々な分野の部品をご提供します。',
                        'image' => 'https://images.unsplash.com/photo-1565814329452-e1efa11c5b89?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=250',
                        'color' => 'bg-green-600',
                    ],
                ];

                foreach ( $products_showcase as $product ) {
                    ?>
                    <div class="card-hover bg-white rounded-xl shadow-lg overflow-hidden">
                        <div class="p-2 <?php echo esc_attr( $product['color'] ); ?> text-white text-center font-bold text-lg">
                            <?php echo esc_html( $product['id'] ); ?>
                        </div>
                        <img
                            src="<?php echo esc_url( $product['image'] ); ?>"
                            alt="<?php echo esc_attr( $product['title'] ); ?>"
                            class="w-full h-48 object-cover"
                        />
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-4"><?php echo esc_html( $product['title'] ); ?></h3>
                            <p class="text-gray-600"><?php echo esc_html( $product['description'] ); ?></p>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
