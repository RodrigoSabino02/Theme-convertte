<?php

add_action('after_setup_theme', 'convertte_theme_setup');
function convertte_theme_setup(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

}

add_action('wp_enqueue_scripts', 'convertte_theme_scripts');
function convertte_theme_scripts(){
    wp_enqueue_style('components', get_template_directory_uri() . '/assets/css/components.css');
    wp_enqueue_style('mem', get_template_directory_uri() . '/assets/css/mem-c1ad69.css');
    wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css');

    wp_enqueue_script('javascript', get_template_directory_uri() . '/assets/js/mem-c1ad69.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'convertte_theme_scripts');

require get_template_directory() . '/custom_post_type/noticias.php';
require get_template_directory() . '/custom_post_type/podcasts.php';
require get_template_directory() . '/custom_post_type/mimos.php';
require get_template_directory() . '/custom_post_type/slider.php';


?>