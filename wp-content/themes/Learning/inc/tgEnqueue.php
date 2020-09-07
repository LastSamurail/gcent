<?php

function tg_scripts()
{
    wp_enqueue_style('BS4', get_template_directory_uri().'/assets/css/bootstrap.css', [], '');
    wp_enqueue_style('Main', get_template_directory_uri().'/assets/css/main.css', [], '');
    wp_enqueue_style('Responsive', get_template_directory_uri().'/assets/css/responsive.css', [], '');
    wp_enqueue_style('Fonts', 'https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fira+Sans:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@100;300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;600;700;800&family=Oswald:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700;800;900&family=Poppins:wght@100;300;400;500;600;700;800;900&family=Roboto+Condensed:wght@300;400;700&family=Roboto:wght@100;300;400;500;700;900&display=swap', [], '');
   
	wp_enqueue_script('Popper', get_template_directory_uri().'/assets/js/popper.min.js', ['jquery'], '', true);
	wp_enqueue_script('BS4', get_template_directory_uri().'/assets/js/bootstrap.min.js', ['jquery'], '', true);
	wp_enqueue_script('mscrollbar', get_template_directory_uri().'/assets/js/jquery.mCustomScrollbar.concat.min.js', ['jquery'], '', true);
	wp_enqueue_script('Fancy', get_template_directory_uri().'/assets/js/jquery.fancybox.js', ['jquery'], '', true);
	wp_enqueue_script('Appear', get_template_directory_uri().'/assets/js/appear.js', ['jquery'], '', true);
	wp_enqueue_script('Owl', get_template_directory_uri().'/assets/js/owl.js', ['jquery'], '', true);
	wp_enqueue_script('wow', get_template_directory_uri().'/assets/js/wow.js', ['jquery'], '', true);
	wp_enqueue_script('parallax', get_template_directory_uri().'/assets/js/parallax.min.js', ['jquery'], '', true);
	wp_enqueue_script('tilt', get_template_directory_uri().'/assets/js/tilt.jquery.min.js', ['jquery'], '', true);
	wp_enqueue_script('paroller', get_template_directory_uri().'/assets/js/jquery.paroller.min.js', ['jquery'], '', true);
	wp_enqueue_script('mixit', get_template_directory_uri().'/assets/js/mixitup.js', ['jquery'], '', true);
	wp_enqueue_script('script', get_template_directory_uri().'/assets/js/script.js', ['jquery'], '', true);
}

add_action('wp_enqueue_scripts', 'tg_scripts');
