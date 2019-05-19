<?php
/*
  Plugin Name: Shortcodes Elements
  Plugin URI:  https://wordpress.org/plugins/shortcodes-elements/
  Description: Plugin has a comprehensive collection of 20+ beautifully designed bootstrap based visual components / elements for your site
  Version: 1.1.1
  Author: Weblizar
  Author URI: https://weblizar.com/
  License: GPLv2+
  Text Domain: selements
*/
 if ( ! defined( 'ABSPATH' ) ) exit;
 define("E_S_WEBLIZAR", plugin_dir_url(__FILE__));

 include( plugin_dir_path( __FILE__ ) . 'shortcodes_func.php');
 include( plugin_dir_path( __FILE__ ) . 'shortcodes_code.php');


 add_action( 'admin_menu', 'esweblizar_menu' );
function esweblizar_menu() {
	//dashboard menu page
	add_menu_page('Weblizar Shortcode Elements', 'Weblizar Shortcode Elements', 'manage_options', 'esweblizar_system', 'esweblizar_page_content', 'dashicons-smiley', '10');
	add_submenu_page('esweblizar_system', 'API Key', 'API Key', 'manage_options', 'esweblizar_setting', 'esweblizar_page_setting' );
  add_submenu_page('esweblizar_system', 'Recommendation', 'Recommendation', 'manage_options', '', 'esweblizar_recom' );
}

function esweblizar_activation_hook() {
	add_option('weshortcode_redirect', true);
}
register_activation_hook(__FILE__, 'esweblizar_activation_hook');

function esweblizar_activation_redirect() {
	if (get_option('weshortcode_redirect', false)) {
		delete_option('weshortcode_redirect');
		if(!isset($_GET['activate-multi'])) {
			wp_redirect("admin.php?page=esweblizar_system");
			wp_redirect("admin.php?page=esweblizar_setting");
		}
	}
}
add_action('admin_init', 'esweblizar_activation_redirect');

add_action( 'plugins_loaded', 'esweblizar_load_textdomain' );
function esweblizar_load_textdomain() {
  load_plugin_textdomain( 'selements', false, basename( dirname( __FILE__ ) ) . '/languages' ); 
}

function esweblizar_page_content() {
	include("main_page.php");
	wp_enqueue_script('jquery');
	wp_enqueue_style('esweblizar_bootstrap_min',E_S_WEBLIZAR.'css/bootstrap.min.css' , array() ,true);
	wp_enqueue_script('esweblizar_bootstrap_min',E_S_WEBLIZAR.'js/bootstrap.min.js' , array() ,true);
	wp_enqueue_script('customjs',E_S_WEBLIZAR.'js/m_page-isotope.js' , array() ,true); 
	wp_enqueue_script( 'isotoppkgd', E_S_WEBLIZAR.'js/isotope.pkgd.js', array() ,true);
	wp_enqueue_style('isotope_css',E_S_WEBLIZAR.'css/isotope_css.css' , array() ,true);
}

function esweblizar_page_setting(){
	include("setting_page.php");
	wp_enqueue_script('jquery');
	wp_enqueue_style('esweblizar_bootstrap_min',E_S_WEBLIZAR.'css/bootstrap.min.css' , array() ,true);
    wp_enqueue_script('esweblizar_bootstrap_min',E_S_WEBLIZAR.'js/bootstrap.min.js' , array() ,true);
	wp_enqueue_style('isotope_css',E_S_WEBLIZAR.'css/isotope_css.css' , array() ,true);
}

function esweblizar_recom(){
  wp_enqueue_style('recom_css',E_S_WEBLIZAR.'css/recom.css' , array() ,true);
  include("recommendations.php");
}

