<?php get_header(); ?>

<main>
    <div class="top-wrapper">
        <div class="img-scale">
            <img src="<?php echo esc_url(get_theme_file_uri('image/min/pf-トップ画面.png')) ?>" alt="神社と空の風景">
        </div>
    </div>
    <div class="profile-wrapper container">
        <h2 class="subtitle">
            <img src="<?php echo esc_url(get_theme_file_uri('image/min/pf-見出し_Profile.png')) ?>" alt="Profile">
        </h2>
        <div class="profile-box">
            <div class="text-btn">
                <div class="profile-text-group">
                    <div class="profile-text">
                        <h3>NAME</h3>
                        <p class="colon"> : </p>
                        <p class="text-contents">植野　晋之介</p>
                    </div>
                    <div class="profile-text">
                        <h3>AGE</h3>
                        <p class="colon"> : </p>
                        <p class="text-contents">25</p>
                    </div>
                    <div class="profile-text">
                        <h3>MOTTO</h3>
                        <p class="colon"> : </p>
                        <p class="text-contents">為せば成る</p>
                    </div>
                </div>
                <a href="<?php echo esc_url(home_url('/profile')) ?>" class="button"><img src="<?php echo esc_url(get_theme_file_uri('image/min/pf-ボタン2.png')) ?>"></a>
            </div>
            <div class="profile-img">
                <img src="<?php echo esc_url(get_theme_file_uri('image/min/pf-profile_img.png')) ?>" alt="プロフィール画面">
            </div>
        </div>
    </div>
    <div class="skill-wrapper container">
        <h2 class="subtitle">
            <img src="<?php echo esc_url(get_theme_file_uri('image/min/pf-見出し_SKill.png')) ?>" alt="Skill">
        </h2>
        <div class="skill-group">
            <div class="skill-box">
                <div class="skill-image">
                    <img src="<?php echo esc_url(get_theme_file_uri('image/min/pf-frontend_Ai.svg')) ?>" alt="コーディング">
                </div>
                <div class="skill-text">
                    <h3>コーディング</h3>
                    <p>
                        サイト制作に必要な、基本的なコーディングができます。<br>
                        閲覧しやすい、スマートなWebサイトを制作致します。<br>
                        また、多角的なSEO対策も行っております。<br>
                    </p>
                </div>
            </div>
            <div class="skill-box">
                <div class="skill-image">
                    <img src="<?php echo esc_url(get_theme_file_uri('image/min/pf-wp_Logo.png')) ?>" alt="ワードプレスロゴ">
                </div>
                <div class="skill-text">
                    <h3>ワードプレス化</h3>
                    <p>
                        静的なHTMLサイトをワードプレス化できます。<br>
                        プラグインとの組み合わせによって、<br>
                        より自由かつ安全なWebサイトをご提供いたします。<br>
                    </p>
                </div>
            </div>
            <div class="skill-box">
                <div class="skill-image">
                    <img src="<?php echo esc_url(get_theme_file_uri('image/min/pf-design-Ai.svg')) ?>" alt="デザイン">
                </div>
                <div class="skill-text">
                    <h3>デザイン</h3>
                    <p>
                        簡単なデザインも手掛けております。<br>
                        イメージに沿った文字ロゴや画像加工を行います。<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-guide-wrapper container">
        <h2 class="subtitle">
            <img src="<?php echo esc_url(get_theme_file_uri('image/min/pf-見出し_Blog.png')) ?>" alt="Blog">
        </h2>
        <?php if(have_posts()): ?>
        <div class="blog-guide-group">
            <?php while(have_posts()): the_post(); ?>
                <?php
                    $cat = get_the_category();
                    $catname = $cat[0] -> cat_name;
                ?>
            <article class="blog-guide-box">
                <div class="blog-guide-img">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                </div>
                <p class="date"><?php the_time('Y/m/d'); ?></p>
                <p class="blog-guide-text">
                    <?php
                        if (mb_strlen(strip_tags(get_the_content()), 'UTF-8') > 80) {
                            $content = mb_substr(strip_tags(get_the_content()), 0, 80, 'UTF-8');
                            echo $content . '...';
                        } else {
                            echo strip_tags(get_the_content());
                        }
                    ?>
                </p>
                <div class="readmore"><a href="<?php the_permalink(); ?>">READ MORE</a></div>
            </article>
            <?php endwhile; ?>
        </div>
        <?php
            if (function_exists("pagination")) {
                pagination($wp_query -> max_num_pages);
            }
        ?>
    <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>