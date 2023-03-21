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

public function get_menu_id($location){

  //Get All menu location
  $locations = get_nav_menu_locations(  );

  //Get menu location id
  $menu_id = $locations[$location];

  return !empty( $menu_id ) ? $menu_id : ' ' ;

}

public function get_child_menu_item($menu_array,$parent_id){

    $child_menus = [];
    if(!empty($menu_array) && is_array($menu_array)){
      foreach($menu_array as $menu){
        if(intval($menu->menu_item_parent) === $parent_id){
          array_push($child_menus, $menu);
        }
      }
    }
    return $child_menus;
}


}