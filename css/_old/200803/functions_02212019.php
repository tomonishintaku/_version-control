<?php
/**
 * Functions.php contains all the core functions for your theme to work properly.
 * Please do not edit this file!!
 *
 * @package Thoughts WordPress Theme
 * @since 1.0
 * @author AJ Clarke : http://wpexplorer.com
 * @copyright Copyright (c) 2012, AJ Clarke
 * @link http://wpexplorer.com
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */


// Define Constants
define( 'WPEX_JS_DIR', get_template_directory_uri().'/js' );
define( 'WPEX_CSS_DIR', get_template_directory_uri().'/css' );


// Theme Setup
if ( !function_exists( 'wpex_setup' ) ) {
	function wpex_setup() {

		//default width of primary content area
		$content_width = 945;
		
		//theme support
		add_theme_support('automatic-feed-links');
		add_theme_support('custom-background');
		add_theme_support('post-thumbnails');
		
		//register navigation menus
		register_nav_menus ( array(
			'main_menu' => __( 'Main Menu', 'wpex' )
		) );

		// Add Post Formats Support
		add_theme_support( 'post-formats', array( 'video', 'quote', 'link', 'audio', 'image', 'gallery' ) );

		//Localization support
		load_theme_textdomain( 'wpex', get_template_directory() .'/lang' );

	}
}
add_action( 'after_setup_theme', 'wpex_setup' );


// TGM Plugin Activation => https://github.com/thomasgriffin/TGM-Plugin-Activation
require_once ( get_template_directory() .'/functions/recommend-plugins.php' );


// Includes
require_once( get_template_directory() .'/functions/scripts.php' );
require_once ( get_template_directory() .'/functions/hooks.php' );
require_once( get_template_directory() .'/functions/theme_customizer.php' );
require_once( get_template_directory() .'/functions/font_awesome.php' );
require_once( get_template_directory() .'/functions/pagination.php' );
require_once( get_template_directory() .'/functions/img_resizer.php' );
require_once( get_template_directory() .'/functions/img_defaults.php' );
require_once( get_template_directory() .'/functions/wpex_comments_output.php' );

if( is_admin( )) {
	require_once( get_template_directory() .'/functions/gallery-metabox/gmb-admin.php' );
	require_once( get_template_directory() .'/functions/post_meta.php' );
	require_once( get_template_directory() .'/functions/dashboard-feed.php' );
	require_once( get_template_directory() .'/functions/welcome.php' );
} else {
	require_once( get_template_directory() .'/functions/gallery-metabox/gmb-display.php' );
}


// Image caption
if ( !function_exists( 'wpex_post_feat_img_caption' ) ) :
	function wpex_post_feat_img_caption() {
		global $post;
		$thumbnail_image = get_posts( array( 'p' => get_post_thumbnail_id( get_the_ID() ), 'post_type' => 'attachment') );
		if ( $thumbnail_image[0]->post_content !== '' ) {
			echo '<p class="single-portfolio-image-description clearfix">'.$thumbnail_image[0]->post_content.'</p>';
		}
	}
endif;

// Change default read more style
if ( !function_exists( 'wpex_new_excerpt_more' ) ) {
	function wpex_new_excerpt_more($more) {
		global $post;
		return '...';
	}
}
add_filter('excerpt_more', 'wpex_new_excerpt_more');

// Change default excerpt length
if ( !function_exists( 'wpex_custom_excerpt_length' ) ) {
	function wpex_custom_excerpt_length( $length ) {
		return get_theme_mod( 'wpex_excerpt_length', '100' );
	}
}
add_filter( 'excerpt_length', 'wpex_custom_excerpt_length', 999 );