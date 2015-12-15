<?php
/**
 * jhu_id functions file
 *
 * @package WordPress
 * @subpackage jhu_id
 * @since jhu_id 1.0
 */


/******************************************************************************\
    Theme support, standard settings, menus and widgets
\******************************************************************************/

register_nav_menu( 'utility-menu', __( 'Utility menu seen on internal pages of site', 'jhu_id' ) );

/**
 * Include editor stylesheets
 * @return void
 */
function jhu_id_editor_style() {
    add_editor_style( 'styles/wp-editor-style.css' );
}

add_action( 'init', 'jhu_id_editor_style' );


/******************************************************************************\
    Scripts and Styles
\******************************************************************************/

/**
 * Enqueue jhu_id scripts
 * @return void
 */
function jhu_id_enqueue_scripts() {
    // wp_enqueue_style( 'jhu_id-styles', get_stylesheet_uri(), array(), '1.0' );
    // wp_enqueue_script( 'jquery' );
    // wp_enqueue_script( 'default-scripts', get_template_directory_uri() . '/js/scripts.min.js', array(), '1.0', true );
    // if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
}
add_action( 'wp_enqueue_scripts', 'jhu_id_enqueue_scripts' );


/*===========================================================
    Titles
===========================================================*/
add_filter( 'wp_title', 'jhu_id_wp_title' );
function jhu_id_wp_title( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( 'Home', 'theme_domain' ) . ' - ' . get_bloginfo( 'description' );
  } else {
    return __( $title . ' - ' . get_bloginfo( 'description' ));
  }
  return $title;
}
