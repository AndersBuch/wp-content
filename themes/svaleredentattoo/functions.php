<?php

// Load Stylesheets
function load_css()
{

		wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all' );
		wp_enqueue_style('main');
	
}
add_action('wp_enqueue_scripts','load_css');

// Theme Options
add_theme_support('menus');

// Menus
register_nav_menus(

    array(

        'top-menu' => 'Top Menu Location',
        'footer-menu' => 'Footer Menu Location',
    )

);
