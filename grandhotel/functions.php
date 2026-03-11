<?php

function grandhotel_setup(){

add_theme_support('title-tag');
add_theme_support('post-thumbnails');

register_nav_menus(array(
'primary'=>'Main Menu'
));

}

add_action('after_setup_theme','grandhotel_setup');


function grandhotel_scripts(){

wp_enqueue_style(
'grandhotel-style',
get_stylesheet_uri()
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


function grandhotel_widgets(){

register_sidebar(array(
'name'=>'Sidebar',
'id'=>'sidebar-1',
'before_widget'=>'<div class="widget">',
'after_widget'=>'</div>'
));

}

add_action('widgets_init','grandhotel_widgets');


function grandhotel_rooms(){

register_post_type('rooms',array(

'labels'=>array(
'name'=>'Rooms',
'singular_name'=>'Room'
),

'public'=>true,
'has_archive'=>true,
'menu_icon'=>'dashicons-admin-home',

'supports'=>array(
'title','editor','thumbnail'
)

));

}

add_action('init','grandhotel_rooms');