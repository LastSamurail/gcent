<?php
$nb = get_field('blog_latest_nb');
$excludes = get_field('blog_latest_excludes');
$news = _tg_get_objects('post', $nb, $excludes);
?>
<?php if ($news->have_posts()) : ?>
	<?php while ($news->have_posts()) : $news->the_post() ; ?>
		<?php get_template_part('parts/content', 'post') ?>
	<?php endwhile; ?>
<?php endif; wp_reset_postdata(); ?>