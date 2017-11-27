
<?php

/**
 * Woocommerce checkout cities and states
 * 
 * The plugin wc-city-select is required
 * https://co.wordpress.org/plugins/wc-city-select/
 */

include 'wc_checkout_locations.php';

add_filter( 'wc_city_select_cities', 'custom_woocommerce_cities' );
function custom_woocommerce_cities( $cities ) {
    $cities = custom_get_cities();
    return $cities;
}

add_filter( 'woocommerce_states', 'custom_woocommerce_states' );
function custom_woocommerce_states( $states ) {
    $states = custom_get_states();
    return $states;
}