<?php
/**
 * Bootstrap file for setting the ABSPATH constant
 * and loading the wp-config.php file.The wp-config.php
 * file will then load the wp-settings.php file,which
 * will then set up the WordPress eniviroment.
 * 
 * If the wp-config.php file is not found then an error
 * will be displayed asking the vistor to set up the
 * wp-config.php file.
 * 
 * Will also search for wp-config.php in WordPress's parent
 * directory to allow the WordPress directory to remain
 * untouched
 * （このファイルの概要を書いてるコメントアウトっぽい）
 * @package WordPress
 */

/** Define ABSPATH as the file's directory */ 
//もし ABSPATHが定義されていなかったら、
//このファイルのディレクトリのパスをABSPATHと定義する
if(! defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/*
* The error_reporting() function can be deisabled in php.ini. 
*/
