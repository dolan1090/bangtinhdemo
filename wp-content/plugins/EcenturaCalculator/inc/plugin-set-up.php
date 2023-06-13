<?php

function wp_include_css_tm_plugin()
{
    wp_enqueue_style('main-style-tm-plugin', plugin_dir_url( __DIR__ ) . 'assets/css/style.css', array(), false, 'all');
}
add_action('wp_enqueue_scripts', 'wp_include_css_tm_plugin'); //Nhúng vào web 
// add_action('admin_enqueue_scripts', 'wp_include_admin_css'); //Nhúng vào wp-admin 
// add_action('login_enqueue_scripts', 'wp_include_login_css'); //Nhúng vào wp-login

function wp_include_js_tm_plugin()
{
    wp_enqueue_script('main-js-tm-plugin', plugin_dir_url( __DIR__ ) . 'assets/js/main.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'wp_include_js_tm_plugin'); //Nhúng vào web 
// add_action('admin_enqueue_scripts', 'wp_include_js'); //Nhúng vào wp-admin 
// add_action('login_enqueue_scripts', 'wp_include_js'); //Nhúng vào wp-login
