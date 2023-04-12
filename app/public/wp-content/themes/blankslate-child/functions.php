<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION




//header logo customizer
function ajout_custoizer_section($wp_customize){
    $wp_customize->add_section('header-logo-section',array(
        'title'      => __('header logo', 'blankslate'),
        'priority'   => 30,
        'desciption' => 'ajout logo dans header'
    ));
}
add_action('customize_register','ajout_customizer_section');

//header logo champs
function ajout_custoizer_champ($wp_customize){
    $wp_customize->add_setting('header logo');
    $wp_customize->add_control(new wp_customize_image_control($wp_customize, 'blanksate',
array(
    'label'      =>__('header logo', 'blankslate'),
    'section'    => 'header_logo_section',
    'settings'   => 'header_logo',
)));
}
add_action('customize_register','ajout_customizer_champ');

//ajouter une nouvelle zone de menu à mon thème
function register_my_menu() {
    register_nav_menu('footer-menu',__( 'Menu Footer' ));
  }
  add_action( 'init', 'register_my_menu' );

//image dans le header



//HOOK
/*
function add_admin_link($items, $args) {
    if( $args->theme_location == 'main-menu' ){
        $items .= '<li id="menu-item-50" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-50">'
        . '<a href="http://planty.local/admin_url( '/' ).'
        . '<itemprop="url"><span itemprop="name">Admin</span></a>'
        . '</li>';
    }
  return $items;
}
add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);
*/