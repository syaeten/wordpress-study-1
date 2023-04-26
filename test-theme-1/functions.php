<?php


function add_css()
{
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('test-theme-1', get_template_directory_uri() . '/css/style.css', array(), $version);
}

add_action('wp_enqueue_scripts', 'add_css');


function add_features()
{
  register_nav_menu('headerMunuLocation', 'Header Munu Location');
  register_nav_menu('footerLocation', 'Footer Location');

  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'add_features');