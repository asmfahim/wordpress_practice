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
        add_action('after_setup_theme',[$this,'setup_theme']);
    }

    public function setup_theme(){
        
        add_theme_support( 'title-tag' ); //add Title
        //This is for logo
        add_theme_support( 'custom-logo', [
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => ['site-title', 'site-description' ],
            'unlink-homepage-logo' => true,
        ] );

        //add background
        add_theme_support( 'custom-background', [
            'default-image'          => '',
            'default-preset'         => 'default', // 'default', 'fill', 'fit', 'repeat', 'custom'
            'default-position-x'     => 'left',    // 'left', 'center', 'right'
            'default-position-y'     => 'top',     // 'top', 'center', 'bottom'
            'default-size'           => 'auto',    // 'auto', 'contain', 'cover'
            'default-repeat'         => 'no-repeat',  // 'repeat-x', 'repeat-y', 'repeat', 'no-repeat'
            'default-attachment'     => 'scroll',  // 'scroll', 'fixed'
            'default-color'          => '#000',
        ] );
    }


 }