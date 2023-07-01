<?php


function atg_menu_classes($classes, $item, $args) {
    if($args->theme_location == 'lozko24_main_menu') {
      $classes[] = 'nav__item';
    }
    return $classes;
  }
  add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);
  
  function atg_menu_classes1($classes, $item, $args) {
      if($args->theme_location == 'lozko24_footer_menu_order') {
        $classes[] = 'footer__box-link';
      }
      return $classes;
    }
    add_filter('nav_menu_css_class', 'atg_menu_classes1', 1, 3);
    
    function atg_menu_classes2($classes, $item, $args) {
        if($args->theme_location == 'lozko24_footer_menu_service') {
          $classes[] = 'footer__box-link';
        }
        return $classes;
      }
      add_filter('nav_menu_css_class', 'atg_menu_classes2', 1, 3);


