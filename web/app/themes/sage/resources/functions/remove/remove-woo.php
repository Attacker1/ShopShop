<?php
//remove woocommerce styles
add_filter('woocommerce_enqueue_styles', '__return_empty_array');


/* remove specific woo styles */
function wpex_remove_woo_styles($styles)
{
    unset($styles['woocommerce-general']);
    return $styles;
}

add_filter('woocommerce_enqueue_styles', 'wpex_remove_woo_styles');
