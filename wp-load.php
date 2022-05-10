<?php
/**
 * Bootstrap file for setting the ABSPATH constant
 * and loading the wp-config.php file.The wp-config.php
 * file will then load the wp-settings.php file,which
 * will then set up the WordPress eniviroment.
 */

/** Define ABSPATH as the file's directory */ 
//もし ABSPATHが定義されていなかったら、
//このファイルのディレクトリのパスをABSPATHと定義する
if(! defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}