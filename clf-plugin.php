<?php
/**
* @package CLF-plugin
*/
/*
Plugin Name: CLF-plugin
Plugin URI: http://www.cyberleaf.pl
Description: CLF test plugin
Author: k-majick
Author URI: http://www.cyberleaf.pl
*/

defined('ABSPATH') or die('All humans must die!');

class clfTestPlugin {

  function __construct() {
    add_action( 'init', array( $this, 'my_action'));
    add_shortcode('my_shortcode', 'my_action');
    register_activation_hook( __FILE__, array( $this, 'clf_activate' ));
    register_deactivation_hook( __FILE__, array( $this, 'clf_deactivate' ));
  }

  static function clf_activate() {
    $this->my_action();
    // register_uninstall_hook( __FILE__, 'clf_uninstall' );
  }

  static function clf_deactivate() {
    flush_rewrite_rules();
  }

  static function clf_uninstall() {
    // delete plugin data from DB
  }

  static function my_action(){

  }

}

if (class_exists('clfTestPlugin')) {
  $clfTestPlugin = new clfTestPlugin();
}
