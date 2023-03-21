<?php
/**
 * Enqueue assets
 * 
 * @package Boss
 */
namespace BOSS_THEME\Inc;

use BOSS_THEME\Inc\Traits\Singleton;

class Assets{
    use Singleton;

  protected function __construct(){

    
    $this->setup_hooks();
  }

  protected function setup_hooks(){
    //add action and filters
    add_action( 'wp_enqueue_scripts',[$this,'register_styles'] ); // This hooks for all styles
    add_action( 'wp_enqueue_scripts',[$this,'register_scripts'] ); // This hooks for all scripts
}

public function register_styles(){
    //All css and bootstrap file 
        //This is register Style.css
        wp_register_style('style-css', get_stylesheet_uri( ), [], filemtime(BOSS_DIR_PATH.'/style.css'),'all' );  
        wp_register_style('bootstrap-css', BOSS_DIR_URI.'/assets/src/bootstrap/css/bootstrap.min.css', [], false,'all' );  
        //This is enqueue styles
        wp_enqueue_style( 'style-css' );
        wp_enqueue_style( 'bootstrap-css' );
}

public function register_scripts(){
    //All js and script file 

    //This is register main.js
    wp_register_script( 'main-js', BOSS_DIR_URI.'/assets/main.js', [], filemtime(BOSS_DIR_PATH.'/assets/main.js'), true ); 
    wp_register_script( 'bootstrap-bundle-js', BOSS_DIR_URI.'/assets/src/bootstrap/js/bootstrap.bundle.min.js', ['jquery'], false, true ); 
    // wp_register_script( 'bootstrap-js', BOSS_DIR_URI.'/assets/src/bootstrap/js/bootstrap.min.js', ['jquery','bootstrap-bundle-js'], false, true ); 

    

    //This is enqueue scripts
    wp_enqueue_script( 'main-js' );
    wp_enqueue_script( 'bootstrap-bundle-js' );
    // wp_enqueue_script( 'bootstrap-js' );

}


}