        <footer>
            <div class="footer-wrapper">
                <div class="footer-logo">
                    <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_theme_file_uri('image/min/pf-ロゴデザイン.png')); ?>" alt="Ueshi Portfolio"></a>
                </div>
                <div class="footer-contents">
                    <div class="sns-area">
                        <div class="sns-icon">
                            <a href="<?php echo esc_url('https://twitter.com/ochadaze'); ?>"><img src="<?php echo esc_url(get_theme_file_uri('image/min/pf-ツイッターアイコン.png')); ?>" alt="ツイッターアイコン"></a>
                        </div>
                        <div class="sns-icon">
                            <a href="<?php echo esc_url('https://pinterest.jp/ueshi0225'); ?>"><img src="<?php echo esc_url(get_theme_file_uri('image/min/pf-ピンタレストアイコン.png')); ?>" alt="ピンタレストアイコン"></a>
                        </div>
                        <div class="sns-icon">
                            <a href="<?php echo esc_url('https://www.instagram.com/ueshi_yoroshi'); ?>"><img src="<?php echo esc_url(get_theme_file_uri('image/min/pf-インスタアイコン.png')); ?>" alt="インスタアイコン"></a>
                        </div>
                    </div>
                    <ul class="site-map">
                        <li><a href="<?php echo esc_url(home_url()); ?>">トップ</a></li>
                        <li><a href="<?php echo esc_url(home_url('/profile')); ?>">自己紹介</a></li>
                        <li><a href="<?php echo esc_url(home_url('/category/column')); ?>">ブログ</a></li>
                        <li><a href="<?php echo esc_url(home_url('/works')); ?>">制作物</a></li>
                        <li><a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a></li>
                    </ul>
                </div>
                <p>&copy; Ueshi Portfolio</p>
            </div>
        </footer>

        <?php wp_footer(); ?>
    </body>
</html>