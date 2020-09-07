<?php
/*
* Template Name: Page d'articles
*/
?>
<?php get_header(); ?>
<section class="page-title" style="background-image:url(images/background/12.jpg)">
		<div class="pattern-layer" style="background-image: url(images/background/pattern-5.png)"></div>
    	<div class="auto-container">
			<h2>Blog</h2>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Sidebar Page Container -->
	<?php while (have_posts()) : the_post(); ?>
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
				
				<!-- Content Side -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                	<div class="our-blogs">
						
					<?php $articles = _tg_get_objects(); ?>
					<?php if ($articles->have_posts()) : ?>
						<div class="news-block-five">
						<?php while ($articles->have_posts()) : $articles->the_post(); ?>
							<div class="inner-box">
								<div class="image">
									<a href="<?php the_permalink() ?>"><img src="<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'large') : TG_IMG . 'placeholder.jpg' ?>" alt="<?php the_title() ?>" alt="" /></a>
								</div>
								<div class="lower-content">
									<ul class="post-meta">
										<li><span class="icon far fa-calendar-check"></span>April 28, 2019</li>
										<li><span class="icon fas fa-user"></span><?php the_author(); ?></li>
										<li><span class="icon "></span>10 Commentaires</li>
									</ul>
									<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
									<div class="text"><?php the_content(); ?></div>
									<a href="<?php the_permalink() ?>" class="theme-btn btn-style-three"><span class="txt">Continue Reading</span></a>
								</div>
							</div>
					    <?php endwhile;  wp_reset_postdata(); ?>
						</div>
					<?php endif; ?>
					
						
						
						<!-- Post Share Options -->
						<div class="pagination-outer text-center">
							<div class="styled-pagination">
								<ul class="clearfix">
									
									<?php
                                            $big = 999999999;
                                            $args = [
                                                    'base'  => str_replace($big, '%#%', esc_url( get_pagenum_link($big))),
                                                    'total' => $news->max_num_pages,
                                                    'current'   => max(1, get_query_var('paged')),
                                                    'format'    => '?paged=%#%',
                                                    'show_all'  => false,
                                                    'type'      => 'array',
                                                ];
                                            $pagination = paginate_links($args);
                                            if( is_array( $pagination ) ) {
                                                echo '<ul class="nav-links">';
                                                foreach ( $pagination as $p ) {
                                                    echo "<li>$p</li>";
                                                }
                                                echo '</ul>';
                                            }
                                        ?>
									
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
								<?php get_search_form(); ?>
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
	<?php endwhile; ?>
<?php get_footer(); ?>