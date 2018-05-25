<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-theme', get_stylesheet_directory() . '/style.css' );

}


//this function removes the search box from the site header
function remove_storefront_product_search_box(){
    remove_action( 'storefront_header', 'storefront_product_search', 40 );
}

add_action('init', 'remove_storefront_product_search_box' );



function remove_storefront_header_cart(){
    remove_action( 'storefront_header', 'storefront_header_cart', 60 );
}

add_action('init', 'remove_storefront_header_cart' );