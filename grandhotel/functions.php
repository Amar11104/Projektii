<?php

function grandhotel_setup(){

add_theme_support('title-tag');
add_theme_support('post-thumbnails');

register_nav_menus(array(
'main_menu' => 'Main Menu'
));

}

add_action('after_setup_theme','grandhotel_setup');

function grandhotel_scripts(){

wp_enqueue_style(
'grandhotel-main',
get_template_directory_uri().'/assets/css/main.css'
);

wp_enqueue_script(
'grandhotel-js',
get_template_directory_uri().'/assets/js/main.js',
array(),
false,
true
);

}

add_action('wp_enqueue_scripts','grandhotel_scripts');

?>