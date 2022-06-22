<?php
/**
 * Tema Padrão IFMT 2022 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package temapadraoifmt
 */

 require_once(get_template_directory().'/inc/class-nav-bootstrap-walker.php');

 function temapadraoifmt_setup(){
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );

    register_nav_menus(
        array(
            'primary' => 'Menu Principal'
        )
    );
 }
 add_action('after_setup_theme', 'temapadraoifmt_setup');

function temapadraoifmt_gov_br(){

    wp_enqueue_style('n_template_css_gov_br', get_template_directory_uri().'/assets/node_modules/@govbr-ds/core/dist/core.css');

    wp_enqueue_script('n_template_css_gov_br', get_template_directory_uri().'/assets/node_modules/@govbr-ds/core/dist/core-init.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'temapadraoifmt_gov_br');