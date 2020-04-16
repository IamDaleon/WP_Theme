<?php

// Load Stylesheets
function load_css()
  {
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
    
    wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), false, 'all');
    wp_enqueue_style('custom');
  }
add_action('wp_enqueue_scripts', 'load_css');

// Load JavaScript
function load_js()
  {
    wp_enqueue_script('jquery');
    wp_register_script('bootstrapjs', get_template_directory_uri().'/js/bootstrapjs.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrapjs');
  }
add_action('wp_enqueue_scripts', 'load_js');

// Theme Options
add_theme_support('menus');

// Menus
register_nav_menus(
  array(
    'main_nav' => 'Desktop Menu',
    'main_nav_mobile' => 'Mobile Menu',
    )
  );