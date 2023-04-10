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

//ajouter une nouvelle zone de menu à mon thème
function register_my_menu() {
    register_nav_menu('footer-menu',__( 'Menu Footer' ));
  }
  add_action( 'init', 'register_my_menu' );


add_theme_support(
    'custom-header',
    apply_filters(
        'blankslate_custom_header_args',
        array(
            'width'       => 4000,
            'height'      => 4000,
            'flex-height' => true,
        )
    )
);

add_theme_support(
    'custom-logo',
    apply_filters(
        'blankslate_logo_args',
        array(
            'height'      => 19,
            'width'       => 201,
            'flex-height' => true,
            'flex-width'  => true,
        )
    )
);