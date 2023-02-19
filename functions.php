<?php

function boss_enqueue_scripts(){
    wp_enqueue_style( 'stylesheet', get_stylesheet_uri( ), [], filemtime(get_template_directory(  ).'/style.css'),'all' );
}
add_action( 'wp_enqueue_scripts','boss_enqueue_scripts' ); // This hooks for all links and scripts
