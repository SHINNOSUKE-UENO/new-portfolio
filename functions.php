<?php

function my_enqueue_styles() {
    // google font
    wp_enqueue_style('Philosopher', '//fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap');
    // css
    wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), false, 'all');
    wp_enqueue_style('style', get_stylesheet_uri(), array('ress'), filemtime(get_theme_file_path('/style.css')), 'all');

    // js
    wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), array(), filemtime(get_theme_file_path('/js/main.js')), true);
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');

// アイキャッチの有効化
add_theme_support('post-thumbnails');

// 管理画面上にヴィジェットの設定メニューを表示
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'サイドバー',
        'id' => 'sidebar',
        'description' => 'サイドバーヴィジェット',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="side-title">',
        'after_title' => '</h3>'
    ));
}

// ページネーション
function pagination($pages = '', $range = 2) {
    $showitems = ($range * 2) + 1;

    // 現在のページ数
    global $paged;
    if(empty($paged)) {
        $paged = 1;
    }

    // 全ページ数
    if($pages == '') {
        global $wp_query;
        $pages = $wp_query -> max_num_pages;
        if(!$pages) {
            $pages = 1;
        }
    }

    // ページ数が2ページ以上の場合のみ、ページネーションを表示
    if(1 != $pages) {
        echo '<div class="pagination">';
        echo '<ul>';
        // 1ページ目でなければ、「前のページ」リンクを表示
        if($paged > 1) {
            echo '<li class"prev"><a href="' . esc_url(get_pagenum_link($paged - 1)) . '">前のページ</a></li>';
        }

        // ページ番号を表示（現在ページはリンクにしない）
        for ($i=1; $i <= $pages; $i++) {
            if (1 != $pages &&(!($i >= $paged + $range+1 || $i <= $paged-$range-1) || $pages <= $showitems)) {
                if ($paged == $i) {
                    echo '<li class="active">' .$i. '</li>';
                } else {
                    echo '<li><a href="' . esc_url(get_pagenum_link($i)) . '">' .$i. '</a></li>';
                }
            }
        }

        // 最終ページでなければ、「次のページ」リンクを表示
        if($paged <  $pages) {
            echo '<li class="next"><a href="' . esc_url(get_pagenum_link($paged + 1)) . '">次のページ</a></li>';
        }
        echo '</ul>';
        echo '</div>';
    }
}