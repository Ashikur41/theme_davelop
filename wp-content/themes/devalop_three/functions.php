<?php

if(!function_exists('my_theme_setup')){


function my_theme_setup(){
	
	load_theme_textdomain('mytextdominthree',get_template_directory_uri().'/languages');
	
	
	
}

}
add_theme_support('post-thumbnails');

//function my_script(){
	//wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
//}

//add_action( 'wp_enqueue_scripts', 'my_script' );
add_theme_support('after_setup_theme','my_theme_setup');







?>