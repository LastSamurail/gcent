<?php
/*
* Template Name: Page d'accueil
*/
?>
<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <?php if (have_rows('slides')) : ?>
        <section class="main-slider-two">
            <div class="main-slider-carousel owl-carousel owl-theme">
                <?php while (have_rows('slides')) : the_row(); ?>
                    <div class="slide">
                        <div class="image-layer" style="background-image:url(<?php echo get_sub_field('slide_img')['url'] ?>)"></div>
                        <div class="auto-container">
                            <div class="content-boxed">
                                <div class="inner-boxed">
                                    <?php if (get_sub_field('slide_texte')) : ?>
                                        <h1><?= get_sub_field('slide_texte'); ?></h1>
                                    <?php endif; ?>
                                    <?php if (get_sub_field('slide_link')) : ?>
                                        <div class="button-box">
                                            <a href="<?php echo get_sub_field('slide_link')['url']; ?>" class="theme-btn btn-style-two">
                                                <span class="txt"><?php echo get_sub_field('slide_link')['title'] ? get_sub_field('slide_link')['title'] : 'En savoir plus'; ?> <i class="fa fa-angle-right"></i></span></a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </section>
    <?php endif; ?>

    <!-- Featured Section -->
    <section class="featured-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="sec-title-two centered">
                    <h2>Nos domaines d'activité</h2>
                </div>
                <div class="pattern-layer-one" style="background-image: url(images/icons/dotted-pattern-5.png)"></div>
                <div class="clearfix">

                    <!-- Feature Block -->
                    <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon flaticon-brand"></span>
                            </div>
                            <h3><a href="service-detail.html">Marketing <br> Digital</a></h3>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon flaticon-app-design"></span>
                            </div>
                            <h3><a href="service-detail.html">Applications <br> Mobile</a></h3>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInRight" data-wow-delay="150ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon flaticon-data"></span>
                            </div>
                            <h3><a href="service-detail.html">Application/Sites  <br> Web</a></h3>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon flaticon-shout"></span>
                            </div>
                            <h3><a href="service-detail.html">Formations<br></a></h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Section -->


    <?php if (get_field('ce_quon_fait')) : ?>
        <section class="we-do-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="image-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="pattern-layer-one" style="background-image: url(<?php echo TG_IMG . 'icons/dotted-pattern-5.png' ?>)"></div>
                            <div class="image" data-tilt data-tilt-max="4">
                                <img src="<?php echo get_field('section_img')['url']; ?>" alt="a PROPOS" />
                            </div>
                        </div>
                    </div>

                    <div class="content-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <h2><?php the_field('section_title'); ?></h2>
                            <div class="text"><?php the_field('section_content'); ?></div>
                            <?php if (get_field('section_link')) : ?>
                                <a href="<?php echo get_field('section_link')['url'] ?>" class="theme-btn btn-style-two">
                                    <span class="txt">
                                        <?php echo get_field('section_link')['title'] ? get_field('section_link')['title'] : 'En savoir plus'; ?> <i class="fa fa-angle-right"></i>
                                    </span>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if (get_field('section_chiffres')) : ?>
        <section class="counter-section">
            <div class="auto-container">


                <div class="fact-counter">
                    <div class="row clearfix">


                        <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="2500" data-stop="<?php the_field('nombre_age'); ?>">0</span>+
                                    </div>
                                    <h4 class="counter-title">Ans d'existance</h4>
                                </div>
                            </div>
                        </div>


                        <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                            <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="count-outer count-box alternate">
                                        <span class="count-text" data-speed="4000" data-stop="<?php the_field('nombre_membre'); ?>">0</span>
                                    </div>
                                    <h4 class="counter-title">Membres dans le monde</h4>
                                </div>
                            </div>
                        </div>


                        <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                            <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="5000" data-stop="<?php the_field('nombre_projet'); ?>">0</span>
                                    </div>
                                    <h4 class="counter-title">Projets réalisés</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if (get_field('display_blog')) : ?>

        <section class="news-section">
            <div class="auto-container">
                <div class="sec-title-two centered">
                    <h2><?php the_field('blog_title'); ?></h2>
                </div>

                <div class="inner-container">
                    <div class="pattern-layer-one" style="background-image: url(<?php echo TG_IMG . 'icons/dotted-pattern-5.png' ?>)"></div>
                    <div class="row clearfix">
                        <?php $source = get_field('blog_source'); ?>

                        <?php get_template_part('parts/home/content', $source); ?>
                    </div>
                </div>
            </div>
            <div class="btn-box text-center">
        <a href="#" class="theme-btn btn-style-two"><span class="txt">View All Blogs <i class="fa fa-angle-right"></i></span></a>
    </div>
        </section>

    <?php endif; ?>

    

<?php endwhile; ?>


<?php get_footer(); ?>