<?php 
/**
 * Loads the WordPress environment and template .
 * 
 * @package WordPress
 */
//もし$wp_did_headerが定義されていなかったら
if(! isset($wp_did_header)){

    $wp_did_header = true;

    //Load the WordPress Library
    require_once __DIR__ . '/wp-loade.php';

    //Set up the WordPress query
    wp();

    //Load the theme template.
    require_once ABSPATH . WPINC .'/templata-loader.php';
}