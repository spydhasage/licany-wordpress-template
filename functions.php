<?php

function my_theme_register_scripts() {
    wp_register_script( 'my-theme-script', get_template_directory_uri() . '/assets/js/my-theme-script.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_register_scripts' );

function my_theme_scripts() {
    wp_enqueue_script( 'my-theme-script' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );


function my_theme_register_styles() {
    wp_register_style( 'my-theme-style', get_template_directory_uri() . '/assets/css/my-theme-style.css', array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_register_styles' );

function my_theme_styles() {
    wp_enqueue_style( 'my-theme-style' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_styles' );

add_action( 'after_setup_theme', 'my_theme_setup' );
function my_theme_setup() {
  add_theme_support( 'elementor' );
}



$image_folder_url = get_template_directory_uri() . '/img';
$script_folder_url = get_template_directory_uri() . '/assets/js';