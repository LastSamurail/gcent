
<?php get_header(); ?>

<?php if (get_field('about_img')) : ?>
    <section class="page-title" style="background-image:url(<?php echo TG_IMG . 'images/background/10.jpg' ?>)">
        <div class="pattern-layer" style="background-image: url(<?php echo get_field('about_img')['url']; ?>)" alt="a PROPOS"></div>
        <div class="auto-container">
            <h2><?php the_field('about_title'); ?></h2>
        </div>
    </section>
<?php endif; ?>

<section class="page-title" style="background-image:url(images/background/15.jpg)">
    <div class="pattern-layer" style="background-image: url(images/background/pattern-5.png)"></div>
    <div class="auto-container">
        <h2>Blog Detail</h2>
    </div>
</section>

<?php if (have_posts()) : ?>
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">


                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="our-blogs">

                        <?php while (have_posts()) : the_post(); ?>
                            <div class="news-block-five">
                                <div class="inner-box">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div class="image">
                                            <a href="blog-detail.html">
                                                <img src="<?php the_post_thumbnail('',  ['class' => 'img-fluid w-100']); ?>" alt="a propos" />
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    <div class="lower-content">
                                        <ul class="post-meta">
                                            <li><span class="icon far fa-calendar-check"></span>Publié le <?php the_time('d-m-Y'); ?></li>
                                            <li><span class="icon fas fa-user"></span>Par <?php the_author() ?></li>
                                            <li><span class="icon "></span>10 Comment</li>
                                        </ul>
                                        <h3><a href="blog-detail.html"><?php the_title() ?></h3>
                                        <div class="text"><?php the_content() ?></div>
                                        <a href="blog-detail.html" class="theme-btn btn-style-three"><span class="txt">Continue Reading</span></a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php if(comments_open() || get_comments_number()){
                            comments_template();
                        } ?>


                        <!-- Post Share Options -->
                        <div class="pagination-outer text-center">
                            <div class="styled-pagination">
                                <ul class="clearfix">
                                    <li class="prev"><a href="#">Prev &ensp; </a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li class="active"><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li class="next"><a href="#">&ensp; Next</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Sidebar Side -->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar sticky-top">

                        <!-- Search -->
                        <div class="sidebar-widget search-box">
                            <div class="widget-content">
                                <?php get_search_form()?>
                            </div>
                        </div>

                        <!-- Categories Widget -->
                        <div class="sidebar-widget categories-widget">
                            <div class="widget-content">
                                <div class="sidebar-title">
                                    <h3>Categories</h3>
                                </div>
                                <ul>
                                    <li><a href="#">Restaurant Article</a></li>
                                    <li><a href="#">Barber Services</a></li>
                                    <li><a href="#">GYM Services Center</a></li>
                                    <li><a href="#">Computer Vision</a></li>
                                    <li><a href="#">Know Market Places</a></li>
                                    <li><a href="#">Digital Agency</a></li>
                                    </li>
                            </div>
                        </div>

                        <!-- Popular Widget -->
                        <div class="sidebar-widget popular-posts">
                            <div class="widget-content">
                                <div class="sidebar-title">
                                    <h3>Related Posts</h3>
                                </div>
                                <div class="post-outer">

                                    <article class="post">
                                        <div class="post-inner">
                                            <figure class="post-thumb"><img src="images/resource/post-thumb-1.jpg" alt=""><a href="blog-single.html" class="overlay-box"></a></figure>
                                            <div class="text"><a href="blog-detail.html">Anticipated Report For NLP</a></div>
                                            <div class="clearfix">
                                                <div class="pull-left">
                                                    <div class="admin">Admin</div>
                                                </div>
                                                <div class="pull-right">
                                                    <div class="post-date">26 Jun 2018</div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="post">
                                        <div class="post-inner">
                                            <figure class="post-thumb"><img src="images/resource/post-thumb-2.jpg" alt=""><a href="blog-single.html" class="overlay-box"></a></figure>
                                            <div class="text"><a href="blog-detail.html">Anticipated Report For NLP</a></div>
                                            <div class="clearfix">
                                                <div class="pull-left">
                                                    <div class="admin">Admin</div>
                                                </div>
                                                <div class="pull-right">
                                                    <div class="post-date">26 Jun 2018</div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="post">
                                        <div class="post-inner">
                                            <figure class="post-thumb"><img src="images/resource/post-thumb-3.jpg" alt=""><a href="blog-single.html" class="overlay-box"></a></figure>
                                            <div class="text"><a href="blog-detail.html">Anticipated Report For NLP</a></div>
                                            <div class="clearfix">
                                                <div class="pull-left">
                                                    <div class="admin">Admin</div>
                                                </div>
                                                <div class="pull-right">
                                                    <div class="post-date">26 Jun 2018</div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>

                                </div>
                            </div>
                        </div>

                        <!-- Tags Widget -->
                        <div class="sidebar-widget tags-widget">
                            <div class="widget-content">
                                <div class="sidebar-title">
                                    <h3>Tags</h3>
                                </div>
                                <ul>
                                    <li><a href="#">Apps</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Development</a></li>
                                    <li><a href="#">Artificial</a></li>
                                    <li><a href="#">Learning</a></li>
                                    <li><a href="#">Apps</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Development</a></li>
                                    <li><a href="#">Artificial</a></li>
                                    <li><a href="#">Learning</a></li>
                                    </li>
                            </div>
                        </div>

                        <!-- Categories Widget -->
                        <div class="sidebar-widget categories-widget">
                            <div class="widget-content">
                                <div class="sidebar-title">
                                    <h3>Archives</h3>
                                </div>
                                <ul>
                                    <li><a href="#">January 2019</a></li>
                                    <li><a href="#">August 2018</a></li>
                                    <li><a href="#">February 2017</a></li>
                                    <li><a href="#">March 2016</a></li>
                                    <li><a href="#">May 2015</a></li>
                                    </li>
                            </div>
                        </div>

                    </aside>
                </div>

            </div>
        </div>
    </div>
<?php endif; ?>

<?php get_footer(); ?>