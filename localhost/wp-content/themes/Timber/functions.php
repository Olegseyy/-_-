<?php

add_action( 'wp_enqueue_scripts', 'localhost_style' );
add_action( 'wp_enqueue_scripts', 'localhost_scripts');

function localhost_style() {
	// wp_enqueue_style( 'Normalize-style', get_tamplate_directory_uri() . '/assets/css/Normalize.css' );
	// wp_enqueue_style( 'magnific-style', get_tamplate_directory_uri() . '/assets/css/magnific-popup.css');  

	wp_enqueue_style( 'main-style', get_stylesheet_uri() );

}


function localhost_scripts() {

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js' );
	wp_enqueue_script( 'jquery' );

	// wp_enqueue_script( 'magnific-script', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(jquery), 'null', true );
	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js', array(jquery), 'null', true );
}    

