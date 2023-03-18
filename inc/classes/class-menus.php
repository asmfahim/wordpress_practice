<?php
/**
 * Enqueue assets
 * 
 * @package Boss
 */
namespace BOSS_THEME\Inc;

use BOSS_THEME\Inc\Traits\Singleton;

class Menus{
    use Singleton;

  protected function __construct(){

    
    $this->setup_hooks();
  }

  protected function setup_hooks(){
    //add action and filters
   
    add_action( 'init',[$this,'register_menus'] ); // This hooks for menus
}



public function register_menus(){
    //All menus file 

    register_nav_menus(
      [
        'boss-header-menu' => esc_html__( 'Header Menu', 'boss' ),
        'boss-footer-menu' =>esc_html__( 'Footer Menu', 'boss' ),
      ]
     );

}


}