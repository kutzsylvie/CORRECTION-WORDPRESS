<?php
/**
 * Plugin Name: LAMANU-cookie-law
 * Description: WordPress Plugin for european cookie law
 * Version: 1.0
 */
add_action('admin_menu','google_analytics_setup_menu');
function google_analytics_setup_menu(){
      add_menu_page('Google analytics', 'Google analytics', 'manage_options', 'config-cookie', 'analytics_page' );
}
//fonction pour importer le fichier option
function analytics_page(){
    require_once plugin_dir_path (__FILE__) . 'view/option.php';
}
function LAMANU_scripts() {
    wp_enqueue_script( 'tarteaucitron', plugin_dir_url(__FILE__) . 'js/tarteaucitron/tarteaucitron.js', [], '1.3', true);
    wp_enqueue_script( 'tarteaucitron-init', plugin_dir_url(__FILE__) . 'js/tac_init.js', [], '1.0', true);
    wp_enqueue_script( 'servicedescookies', plugin_dir_url(__FILE__) . 'js/service.js', [], '1.0', true);
    wp_enqueue_script( 'google-analytics', plugin_dir_url(__FILE__) . 'js/googleAnalytics.js', [], '1.0', true);
}
add_action( 'wp_enqueue_scripts', 'LAMANU_scripts' );
// function qui ajoute des enregistre des paramètres (nom du option group, nom de l'input)
function register_settings(){
    register_setting('LAMANU_settings_cookie', 'googleId');
}
//initialisation de la function 
add_action( 'admin_init', 'register_settings');