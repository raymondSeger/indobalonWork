<?php
/**
 * Raymond
 * This removed the "generated by Wordpress meta data
 */
remove_action('wp_head', 'wp_generator');

/**
 * Raymond
 * This register the bootstrap's JS and CSS files
 * I could separates wp_enqueue_scripts with wp_enqueque_styles, but i decided to combine CSS and JS to wp_enqueue_scripts instead.
 */
add_action('wp_enqueue_scripts', function(){
	// add the style.css
	wp_enqueue_style( 'indobalon-style', get_stylesheet_uri() );
	// Jquery main and Migrate
	wp_enqueue_script('jquery-1-11-1-script', get_template_directory_uri() . '/asset/vendor/jquery/jquery-1.11.1.min.js');
	wp_enqueue_script('jquery-migrate-1-2-1', get_template_directory_uri() . '/asset/vendor/jquery/jquery-migrate-1.2.1.min.js');
	// Bootstrap's CSS and JS files
	wp_enqueue_script('bootstrap3-2-0-script', get_template_directory_uri() . '/asset/vendor/bootstrap-3.2.0-dist/js/bootstrap.min.js');
	wp_enqueue_style('bootstrap3-2-0-style', get_template_directory_uri() . '/asset/vendor/bootstrap-3.2.0-dist/css/bootstrap.min.css');
	wp_enqueue_style('bootstrap3-2-0-style-theme', get_template_directory_uri() . '/asset/vendor/bootstrap-3.2.0-dist/css/bootstrap-theme.min.css');
	// Font Awesome
	wp_enqueue_style('fontAwesome-4-2-0', get_template_directory_uri() . '/asset/vendor/font-awesome-4.2.0/css/font-awesome.min.css' );
    // Bootstrap Validator
    wp_enqueue_style('bootstrap-validator-css-0-5-2', get_template_directory_uri() . '/asset/vendor/bootstrap-validator-0-5-2/css/bootstrapValidator.min.css' );
    wp_enqueue_script('bootstrap-validator-js-0-5-2', get_template_directory_uri() . '/asset/vendor/bootstrap-validator-0-5-2/js/bootstrapValidator.min.js' );
    // Owl Carousel 1
    wp_enqueue_style('owl-carousel-1-main-css', get_template_directory_uri() . '/asset/vendor/owl-carousel/owl.carousel.css' );
    wp_enqueue_style('owl-carousel-1-theme-css', get_template_directory_uri() . '/asset/vendor/owl-carousel/owl.theme.css' );
    wp_enqueue_style('owl-carousel-1-transitions-css', get_template_directory_uri() . '/asset/vendor/owl-carousel/owl.transitions.css' );
    wp_enqueue_script('owl-carousel-1-main-js', get_template_directory_uri() . '/asset/vendor/owl-carousel/owl.carousel.min.js' );
    // Modernizr
	wp_enqueue_script('modernizr-custom', get_template_directory_uri() . '/asset/vendor/modernizr/modernizr.custom.01937.js' );
    // Indobalon's JS file
    wp_enqueue_script('indobalon-js', get_template_directory_uri() . '/asset/js/indobalon.js' );
});
