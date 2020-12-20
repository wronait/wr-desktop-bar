<?php



 function wr_desktop_bar_scripts() {
    wp_enqueue_script('wr-desktop-bar-frontend', plugins_url() . '/wr-desktop-bar/js/wr-desktop-bar-frontend.js', array('jquery'));
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css');
    wp_enqueue_style('wr-desktop-bar-css', plugins_url() . '/wr-desktop-bar/css/wr-desktop-bar-frontend.css');
}
add_action('wp_enqueue_scripts', 'wr_desktop_bar_scripts'); 



function dektop_bar_admin_style() {
    
    wp_enqueue_script('wr-desktop-bar-admin', plugins_url() . '/wr-desktop-bar/js/wr-desktop-bar-admin.js');    
    wp_enqueue_style('dektop-bar-admin', plugins_url() . '/wr-desktop-bar/css/wr-desktop-bar-admin.css.css');
}

add_action('admin_enqueue_scripts', 'dektop_bar_admin_style');