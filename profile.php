<?php
    /*
        Template Name: プロフィールページ
    */
?>

<?php get_header(); ?>

<main>
    <div class="profile-detail-wrapper container">
        <h2 class="subtitle">
            <img src="<?php echo esc_url(get_theme_file_uri('image/min/pf-見出し_Profile.png')); ?>" alt="プロフィールロゴ">
        </h2>
        <div class="detail-group">
            <div class="detail-img">
                <img src="<?php echo esc_url(get_theme_file_uri('image/min/pf-profile_img.png')); ?>" alt="プロフィール画像">
            </div>
            <div class="detail-text">
                <p>
                    京都生まれ、滋賀育ち。<br>
                    毎日、フロントエンドの勉強をしています。<br>
                    猫、印象派絵画、雑貨屋さんは好物。<br>
                </p>
            </div>
        </div>
    </div>
    <div class="hobby-wrapper container">
        <h2 class="subtitle">
            <img src="<?php echo esc_url(get_theme_file_uri('image/min/pf-見出し_Hobby.png')); ?>" alt="Hobby">
        </h2>
        <div class="hobby-area">
            <div class="hobby-block">
                <div class="hobby-logo">
                    <img src="<?php echo esc_url(get_theme_file_uri('image/min/文字ロゴ_筋.png')); ?>" alt="文字ロゴ「筋」">
                </div>
                <div class="hobby-text">
                    <div class="hobby-text-inner">
                        <p>
                            身体の健康のためにジムに通っています。<br>
                            好きな種目は胸部位、<br>
                            嫌いな種目は脚一択。<br>
                            ランニングも心掛けているけれど、<br>
                            好き勝手な食事生活のため腹周りがとれません。<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="hobby-block">
                <div class="hobby-logo">
                    <img src="<?php echo esc_url(get_theme_file_uri('image/min/文字ロゴ_神.png')); ?>" alt="文字ロゴ「神」">
                </div>
                <div class="hobby-text">
                    <div class="hobby-text-inner">
                        <p>
                            寺社仏閣の御朱印巡りをしています。<br>
                            辿り着くには労を要する場所を巡るのが好きです。<br>
                            和歌山は熊野那智大社から物語がスタート。<br>
                            1年で1冊のペースで溜まって来ています。<br>
                            心なしか、ご利益が日々の生活に表れているように感じます<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="hobby-block">
                <div class="hobby-logo">
                    <img src="<?php echo esc_url(get_theme_file_uri('image/min/文字ロゴ_珈.png')); ?>" alt="文字ロゴ「珈」">
                </div>
                <div class="hobby-text">
                    <div class="hobby-text-inner">
                        <p>
                            作業中/休息中問わずコーヒーを嗜みます。<br>
                            カフェで本格的な1杯も良し、<br>
                            市販のドリップも良し。。。<br>
                            牛乳のみのカフェ・ラテで飲むのがベスト。<br>
                            気分がリフレッシュされます。<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="hobby-block">
                <div class="hobby-logo">
                    <img src="<?php echo esc_url(get_theme_file_uri('image/min/文字ロゴ_映.png')); ?>" alt="文字ロゴ「映」">
                </div>
                <div class="hobby-text">
                    <div class="hobby-text-inner">
                        <p>
                            洋画を鑑賞するのが大好きです。<br>
                            マーティン・スコセッシ監督の入りの演出が好み。<br>
                            ホラーは私の専門外（笑）<br>
                            「タクシードライバー」の主人公のとった行動は<br>
                            すべて夢オチ説を未だに信じてやまない。<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="hobby-block">
                <div class="hobby-logo">
                    <img src="<?php echo esc_url(get_theme_file_uri('image/min/文字ロゴ_読.png')); ?>" alt="文字ロゴ「読」">
                </div>
                <div class="hobby-text">
                    <div class="hobby-text-inner">
                        <p>
                            ハートフルな小説を選んで読みます。<br>
                            映像では得られない、行間を読むことは<br>
                            いつも新鮮な感情を私に与えてくれます。<br>
                            コーヒーを片手に、仕事に疲れた時、<br>
                            自分の世界を読書を通して作り上げます。<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>