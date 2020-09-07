<?php

define('TG_IMG', get_template_directory_uri().'/assets/images/');

function _tg_get_objects(
	$post_type = 'post', 
	$nb = 3,
	$excludes = [], 
	$taxonomy = null, 
	$terms = null, 
	$orderby = 'date', 
	$order = 'DESC', 
	$paged = 1)
{
	$args = [
		'post_type' => $post_type,
		'posts_per_page' => $nb,
		'post__not_in' => $excludes,
		'orderby' => $orderby,
		'order' => $order,
		'paged' => $paged
	];

	if ($taxonomy) {
		$args['tax_query'][] = [
			'taxonomy' => $taxonomy,
			'field' => 'term_id',
			'terms' => $terms
		];
	}

	return new WP_Query($args);
}
