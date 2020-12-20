<?php

/**
* Plugin Name: Desktop Bar
* Autor: Piotr Deja
* Version: 1.0 
* 
*
**/


/* GLOBAL wr desktop bar variable */
$wr_desktop_bar = get_option('wr_desktop_bar_options');


/* Add scripts */
require_once(plugin_dir_path(__FILE__) . '/libs/wr_desktop_bar_scripts.php');



/* Add content */
require_once(plugin_dir_path(__FILE__) . '/libs/wr_desktop_bar_content.php');


/* Add options */
require_once(plugin_dir_path(__FILE__) . '/libs/wr_desktop_bar_options.php');



/* Output content */
require_once(plugin_dir_path(__FILE__) . '/libs/wr_desktop_bar_functions.php');





