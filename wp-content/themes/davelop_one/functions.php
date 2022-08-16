<?php

if(!function_exists('my_theme_setup')):

function my_theme_setup(){
	
	load_theme_textdomain('mytextdomaindavelopone',get_template_directory().'/languages');

	add_theme_support('post-thumbnails');
	
	add_theme_support('post-formats',array('aside','gallary','image','video'));
	add_theme_support('automatic-feed-links');

	$args = array(
	'default-color' => 'ff00oo',
	'default-image' => get_theme_file_uri().'/assets/img/team-3.jpg'
);
add_theme_support( 'custom-background', $args );

$args = array(
	'width'         => 980,
	'height'        => 60,
	'default-image' => get_theme_file_uri().'/assets/img/about-1.jpg'
);
add_theme_support( 'custom-header', $args );

$logos = array(
	'width'         => 100,
	'height'        => 400,
	'default-image' => get_theme_file_uri().'/assets/img/about-1.jpg'
);
add_theme_support( 'custom-logo', $logos );

   add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
   	
   add_theme_support( 'title-tag' );
   add_theme_support( 'customize-selective-refresh-widgets' );

	
	require_once get_theme_file_path().'/themeoption/codestar-framework.php';
	require_once get_theme_file_path().'/themeoption/samples/Dashboard-options.php';
	require_once get_theme_file_path().'/themeoption/samples/admin-options.php';
}
endif;

	//start add script
	
	wp_enqueue_style('stylecss',get_template_directory_uri().'/assets/img/favicon.ico','false','00.1','all');
	wp_enqueue_style('image',get_template_directory_uri().'/assets/css/style.css');
	
	
	
	add_action('wp_enqueue_script','my_scripts');
	//end add script

add_action('after_setup_theme','my_theme_setup');

function my_register_menu(){
	
		register_nav_menus(array(
	
	'primary'=> __('primary menu','mytextdomaindavelopone'),
	'top'=> __('top menu','mytextdomaindavelopone'),
	'footer'=> __('footer menu','mytextdomaindavelopone'),
	
	
	));
}
add_action('init','my_register_menu');



?>