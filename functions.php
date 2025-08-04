<?php

add_theme_support('menus');



function register_theme_menu(){
    register_nav_menus(array(
        'Primary_menu'=>'primary menu'
    ));
}
add_action('init','register_theme_menu');

function custom_theme_scripts(){
    wp_enqueue_style('style',get_stylesheet_uri(),array(),'1.0');
    wp_enqueue_script('script',get_template_directory_uri().'/js/main.js',array(),'1.0');
}

add_action('wp_enqueue_scripts','custom_theme_scripts');




function custom_footer_message() {
    echo '<p style="text-align:center; color:gray;">Thanks for visiting our site!</p>';
}

add_action('wp_footer', 'custom_footer_message');



function make_title_uppercase($title) {
    return strtoupper($title);
}
    add_filter('the_title', 'make_title_uppercase');

    
?>