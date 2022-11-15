<?php
/*
	Hello Elementor Child theme functions
*/

/* -----------------------Enqueue Style Sheet Function----------------------- */
function hello_elementor_child_enqueue(){
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css'
	);
}
add_action('wp_enqueue_scripts','hello_elementor_child_enqueue');