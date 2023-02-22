<?php
/**
 * Boss theme functions
 * 
 * @package boss
 */

 if( ! defined('BOSS_DIR_PATH')){
    defined('BOSS_DIR_PATH',untrailingslashit( get_template_directory(  ) ));
 }

 require_once BOSS_DIR_PATH .'/inc/helpers/autoloader.php';

function boss_enqueue_scripts(){
    //It is a good practice use in wp_register_(style/script) you can also condition this procese
    //This is register Style.css
    wp_register_style('style-css', get_stylesheet_uri( ), [], filemtime(get_template_directory(  ).'/style.css'),'all' );  
    wp_register_style('bootstrap-css', get_template_directory_uri(  ).'/assets/src/bootstrap/css/bootstrap.min.css', [], false,'all' );  

    //This is register main.js
    wp_register_script( 'main-js', get_template_directory_uri(  ).'/assets/main.js', [], filemtime(get_template_directory(  ).'/assets/main.js'), true ); 
    wp_register_script( 'bootstrap-js', get_template_directory_uri(  ).'/assets/src/bootstrap/js/bootstrap.min.js', ['jquery'], false, true ); 

    //This is enqueue styles
    wp_enqueue_style( 'style-css' );
    wp_enqueue_style( 'bootstrap-css' );

    //This is enqueue scripts
    wp_enqueue_script( 'main-js' );
    wp_enqueue_script( 'bootstrap-js' );


}
add_action( 'wp_enqueue_scripts','boss_enqueue_scripts' ); // This hooks for all links and scripts
