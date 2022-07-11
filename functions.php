<?php
/**
 * Tema Padrão IFMT 2022 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package temapadraoifmt
 */

 //require_once(get_template_directory().'/inc/class-nav-bootstrap-walker.php');

 function temapadraoifmt_setup(){
    /*
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );

    register_nav_menus(
        array(
            'primary' => 'Menu Principal'
        )
    );
    */

	$locations = array(
		'primary'  => __( 'Menu horizontal para desktop', 'temapadraoifmt' ),
		'expanded' => __( 'Menu expandido para desktop', 'temapadraoifmt' ),
		'mobile'   => __( 'Menu para dispositivos móveis', 'temapadraoifmt' ),
		'footer'   => __( 'Menu do rodapé', 'temapadraoifmt' ),
		'social'   => __( 'Menu social', 'temapadraoifmt' ),
	);

	register_nav_menus( $locations );

}
add_action('after_setup_theme', 'temapadraoifmt_setup');






function add_menu_link_class( $atts, $item, $args ) {
    if (property_exists($args, 'link_class')) {
      $atts['class'] = $args->link_class;
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

function add_menu_list_item_class($classes, $item, $args) {
    if (property_exists($args, 'list_item_class')) {
        $classes[] = $args->list_item_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);

add_filter('nav_menu_item_id', 'clear_nav_menu_item_id', 10, 3);
function clear_nav_menu_item_id($id, $item, $args) {
    return "";
}

add_filter('nav_menu_css_class', 'clear_nav_menu_item_class', 10, 3);
function clear_nav_menu_item_class($classes, $item, $args) {
    return array();
}

/*function remove_ul ( $menu ){
    return preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu );
}
add_filter( 'wp_nav_menu', 'remove_ul' );*/




function temapadraoifmt_gov_br(){

    //Fonte Rawline
    wp_enqueue_style('n_tpl_Fonte_Rawline', 'https://cdngovbr-ds.estaleiro.serpro.gov.br/design-system/fonts/rawline/css/rawline.css');

    //Fonte Raleway
    wp_enqueue_style('n_tpl_Fonte_Raleway', 'https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900&amp;display=swap');

    //Fontawesome
    wp_enqueue_style('n_tpl_Fonte_Fontawesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');

    //Design System de Governo
    wp_enqueue_style('n_template_css_gov_br', get_template_directory_uri().'/assets/node_modules/@govbr-ds/core/dist/core.css');
    wp_enqueue_script('n_template_css_gov_br', get_template_directory_uri().'/assets/node_modules/@govbr-ds/core/dist/core-init.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'temapadraoifmt_gov_br');