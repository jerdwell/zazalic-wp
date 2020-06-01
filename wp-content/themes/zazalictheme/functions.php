<?php
function zazalic_add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_script( 'app', get_template_directory_uri() . '/app.js' );
  // wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
 
    // if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    //   wp_enqueue_script( 'comment-reply' );
    // }
}
add_action( 'wp_enqueue_scripts', 'zazalic_add_theme_scripts' );

function zazalic_themename_custom_logo_setup() {
  $defaults = array(
  'height'      => 100,
  'width'       => 400,
  'flex-height' => true,
  'flex-width'  => true,
  'header-text' => array( 'site-title', 'site-description' ),
  );
  add_theme_support( 'custom-logo', $defaults );
 }
add_action( 'after_setup_theme', 'zazalic_themename_custom_logo_setup' );

if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
}

function zazalic_register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'main menu' ),
    )
  );
}
add_action( 'init', 'zazalic_register_my_menus' );

// function register_navwalker(){
// 	require_once get_template_directory() . '/template-parts/navbar.php';
// }
// add_action( 'after_setup_theme', 'register_navwalker' );