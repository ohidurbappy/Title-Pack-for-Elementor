<?php
/**
 * Plugin Name: Title Pack for Elementor
 * Description: Title pack widgets for elementor with many styles
 * Version:     0.0.1
 * Author:      Ohidur Rahman Bappy
 * Author URI:  https://www.ohidur.com
 * Text Domain: elementor-addon
 *
 * Requires Plugins: elementor
 * Elementor tested up to: 3.24.0
 * Elementor Pro tested up to: 3.24.0
 */

function register_title_pack_widgets( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/title-widget.php' );

	$widgets_manager->register( new \Elementor_Title_Widget() );

}
add_action( 'elementor/widgets/register', 'register_title_pack_widgets' );



/**
 * Register scripts and styles for Elementor title pack widgets.
 */
function elementor_title_pack_widgets_dependencies() {

	/* Scripts */
	// wp_register_script( 'widget-script-1', plugins_url( 'assets/js/widget-script-1.js', __FILE__ ) );
	// wp_register_script( 'widget-script-2', plugins_url( 'assets/js/widget-script-2.js', __FILE__ ), [ 'external-library' ] );
	// wp_register_script( 'external-library', plugins_url( 'assets/js/libs/external-library.js', __FILE__ ) );

	/* Styles */
	wp_register_style( 'title-widget', plugins_url( 'assets/css/title-widget.css', __FILE__ ) );
	// wp_register_style( 'widget-style-2', plugins_url( 'assets/css/widget-style-2.css', __FILE__ ), [ 'external-framework' ] );
	// wp_register_style( 'external-framework', plugins_url( 'assets/css/libs/external-framework.css', __FILE__ ) );

}
add_action( 'wp_enqueue_scripts', 'elementor_title_pack_widgets_dependencies' );