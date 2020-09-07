<?php
$nb = get_field('blog_custom_nb');
$terms = get_field('blog_custom_tax');
$tax = get_field('blog_custom_tax') ? 'category' : null;
$excludes = get_field('blog_custom_exludes');
$orderby = get_field('blog_custom_order_by');
$order = get_field('blog_custom_order');
$news = _tg_get_objects('post', $nb, $excludes, $tax, $terms, $orderby, $order);
?>
<?php if ($news->have_posts()) : ?>
	<?php while ($news->have_posts()) : $news->the_post() ; ?>
		<?php get_template_part('parts/content', 'post') ?>
	<?php endwhile; ?>
<?php endif; wp_reset_postdata(); ?>