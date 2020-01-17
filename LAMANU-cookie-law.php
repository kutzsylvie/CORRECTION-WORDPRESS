<?php
/*
Plugin Name: LAMANU-cookie-law
Version: 0.1
Description: WordPress Plugin for european cookie law.
Author: Tonyio
*/
// wp_register_script : fonction qui permet de référencer un script

function LAMANU_scripts(){
    wp_enqueue_script('tarteaucitron', plugin_dir_url(__FILE__) . 'js/tarteaucitron/tarteaucitron.js', [], '1.3', true);
    wp_enqueue_script('tarteaucitron-init', plugin_dir_url(__FILE__) . 'js/tarteaucitron-init.js', [], '1.0', true);
    wp_enqueue_script('services-cookies', plugin_dir_url(__FILE__) . 'js/services.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'LAMANU_scripts');

function menu_LAMANU_cookie(){
    add_menu_page('LAMANU cookie page', 'LAMANU cookie law', 'manage_options', 'config-cookie', 'init_menu_cookie');
}
add_action('admin_menu', 'menu_LAMANU_cookie');

function init_menu_cookie(){
    require_once plugin_dir_path(__FILE__) . 'view/option.php';
}
function register_settings(){
    register_setting('LAMANU_settings', 'googleID');
}
add_action('admin_init', 'register_settings');