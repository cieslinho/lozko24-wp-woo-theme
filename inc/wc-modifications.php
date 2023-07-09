<?php
add_filter( 'woocommerce_account_menu_items', function($items) {
    unset($items['downloads']); // Remove downloads item
   
    $items['logout'] = __('wyloguj się', 'textdomain'); // Changing label for orders

    return $items;
}, 99, 1 );


?>