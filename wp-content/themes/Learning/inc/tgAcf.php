<?php

function acf_settings_path($path)
{
    $path = get_stylesheet_directory().'/inc/third-party/acf/';

    return $path;
}
add_filter('acf/settings/path', 'acf_settings_path');

function acf_settings_dir($dir)
{
    $dir = get_stylesheet_directory_uri().'/inc/third-party/acf/';

    return $dir;
}
add_filter('acf/settings/dir', 'acf_settings_dir');
add_filter('acf/settings/google_api_key', function () {
    return 'AIzaSyAQY3r3qlsF-OWQ7o5L6K2Dliu47Ju_-4Y';
});

include_once get_stylesheet_directory().'/inc/third-party/acf/acf.php';

//Hide in backend
//add_filter('acf/settings/show_admin', '__return_false');
