<?php
/**
 * @package lozko24.pl
 */

if ( ! defined( '_S_VERSION' ) ) {
  define( 'S_VERSION', '2.1.0' );
}

function lozko24_scripts() {
    /**
     *  Main styles 
    */
    wp_register_style( 'main-css', get_template_directory_uri() . '/assets/css/main.css', [], 2.1, false, 'all' );
      wp_register_script( 'main-js', get_template_directory_uri() . '/assets/js/script-min.js', [], 2.1, filemtime( get_template_directory() . '/assets/js/script-min.js' ), true );
    
    wp_enqueue_style( 'main-css' );
      wp_enqueue_script( 'main-js' );
  }
  add_action( 'wp_enqueue_scripts', 'lozko24_scripts');

  function lozko24_admin_style() {
	wp_enqueue_style( 'main-admin-style', get_template_directory_uri() . '/assets/css/admin.css', [], false, 'all' );
}
add_action( 'admin_enqueue_scripts', 'lozko24_admin_style' );

add_action('after_setup_theme', 'lozko24_config', 0);
require get_template_directory() . '/inc/wc-modifications.php';
require get_template_directory() . '/inc/wp-modifications.php';

function lozko24_config(){
    register_nav_menus(
      array(
        'lozko24_main_menu' => 'Lozko24 Main Menu',
        'lozko24_footer_menu_order' => 'Lozko24 Footer Menu Order',
        'lozko24_footer_menu_service' => 'Lozko24 Footer Menu Service'
                  )
      
    );
    add_theme_support('woocommerce', array(
      'thumbnails_image_width' => 200,
      'single_image_width' => 1024,
      'product_grid' => array(
        'default_rows' => 10,
        'min_rows' => 1,
        'max_rows' => 10,
        'default_columns' => 1,
        'min_columns' => 1,
        'max_columns' => 5
      )
    ));
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
  }
    
  function ccp_widgets_init(){
    register_sidebar( array(
        'name'          => __( 'Main Widget Area', 'lozko24_main_menu' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Appears in the footer section of the site.', 'lozko24_main_menu' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    }
    add_action( 'widgets_init', 'ccp_widgets_init' );
    require get_template_directory() . '/inc/wc-modifications.php';
    add_action('after_setup_theme', 'lozko24_config', 0);
    add_theme_support( 'title-tag' );

    

/** * Completely Remove jQuery From WordPress */
// function my_init() {
//   if (!is_admin()) {
//       wp_deregister_script('jquery');
//       wp_register_script('jquery', false);
//   }
// }
// add_action('init', 'my_init');

//   add_action('wp_enqueue_scripts', 'no_more_jquery');
// function no_more_jquery(){
//     wp_deregister_script('jquery');
// }
