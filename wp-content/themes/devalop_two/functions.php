<?php

if(!function_exists('my_theme_setup')):


function my_theme_setup(){
	
	load_theme_textdomain('mytextdomaindevalop',get_template_directory_uri().'/languages');
	
	add_theme_support('post-thumbnails');
	
	
	
	
	
	
}
function modify_length($length){
	return 15;
}

add_filter('excerpt_length','modify_length');

function read_more($more){
	return '<a href="'.get_permalink(get_the_ID()).'">Read more</a>';
}

add_filter('excerpt_more','read_more');


endif;

add_action('after_setup_theme','my_theme_setup');









?>