/* ADMIN END CSS ***/
function esweblizar_admin_css() {
    wp_register_style($handle = 'esw_css_file', $src = plugins_url('css/shortcode_admin.css', __FILE__), $deps = array(), $ver = '1.0.0', $media = 'all');
    wp_enqueue_style('esw_css_file');
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_style('thickbox');
     wp_enqueue_style('font-awesome.min',E_S_WEBLIZAR.'font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('fontawesome-iconpicker',E_S_WEBLIZAR.'css/fontawesome-iconpicker.min.css');
}
add_action('admin_print_styles', 'esweblizar_admin_css');

/* ADMIN END JS ***/
function esweblizar_admin_script(){
   //wp_enqueue_script('jquery');
   wp_enqueue_script('fontawesome-iconpicker-js',E_S_WEBLIZAR.'js/fontawesome-iconpicker.min.js', array('jquery') ,'',true);
   wp_enqueue_script( 'wp-color-picker');
   wp_enqueue_script('media-upload');
   wp_enqueue_script('thickbox');
}
add_action('admin_print_scripts','esweblizar_admin_script');

/** Frontend CSS and JS files ***/
function esweblizar_script_assets() {
  wp_enqueue_script('jquery');
  // Bootstrap
  wp_enqueue_style('esweblizar_bootstrap_min',E_S_WEBLIZAR.'css/bootstrap.min.css' , array() ,true);
  wp_enqueue_script('esweblizar_bootstrap_min',E_S_WEBLIZAR.'js/bootstrap.min.js' , array() ,true);
  //css files
  wp_enqueue_style('shortcode-css',E_S_WEBLIZAR.'css/shortcode-css.css', array() ,true);
  wp_enqueue_style('font-awesome.min-css',E_S_WEBLIZAR.'font-awesome/css/font-awesome.min.css', array() ,true);
  //js files
  wp_enqueue_script('shortcode-js',E_S_WEBLIZAR.'js/shortcodes.js', array() ,true);
  wp_enqueue_script( 'masonry', E_S_WEBLIZAR.'js/masonry.pkgd.min.js', array() ,true);
  wp_enqueue_script( 'popper', E_S_WEBLIZAR.'js/popper.min.js', array() ,true);
}
add_action( 'wp_enqueue_scripts', 'esweblizar_script_assets' );

function esweblizar_gallery_shortcode_scripts() {
    global $post;
    if ( is_a( $post, 'WP_Post' ) && has_shortcode( $post->post_content, 'shotcode_gallery') ) {
    	 wp_enqueue_style('lightbox-css',E_S_WEBLIZAR.'css/lightbox.min.css', array() ,true);
         wp_enqueue_script( 'lightbox', plugins_url('js/lightbox.min.js', __FILE__));
    }
}
add_action( 'wp_enqueue_scripts', 'esweblizar_gallery_shortcode_scripts');

function esweblizar_post_shortcode_scripts() {
    global $post;
    if ( is_a( $post, 'WP_Post' ) && has_shortcode( $post->post_content, 'blog_post') ) {
        wp_enqueue_script( 'isotoppkgd', E_S_WEBLIZAR.'js/isotope.pkgd.js', array() ,true);
        wp_enqueue_script( 'blogjs', E_S_WEBLIZAR.'js/blog.js', array() ,true);
    }
}
add_action( 'wp_enqueue_scripts', 'esweblizar_post_shortcode_scripts');

function esweblizar_animation_shortcode_scripts() {
    global $post;
    if ( is_a( $post, 'WP_Post' ) && has_shortcode( $post->post_content, 'animation') ) {
        wp_enqueue_style('animate-css',E_S_WEBLIZAR.'css/animate.css', array() ,true);
    }
}
add_action( 'wp_enqueue_scripts', 'esweblizar_animation_shortcode_scripts');

function esweblizar_funfact_shortcode_scripts() {
    global $post;
    if ( is_a( $post, 'WP_Post' ) && has_shortcode( $post->post_content, 'funfact') ) {
        wp_enqueue_script( 'waypoint', E_S_WEBLIZAR.'js/waypoint.js', array() ,true);
        wp_enqueue_script( 'counterup', E_S_WEBLIZAR.'js/counterup.js', array() ,true);
        wp_enqueue_script( 'counterupjs', E_S_WEBLIZAR.'js/counterupcustom.js', array() ,true);
    }
}
add_action( 'wp_enqueue_scripts', 'esweblizar_funfact_shortcode_scripts');

function esweblizar_admin_setting_scripts(){
	wp_register_script( 'custom_wp_admin_js', plugin_dir_url(__FILE__). '/js/setting_box.js', false, '1.0.0' );
    wp_enqueue_script( 'custom_wp_admin_js' );
}
add_action( 'admin_footer', 'esweblizar_admin_setting_scripts');


function esweblizar_swiper_shortcode_scripts() {
    global $post;
    if ( is_a( $post, 'WP_Post' ) && has_shortcode( $post->post_content, 'swiper') ) {
        wp_enqueue_script( 'swiper', E_S_WEBLIZAR.'js/swiper.min.js');
        wp_enqueue_style( 'swipercss', E_S_WEBLIZAR.'css/swiper.min.css', array() ,true);
    }
}
add_action( 'wp_enqueue_scripts', 'esweblizar_swiper_shortcode_scripts');

function esweblizar_lightbox_shortcode_scripts() {
    global $post;
    if ( is_a( $post, 'WP_Post' ) && has_shortcode( $post->post_content, 'lightbox') ) {
        wp_enqueue_script( 'videopopup', E_S_WEBLIZAR.'js/video.popup.js');
        wp_enqueue_style( 'videopopupcss', E_S_WEBLIZAR.'css/video.popup.css', array() ,true);
    }
}
add_action( 'wp_enqueue_scripts', 'esweblizar_lightbox_shortcode_scripts');

add_action('plugins_loaded', 'esweblizar_LoadTranslation');
function esweblizar_LoadTranslation() {
    load_plugin_textdomain('selements', FALSE, dirname( plugin_basename(__FILE__)).'/languages/' );
}