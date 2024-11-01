<?php
/*
Plugin Name: WP-FAQ
Plugin URI: http://wpdonehere.com/
Version: 1.01
Author: WPDoneHere.com
Description: Create a nice looking FAQ for Wordpress
Author URI: http://wpdonehere.com/
License: GPL3
*/

define( 'PLUGINPATH', WP_PLUGIN_DIR . '/' . str_replace( basename( __FILE__ ), "", plugin_basename( __FILE__ )));
define( 'PLUGINURL', trailingslashit( plugins_url( basename( dirname( __FILE__ )))));

include( PLUGINPATH . 'classes/class-html.php');
include( PLUGINPATH . 'classes/class-screen_meta.php');
include( PLUGINPATH . 'classes/class-faq.php');
include( PLUGINPATH . 'classes/class-shortcode.php');
include( PLUGINPATH . 'classes/class-tinymce.php');

?>