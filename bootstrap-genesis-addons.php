<?php
/*
Plugin Name:        Bootstrap Genesis Add-Ons
Plugin URI:         https://github.com/bryanwillis/bootstrap-genesis-addons/
Description:        Bootstrap Genesis theme specific addons
Version:            1.0.0
Author:             bryanwillis
Author URI:         https://github.com/bryanwillis/
License:            MIT License
License URI:        http://opensource.org/licenses/MIT
*/

/* Adds all php files in addons folder */
/* To use addons add theme support for it. See bootstrap-genesis-addons/functions.php file for example  */

function load_bsg_addons() {
  global $_wp_theme_features;
  foreach (glob(__DIR__ . '/addons/*.php') as $file) {
    $feature = 'bsg-' . basename($file, '.php');
    if (isset($_wp_theme_features[$feature])) {
      require_once $file;
    }
  }
}
add_action('after_setup_theme', 'load_bsg_addons', 100);

//include_once ( plugins_url( 'functions.php', __FILE__ ) );
include_once( dirname( __FILE__ ) . '/functions.php' );
