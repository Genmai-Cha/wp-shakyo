<?php
/** 
* Front to WordPress application. This file doesn't do anything,but loads
* wp-blog-header.php which does and tells WordPress to load the theme.
* 
* @package WordPress
*/

/**
 * Tells WordPress to load the WordPress theme and outpot it.
 * 
 * @var bool
 */
define('WP_USE_THEMES',true);

/** Loads the WordPress Enviroment and Template */
require __DIR__.'/wp-blog-header.php';