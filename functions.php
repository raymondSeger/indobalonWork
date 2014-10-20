<?php
/**
 * Raymond
 * This removed the "generated by Wordpress meta data
 */
remove_action('wp_head', 'wp_generator');

/**
 * Raymond
 * This register the bootstrap's JS and CSS files
 */
add_action('wp_enqueue_scripts', function(){
	// add the style.css
	wp_enqueue_style( 'indobalon-style', get_stylesheet_uri() );
	// Jquery main and Migrate
	wp_enqueue_script('jquery-1-11-1-script', get_template_directory_uri() . '/asset/vendor/jquery/jquery-1.11.1.min.js' );
	wp_enqueue_script('jquery-migrate-1-2-1', get_template_directory_uri() . '/asset/vendor/jquery/jquery-migrate-1.2.1.min.js' );
	// Bootstrap's CSS and JS files
	wp_enqueue_script('bootstrap3-2-0-script', get_template_directory_uri() . '/asset/vendor/bootstrap-3.2.0-dist/js/bootstrap.min.js' );
	wp_enqueue_style( 'bootstrap3-2-0-style', get_template_directory_uri() . '/asset/vendor/bootstrap-3.2.0-dist/css/bootstrap.min.css');
	wp_enqueue_style( 'bootstrap3-2-0-style-theme', get_template_directory_uri() . '/asset/vendor/bootstrap-3.2.0-dist/css/bootstrap-theme.min.css');
	// Font Awesome
	wp_enqueue_style( 'fontAwesome-4-2-0', get_template_directory_uri() . '/asset/vendor/font-awesome-4.2.0/css/font-awesome.min.css' );
	// Modernizr
	wp_enqueue_script('modernizr-custom', get_template_directory_uri() . '/asset/vendor/modernizr/modernizr.custom.01937.js' );
});