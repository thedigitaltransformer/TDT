<?php 



//THEME SUPPORT

function tdt_theme_setup (){
	
	// POST THUMBNAIL
	
	add_theme_support('post-thumbnails');
	
	// MENU
	register_nav_menus(array(
'primary' => __('Primary Menu'),
'category_main' => __('Category Main Menu'),
));
		
}

add_action('after_setup_theme' , 'tdt_theme_setup');

// ex Lenght COntrOl 

function set_excerpt_length(){
	return 45;
	
}

add_filter('excerpt_length', 'set_excerpt_length');