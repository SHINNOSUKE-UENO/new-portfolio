<?php get_header(); ?>

<main>
    <div class="blog-wrapper container">
        <h1 class="subtitle">
            <img src="<?php echo esc_url(get_theme_file_uri('image/min/pf-見出し_Blog.png')); ?>" alt="Blog">
        </h1>
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <?php
            $cat = get_the_category();
            $catname = $cat[0] -> cat_name;
        ?>
        <article class="blog-area">
            <h2 class="blog-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <p class="date"><?php the_time('Y/m/d'); ?></p>
            <div class="blog-thumbnail">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            </div>
            <div class="blog-text">
                <p>
                    <?php the_content(); ?>
                </p>
            </div>
        </article>
        <div class="readmore"><a href="<?php the_permalink(); ?>">READ MORE</a></div>
        <?php endwhile; ?>
        <?php
            if (function_exists("pagination")) {
                pagination($wp_query -> max_num_pages);
            }
        ?>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>