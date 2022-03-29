<?php
add_theme_support('automatic-feed-links');
add_theme_support('title-tag');
add_theme_support( 'post-thumbnails' );
add_post_type_support( 'page', 'excerpt' );
add_image_size('home-slider', 2000, 598, ['left', 'top']);
add_image_size('home-slider-mobile', 767, 461, ['center', 'center']);
add_image_size('header-image', 2000, 350, ['left', 'top']);
add_image_size('header-image-mobile', 767, 270, ['left', 'top']);
add_image_size('small-thumbnail', 238, 168, ['left', 'top']);

/**
* Remove Stupid Things, Emoji Especially
*/
remove_action('wp_head','wlwmanifest_link');
remove_action('wp_head','wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');
remove_filter('the_content_feed', 'wp_staticize_emoji');
remove_filter('comment_text_rss', 'wp_staticize_emoji');
remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

/**
* Hide Wordpress Admin Bar
*/
add_filter('show_admin_bar', '__return_false');
remove_action('personal_options','_admin_bar_preferences');

/**
* Security
*/
remove_action('wp_head','rsd_link');
remove_action('wp_head','wlwmanifest_link');
remove_action('wp_head','index_rel_link');
remove_action('wp_head','wp_generator');

/**
* Include all file requirement
*/
include_once('inc/tgm-plugin-activation/tgm-plugin-activation.php');
include_once('inc/redux.php');
include_once('inc/shortcodes.php');

register_nav_menus([
	'first-menu' => __('First Menu'),
	'second-menu' => __('Second Menu'),
	'footer-menu' => __('footer Menu'),
	'footer-2' => __('footer-2'),
	'footer-menu-social' => __('footer Menu social'),
	'head-top' => __('head-top')
]);

function premium_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Footer', 'bullsbrook' ),
			'id'            => 'footer',
			'description'   => __( 'Add widgets here to appear in your footer side.', 'bullsbrook' ),
			'before_widget' => '<div id="%1$s" class="col-12 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);

    register_sidebar(
		array(
			'name'          => __( 'Sidebar Menu', 'bullsbrook' ),
			'id'            => 'sidebar-menu',
			'description'   => __( 'Add widgets here to appear in your sidebar menu.', 'bullsbrook' ),
			'before_widget' => '<div id="%1$s" class="col-12 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'premium_widgets_init' );

function bd_replace_strings( $strings ) {
    $strings['Region']  = 'Location';
    $strings['Regions'] = 'Locations';
    return $strings;
}
add_filter( 'wpbdp_custom_strings', 'bd_replace_strings' );

function theme_adding_scripts(){
	wp_enqueue_style('lato', 'https://fonts.googleapis.com/css2?family=Lato&display=swap', array(), null, 'all');
	wp_enqueue_style('roboto', 'https://fonts.googleapis.com/css2?family=Roboto&display=swap', array(), null, 'all');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.3.1', 'all');
	wp_enqueue_style('jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.min.css', array(), '4.7.0', 'all');
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.7.0', 'all');
	wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper.min.css', array(), '4.7.0', 'all');
	wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), '3.0.0', 'all');
	
	wp_enqueue_script( 'jquery' );
	// 	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr.min.js', array(), '2.8.3' );
	wp_enqueue_script('jquery-min', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '3.0.0', true);
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.14.7', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '4.3.1', true );	
	wp_enqueue_script('jquery-ui-min', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array(), '3.0.0', true);
	wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper.min.js', array(), '3.0.0', true);
	// 	wp_enqueue_script('parallax', get_template_directory_uri() . '/assets/js/parallax.min.js', array(), '3.0.0', true);
	wp_enqueue_script('theme-script', get_template_directory_uri() . '/assets/js/script.js', array(), '3.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'theme_adding_scripts' ); 


add_filter( 'get_the_archive_title', function ($title) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>' ;
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    }
    return $title;
});


