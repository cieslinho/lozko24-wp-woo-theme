<?php


function atg_menu_classes($classes, $item, $args) {
    if($args->theme_location == 'lozko24_main_menu') {
      $classes[] = 'nav__item';
    }
    return $classes;
  }
  add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);
  

