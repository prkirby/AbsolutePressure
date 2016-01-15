<?php
/**
 * Corpobox back compat functionality
 * @package Corpobox
 */

/**
 * Switches to the default theme
 */
function corpobox_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'corpobox_upgrade_notice' );
}
add_action( 'after_switch_theme', 'corpobox_switch_theme' );

/**
 * Add message for unsuccessful theme switch
 */
function corpobox_upgrade_notice() {
	$message = sprintf( __( 'Corpobox requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'corpobox' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevent the Customizer from being loaded on WordPress versions prior to 4.1.
 */
function corpobox_customize() {
	wp_die( sprintf( __( 'Corpobox requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'corpobox' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'corpobox_customize' );

/**
 * Prevent the Theme Preview from being loaded on WordPress versions prior to 4.1.
 */
function corpobox_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Corpobox requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'corpobox' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'corpobox_preview' );
