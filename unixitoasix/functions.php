<?php

function unixitoasix_setup() {

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

register_nav_menus(array(
    'header-menu' => 'Header Menu',
    'footer-menu' => 'Footer Menu',
    ));
}

add_action( 'after_setup_theme', 'unixitoasix_setup' ); 

function add_widget_Support() {
    register_sidebar( array(
                    'name'          => 'Sidebar',
                    'id'            => 'sidebar',
                    'before_widget' => '<div>',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>',
    ) );
}

add_action( 'widgets_init', 'add_widget_Support' );

?>