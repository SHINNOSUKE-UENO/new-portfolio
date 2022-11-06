<?php
    /*
        Template Name: ワークスページ
    */
?>

<?php get_header(); ?>

<main>
    <div class="works-wrapper container">
        <h1 class="subtitle">
            <img src="<?php echo esc_url(get_theme_file_uri('image/min/pf-見出し_Works.png')); ?>" alt="works">
        </h1>
        <div class="works-group">
            <div class="works-block">
                <div class="work-img">
                    <a href="<?php echo esc_url('https://macarontree.com/') ?>"><img src="<?php echo esc_url(get_theme_file_uri('image/min/macarontree-First_View.png')); ?>" alt="マカロンツリー"></a>
                </div>
                <div class="works-detail">
                    <h2>マカロンツリー</h2>
                    <p>
                        母が制作した刺繍小物の情報Webサイト<br>
                        作品の優しいイメージを掴んで頂けるよう、<br>
                        写真イメージを豊富に掲載しました。<br>
                        主な販売/問い合わせツールがインスタグラムなので、<br>
                        直接ジャンプできるページを設けております。<br>
                    </p>
                </div>
            </div>
            <div class="works-block">
                <div class="work-img">
                    <img src="<?php echo esc_url(get_theme_file_uri('image/min/portfolio-First_View.png')); ?>" alt="ポートフォリオ">
                </div>
                <div class="works-detail">
                    <h2>Ueshi Portfolio (このサイト)</h2>
                    <p>
                        私自身とともに成長し続けるWebサイト<br>
                        同じ業界で働く方々とのコミュニティ作りを目的して<br>
                        当Webサイトの制作にあたりました。<br>
                        「シンプルで、見やすい」を意識しております。<br>
                    </p>
                </div>
            </div>
            <div class="works-block">
                <div class="work-img">
                    <a href="<?php echo esc_url('https://kindness-coffee.net/') ?>"><img src="<?php echo esc_url(get_theme_file_uri('image/min/KDCafe-First_View.png')); ?>" alt="KDCafe"></a>
                </div>
                <div class="works-detail">
                    <h2>KindNess-Coffee (架空のサイト)</h2>
                    <p>
                        架空のカフェサイト<br>
                        「ゆったりと休日を過ごせるようなカフェ空間」が<br>
                        当サイトのメインテーマ。<br>
                        ワンポイントのデザインで全体を装飾しています。<br>
                        またPHPを用いてお問い合わせフォームを作成しています。<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>