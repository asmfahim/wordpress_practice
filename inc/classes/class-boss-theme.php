<?php
/**
 * Bootstrap theme
 * 
 * @package Boss
 * 
 */

 namespace BOSS_THEME\Inc;

 use BOSS_THEME\Inc\Traits\Singleton;

 class BOSS_THEME{
    
    use Singleton;

    protected  function __construct( ){
        //load classes.
        Assets::get_instance();
        // wp_die( 'hello' );

        $this->setup_hooks();
    }

    protected function setup_hooks(){
        //add action and filters
        
    }


 }