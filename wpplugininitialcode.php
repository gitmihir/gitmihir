<?php

/*
  Plugin Name: TPP User Tracking
  Plugin URI: https://imihir.com/
  Description: Used for internal usertracking management
  Version: 0.1
  Author: Imihir
  Author URI: https://www.imihir.com
  License: GPLv2 or later
  Text Domain: imihir
 */
// create custom plugin settings menu
add_action('admin_menu', 'tpp_my_standard_theme_create_menu');

function tpp_my_standard_theme_create_menu() {
    global $tpp_page_hook_suffix;
    $tpp_page_hook_suffix = add_menu_page('TPP Users', 'TPP User Tracker', 'administrator', __FILE__, 'tpp_user_tracking_page', 'dashicons-admin-generic');
    //add_action('admin_init', 'register_my_standard_theme_settings');
}

function tpp_load_custom_wp_admin_style($tpp_hook) {
    global $tpp_page_hook_suffix;
    if ($tpp_hook != $tpp_page_hook_suffix) {
        return;
    }
    $tpp_dir = plugins_url() . "/tpp-user-tracking/assets/";
    wp_enqueue_style('bootstrap-min-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css');
    wp_enqueue_style('bootstrap-colorpicker-css', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.css');
    wp_enqueue_style('mystandardplugin-css', $tpp_dir . '/css/mystandardplugin.css');
    wp_enqueue_script('jquery-min-js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
    wp_enqueue_script('bootstrap-min-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
    wp_enqueue_script('bootstrap-colorpicker-js', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.js');
    wp_enqueue_script('mystandardplugin-js', $tpp_dir . '/js/mystandardplugin.js');
}

add_action('admin_enqueue_scripts', 'tpp_load_custom_wp_admin_style');

function tpp_user_tracking_page() {
    echo "hi";
}
