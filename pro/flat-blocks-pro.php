<?php
/**
 * File:	flat-blocks-pro.php
 * Theme:	Flat Blocks PRO
 * 
 * Adds the PRO version featurs to the Flat Blocks Theme
 *
 * Loads custom block styles and CSS 
 * Loads block patterns
 * Loads animation custom block styles, CSS, and JS
 * Loads CSS for Jetpack Plugin
 * Loads CSS for Woo Commerce Plugin
 * 
 * @package flat-blocks-pro
 * @since	1.0
 */

// Load Admin Edit Link
if ( apply_filters( 'flatblocks_pro_load_admin_edit', $default = true ) ) {
	if ( file_exists( get_template_directory() . '/pro/inc/pro-admin-edit.php' ) ) {
		require_once get_template_directory() . '/pro/inc/pro-admin-edit.php';
	}
}

// Load custom block styles
if ( apply_filters( 'flatblocks_pro_load_custom_styles', $default = true ) ) {
	if ( file_exists( get_template_directory() . '/pro/inc/pro-custom-styles.php' ) ) {
		require_once get_template_directory() . '/pro/inc/pro-custom-styles.php';
	}
}

// Load block patterns (note: not yet used)
if ( apply_filters( 'flatblocks_pro_load_patterns', $default = true ) ) {
	if ( file_exists( get_template_directory() . '/pro/inc/pro-patterns.php' ) ) {
		require_once get_template_directory() . '/pro/inc/pro-patterns.php';
	}
}

// Load animation styles and scripts
if ( apply_filters( 'flatblocks_pro_load_animation', $default = true ) ) {
	if ( file_exists( get_template_directory() . '/pro/inc/pro-animation.php' ) ) {
		require_once get_template_directory() . '/pro/inc/pro-animation.php';
	}
}

// Load Jetpack Plugin styles and scripts only if that plugin is active
if ( apply_filters( 'flatblocks_pro_load_jetpack', $default = true ) ) {
	if ( class_exists('Jetpack') && file_exists( get_template_directory() . '/pro/inc/pro-jetpack.php' ) ) {
		require_once get_template_directory() . '/pro/inc/pro-jetpack.php';
	}
}

// Load Woo Commerce Plugin styles and scripts only if that plugin is active
if ( apply_filters( 'flatblocks_pro_load_woocommerce', $default = true ) ) {
	if ( class_exists('woocommerce') && file_exists( get_template_directory() . '/pro/inc/pro-woocommerce.php' ) ) {
		require_once get_template_directory() . '/pro/inc/pro-woocommerce.php';
	}
}
