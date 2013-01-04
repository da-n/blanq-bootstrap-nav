<?php
/*
Plugin Name: Blanq Bootstrap Nav
Plugin URI: https://github.com/da-n/blanq-bootstrap-menu
Description: This is a plug-in for Blanq WordPress theme which extends Walker_Nav_Menu to integrate Bootstrap. The <a href="https://gist.github.com/1597994">original extended class</a> was written by <a href="https://gist.github.com/johnmegahan">johnmegahan</a>.
Version: 1.0
Author: Daniel Davidson
Author URI: http://github.com/da-n
License: GPL2
*/

function _blanq_bootstrap_nav_init() {
  // Creating a custom table
  new scbTable( 'blanq_bootstrap_nav_table', __FILE__, "
    blanq_bootstrap_nav_id int(20),
    blanq_bootstrap_nav varchar(100),
    PRIMARY KEY  (blanq_bootstrap_nav_id)
  ");
  
  require_once dirname( __FILE__ ) . '/core.php';

  // Creating an options object
  $options = new scbOptions( 'blanq_bootstrap_nav', __FILE__, array(
    'blanq_bootstrap_nav_option_a' => 'foo',
    'blanq_bootstrap_nav_option_b' => 'bar',
  ) );

  // Creating settings page objects
  if ( is_admin() ) {
    require_once( dirname( __FILE__ ) . '/admin.php' );
    new Blanq_Bootstrap_Nav_Options_Page( __FILE__, $options );
  }
}
scb_init( '_blanq_bootstrap_nav_init' );