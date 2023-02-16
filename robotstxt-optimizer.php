<?php
/*
Plugin Name: Advanced Robots.txt Optimizer & Editor
Plugin URI: https://www.bigtechies.com/
Description: The "Advanced Robots.txt Optimizer & Editor" WordPress plugin enhances website functionality, SEO and traffic management by allowing users to customize the Robots.txt file with various features to block search engines, prevent crawling of duplicate content, optimize WooCommerce, add sitemap links, and block SEO tool crawlers to protect website resources, security and privacy.
Version: 1.0
Author: Big Techies
Author URI: https://www.bigtechies.com/robotstxt-optimizer-plugin/
*/
function advancedrobotstxtoptimizer_styles() {
    wp_enqueue_style( 'advancedrobotstxtstyles', plugins_url( '/robotsoptimizer-style.css', __FILE__ ), array(), '1.0.0', 'all' );
  }
  add_action( 'admin_enqueue_scripts', 'advancedrobotstxtoptimizer_styles' );
  
  function advancedrobotstxtoptimizer_scripts()
  {
    
    wp_enqueue_script( 'advancedrobotstxt', plugins_url( '/robotsoptimizer-java.js', __FILE__ ), array(), '1.0', true );
  }
  add_action('admin_enqueue_scripts', 'advancedrobotstxtoptimizer_scripts');
include_once(plugin_dir_path( __FILE__ ) . "/includes/robotsincludes.php");
include_once(plugin_dir_path( __FILE__ ) . "/includes/robots-optimizer.php");