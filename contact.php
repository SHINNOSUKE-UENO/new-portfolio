<?php
    /*
        Template Name: コンタクトページ
    */
?>

<?php get_header(); ?>

<main>
    <div class="contact-rapper container">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
</main>

<?php get_footer(); ?>