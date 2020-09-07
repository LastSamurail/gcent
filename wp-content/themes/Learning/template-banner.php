<?php
/*
* Template Name: Page avec bannière
* Template Post Type: page, post
*/
?>
<?php get_header(); ?>

    <?php if (get_field('about_img')) : ?>
        <section class="page-title" style="background-image:url(<?php echo TG_IMG .'images/background/10.jpg' ?>)">
            <div class="pattern-layer" style="background-image: url(<?php echo get_field('about_img')['url']; ?>)"  alt="a PROPOS"></div>
            <div class="auto-container">
                <h2><?php the_field('about_title'); ?></h2>
            </div>
        </section>
    <?php endif; ?>


<?php get_footer(); ?>