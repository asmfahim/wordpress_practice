<?php

function boss_enqueue_scripts(){
    //It is a good practice use in wp_register_(style/script) you can also condition this procese
    //This is Style.css
    wp_register_style('style-css', get_stylesheet_uri( ), [], filemtime(get_template_directory(  ).'/style.css'),'all' );  
    //This is main.js
    wp_register_script( 'main-js', get_template_directory_uri(  ).'/assets/main.js', [], filemtime(get_template_directory(  ).'/assets/main.js'), true ); 

    wp_enqueue_style( 'style-css' );
    wp_enqueue_script( 'main-js' );


}
add_action( 'wp_enqueue_scripts','boss_enqueue_scripts' ); // This hooks for all links and scripts
