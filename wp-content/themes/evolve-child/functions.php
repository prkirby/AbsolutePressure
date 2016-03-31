<?php
function absolute_pressure_custom_scripts() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/editor-style.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/editor-style-rtl.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/ie.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/css/bbpress.css' );
    // wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css' );
    wp_enqueue_style( 'flexslider-css', get_stylesheet_directory_uri() . '/css/flexslider.css' );

    $scriptsrc = get_stylesheet_directory_uri() . '/js/';

    wp_register_script( 'sticky', $scriptsrc . 'sticky.js', 'jquery', false );
    wp_enqueue_script( 'sticky' );

    wp_register_script ('flexslider', $scriptsrc . 'jquery.flexslider-min.js', 'jquery', false );
    wp_enqueue_script( 'flexslider' );

    wp_register_script ('flexslider-init', $scriptsrc . 'flexslider-init.js', 'jquery', false );
    wp_enqueue_script( 'flexslider-init' );
}
// function mytheme_custom_scripts() {
//
// 	if ( ! is_admin() ) {
// 		$scriptsrc = get_stylesheet_directory_uri() . '/js/';
// 		wp_register_script( 'sticky', $scriptsrc . 'sticky.js', 'jquery', false );
// 		wp_enqueue_script( 'sticky' );
//
//         wp_register_script ('flexslider', $scriptsrc . 'jquery.flexslider-min.js', 'jquery', false );
//         wp_enqueue_script( 'flexslider' );
// 	}
//
// }
add_action( 'wp_enqueue_scripts', 'absolute_pressure_custom_scripts' );
// add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts');
?>
