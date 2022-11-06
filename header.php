<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo bloginfo('name'); ?></title>
        <meta name="description" content="<?php echo bloginfo('description'); ?>">
        <link rel="shortcut icon" href="<?php echo esc_url(get_theme_file_uri('image/min/pf-favicon.png')); ?>">

        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <div class="title-area">
                <?php $html_tag = (is_home() || is_front_page()) ? 'h1' : 'div'; ?>
                <<?php echo $html_tag; ?> class="site-title">
                    <a href="<?php echo esc_url(home_url()); ?>">
                        <img src="<?php echo esc_url(get_theme_file_uri('image/min/pf-ロゴデザイン.png')) ?>" alt="Ueshi Portfolio">
                    </a>
                </<?php echo $html_tag; ?>>
                <div class="drawer">
                    <div class="toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/profile')) ?>">About</a></li>
                    <li><a href="<?php echo esc_url(home_url('/works')); ?>">Works</a></li>
                    <li><a href="<?php echo esc_url(home_url('/category/column')); ?>">Blog</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
                </ul>
            </nav>
        </header>