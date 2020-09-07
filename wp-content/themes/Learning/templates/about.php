<?php
/*
* Template Name: Page à propos
*/
?>
<?php get_header(); ?>

<?php if (get_field('about_img')) : ?>
    <section class="page-title" style="background-image:url(<?php echo TG_IMG . 'images/background/10.jpg' ?>)">
        <div class="pattern-layer" style="background-image: url(<?php echo get_field('about_img')['url']; ?>)" alt="a PROPOS"></div>
        <div class="auto-container">
            <h2><?php the_field('about_title'); ?></h2>
        </div>
    </section>
<?php endif; ?>

<?php if (get_field('section_a_propos')) : ?>
    <section class="we-are-section">
        <div class="pattern-layer" style="background-image: url(images/background/pattern-6.png)"></div>
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image">
                            <img src="<?php echo get_field('section_img')['url']; ?>" alt="" />
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2><?php echo get_field('section_title'); ?></h2>
                        <div class="text">
                            <p><?php echo get_field('section_texte'); ?></p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Lower Section -->
            <div class="lower-section">
                <div class="row clearfix">
                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <h2><?php echo get_field('our_story_title'); ?></h2>
                        <div class="text">
                            <p><?php echo get_field('our_story_texte'); ?></p>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <h2>Notre Mission</h2>
                        <ul class="list-style-one">
                            <li>Mission 1. Replenish him third creature and meat blessed void a fruit.</li>
                            <li>Mission 2.Gathered you’re. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                            <li>Mission 3.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
    <?php if (have_rows('testimonials')) : ?>
        <section class="testimonial-section-three">
            <!-- Pattern Layer -->
            <div class="plant-one paroller" data-paroller-factor="0.40" data-paroller-factor-lg="0.20" data-paroller-type="foreground" data-paroller-direction="horizontal" style="background-image:url(<?php echo TG_IMG . 'images/resource/plant-1.png' ?>)"></div>
            <div class="plant-two paroller" data-paroller-factor="-0.40" data-paroller-factor-lg="-0.20" data-paroller-type="foreground" data-paroller-direction="horizontal" style="background-image:url(<?php echo TG_IMG . 'images/resource/plant-2.png' ?>)"></div>
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title-two light text-center">
                    <h2>Avis de nos clients</h2>
                </div>
                <div class="inner-container">

                    <div class="testimonial-carousel owl-carousel owl-theme">
                        <?php while (have_rows('testimonials')) : the_row(); ?>
                            <!-- Testimonial Block Two -->
                            <div class="testimonial-block-two style-two">
                                <div class="inner-box">
                                    <div class="author-info">
                                        <div class="info-inner">
                                            <div class="author-image">
                                                <div class="image">
                                                    <img src="<?php echo get_sub_field('testimonial_img')['url'] ?>" alt="" />
                                                </div>
                                            </div>
                                            <div class="author-name"><?php echo get_sub_field('testimonial_name') ?></div>
                                            <div class="designation">CEO, Cluster Design</div>
                                        </div>
                                    </div>
                                    <div class="text">“<?php echo get_sub_field('testimonial_message') ?>”</div>
                                    <div class="quote-icon flaticon-quote"></div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>


                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endwhile; ?>

<?php while (have_posts()) : the_post(); ?>
    <?php if (have_rows('partenaires')) : ?>
        <section class="clients-section style-two">
            <div class="auto-container">
                <div class="sec-title centered">
                    <h2>Nos partenaires</h2>
                </div>
                <div class="sponsors-outer">
                    <!--Sponsors Carousel-->
                    <ul class="sponsors-carousel owl-carousel owl-theme">
                        <?php while (have_rows('partenaires')) : the_row(); ?>
                            <li class="slide-item">
                                <figure class="image-box"><img src="<?php echo get_sub_field('partenaires_img')['url'] ?>" alt=""></figure>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>

            </div>
        </section>
    <?php endif; ?>
<?php endwhile; ?>

<?php get_footer(); ?>