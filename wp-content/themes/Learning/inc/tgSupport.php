<?php

function tg_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'tg_setup');

add_image_size( 'togaly370x240', 370, 240, true );

register_nav_menus(array(
    'primary' => 'Menu principal',
));
