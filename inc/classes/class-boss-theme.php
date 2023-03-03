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
        
        // wp_die( 'hello' );

        $this->set_hooks();
    }

    protected function set_hooks(){
        //add action and filters
    }
 }