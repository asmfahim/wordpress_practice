<?php
/**
 * Boss theme functions
 * 
 * @package boss
 */

 if( ! defined('BOSS_DIR_PATH')){
    define('BOSS_DIR_PATH',untrailingslashit( get_template_directory(  ) ));
 }

 if( ! defined('BOSS_DIR_URI')){
   define('BOSS_DIR_URI',untrailingslashit( get_template_directory_uri(  ) ));
}

 require_once BOSS_DIR_PATH .'/inc/helpers/autoloader.php';
 require_once BOSS_DIR_PATH .'/inc/helpers/template-tags.php';

 function boss_get_theme_instance(){
    \BOSS_THEME\Inc\BOSS_THEME::get_instance();

 }
 boss_get_theme_instance();

function boss_enqueue_scripts(){
    //It is a good practice use in wp_register_(style/script) you can also condition this procese





}
add_action( 'wp_enqueue_scripts','boss_enqueue_scripts' ); // This hooks for all links and scripts
