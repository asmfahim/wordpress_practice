<?php
/**
 * Enqueue Meta boxes
 * 
 * @package Boss
 */
namespace BOSS_THEME\Inc;

use BOSS_THEME\Inc\Traits\Singleton;

class Meta_Boxes{
    use Singleton;

  protected function __construct(){

    
    $this->setup_hooks();
  }

  protected function setup_hooks(){
    //add action and filters
    add_action('add_meta_boxes',[$this , 'add_custom_meta_box'] );
    add_action('save_post',[$this ,'save_post_meta_data']);
}

public function add_custom_meta_box(){
    $screens = ['post'];
    foreach($screens as $screen){
        add_meta_box(
            'hide-page-title',  //Unique ID
            __('Hide Page Title' , 'boss'),  //Box Title
            [$this,'custom_meta_box_html'], //Content callback , must be of type callable
            $screen,  //Post Type
            'side'// for aside bar
        );
    }
    
}

public function custom_meta_box_html( $post ){
    $value = get_post_meta( $post->ID , '_hide_page_title', true );
    /**
     * use nonce for varefication
     */
    wp_nonce_field( plugin_basename(__FILE__), 'hide_title_meta_box_nonce_name' );

    ?>
    <label for="boss-field"> <?php esc_html_e('Hide the page title','boss'); ?> </label>
    <select name="boss_hide_title_field" id="boss-field" class="postbox" >
        <option value="">
            <?php esc_html_e('Select','boss'); ?> 
        </option>
        <option value="yes" <?php selected( $value,'yes' ) ?> >
            <?php esc_html_e('Yes','boss'); ?> 
        </option>
        <option value="no" <?php selected( $value, 'no' ) ?> > 
            <?php esc_html_e('No','boss'); ?> 
        </option>
    </select>

    <?php

}

public function save_post_meta_data($post_id ){
    /**
     * When the post is saved or upload we get $_POST available
     * check the current user is authorised
     */
    if( ! current_user_can('edit_post',$post_id)){
        return;
    }
    /**
     * check the nonce value we recived is the same we created or not
     */
    if(! isset($_POST['hide_title_meta_box_nonce_name']) || 
        ! wp_verify_nonce( $_POST['hide_title_meta_box_nonce_name'], plugin_basename(__FILE__))
    ){
        return;
    }

    if ( array_key_exists( 'boss_hide_title_field', $_POST ) ) {
        update_post_meta(
            $post_id,
            '_hide_page_title',
            $_POST['boss_hide_title_field']
        );
    }
}




}