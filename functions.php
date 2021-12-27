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

function duatheme_register_sidebar(){
    register_sidebar( array(
        'name'          => __( 'Right Sidebar', 'duatheme' ),
        'id'            => 'sidebar-right',
        'description'   => __( 'Single Post Right Sidebar', 'duatheme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));

    register_sidebar( array(
        'name'          => __( 'Left Sidebar', 'duatheme' ),
        'id'            => 'sidebar-left',
        'description'   => __( 'Single Post Left Sidebar.', 'duatheme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));
    register_sidebar( array(
        'name'          => __( 'Left Footer', 'duatheme' ),
        'id'            => 'footer-left',
        'description'   => __( 'Left Footer.', 'duatheme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));

    register_sidebar( array(
        'name'          => __( 'Right Footer', 'duatheme' ),
        'id'            => 'footer-right',
        'description'   => __( 'Right Footer.', 'duatheme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));

    register_sidebar( array(
        'name'          => __( 'Center Footer', 'duatheme' ),
        'id'            => 'footer-center',
        'description'   => __( 'Left Footer.', 'duatheme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init','duatheme_register_sidebar');
