<?php
/**
 * Plugin Name: Disable XMLRPC
 * Plugin URI: https://bidwellwebsites.com/
 * Description: Disables XMLRPC and removes related tags from head.
 * Version: 1.0
 * Author: Mason Wiley
 * Author URI: https://bidwellwebsites.com/
 */

add_filter( 'xmlrpc_enabled', '__return_false' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
