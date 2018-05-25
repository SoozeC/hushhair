<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles(){

	wp_dequeue_style('glow-style');

    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'child-theme', get_stylesheet_directory_uri() . '/style.css');

}