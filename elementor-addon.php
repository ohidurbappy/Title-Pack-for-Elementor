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