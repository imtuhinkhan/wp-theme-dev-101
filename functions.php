<?php 

function duatheme_bootstraping(){
    load_theme_textdomain('dtheme');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}
add_action( 'after_setup_theme', 'duatheme_bootstraping');

function duatheme_assets(){
    wp_enqueue_style( 'dtheme-style', get_stylesheet_uri());
    wp_enqueue_style( 'bootstap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    
}

add_action('wp_enqueue_scripts','duatheme_assets');