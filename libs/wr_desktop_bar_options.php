<?php

function wr_desktop_bar() {
    
    register_setting('wr_desktop_bar_options_group', 'wr_desktop_bar_options');

}


add_action('admin_init', 'wr_desktop_bar');
