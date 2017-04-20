<?php
/**
 * WordPress bootstrap
 * Assumes Wordpress is installed in the lib folder in the /lib/wordpress folder.
 * If you want to run wordpress from another folder you need to change the WORDPRESS_ROOT below
 * 
 * @category  	erdiko/wordpress
 * @copyright 	Copyright (c) 2017, Arroyo Labs, http://www.arroyolabs.com
 * @author		John Arroyo, john@arroyolabs.com
 */

// define('WP_USE_THEMES', true);
define('WP_USE_THEMES', false);   

// if not set in the appstrap.php (or elsewhere) default it to lib/wordpress
if(empty(WORDPRESS_ROOT))
    define("WORDPRESS_ROOT", ERDIKO_ROOT.'/vendor/wordpress');

define("WORDPRESS_ROOT", ERDIKO_ROOT.'/vendor/wordpress');

// error_log("ERDIKO_ROOT: ".ERDIKO_ROOT);
// error_log("WORDPRESS_ROOT: ".WORDPRESS_ROOT);

if ( !isset($wp_did_header) ) {
	$wp_did_header = true;
    $bootstrap = WORDPRESS_ROOT . '/wp-load.php';
	require_once( $bootstrap );
	wp();
}
