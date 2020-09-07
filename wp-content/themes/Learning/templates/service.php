<?php
/*
* Template Name: Page de service
*/
?>
<?php get_header(); ?>
<?php if (get_field('service_banner')) : ?>
    <section class="page-title" style="background-image:url(<?php echo TG_IMG .'images/background/10.jpg' ?>)">
        <div class="pattern-layer" style="background-image: url(<?php echo get_field('banner_img')['url'] ?>)"></div>
        <div class="auto-container">
            <h2><?php the_field('banner_title')?></h2>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>

<?php if (get_field('section_a_propos')) : ?>
    <section class="we-are-section">
		<div class="pattern-layer" style="background-image: url(<?php echo TG_IMG . 'icons/dotted-pattern-6.png' ?>)"></div>
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
							<p><?php echo get_field('section_text'); ?></p>
						</div>
					</div>
				</div>
				
			</div>
            
            
			<!-- Lower Section -->
			<div class="lower-section">
				<div class="row clearfix">
					<!-- Column -->
					<div class="column col-lg-6 col-md-12 col-sm-12">
						<h2>Our History</h2>
						<div class="text">
							<p>Replenish him third creature and meat blessed void a fruit gathered you’re. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
						</div>
					</div>
					<!-- Column -->
					<div class="column col-lg-6 col-md-12 col-sm-12">
						<h2>Our Mission</h2>
						<ul class="list-style-one">
							<li>Replenish him third creature and meat blessed void a fruit.</li>
							<li>Gathered you’re. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
							<li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</li>
						</ul>
					</div>
				</div>
			</div>
			
		</div>
	</section>
    <?php endif; ?>