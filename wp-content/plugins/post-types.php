<?php
/*
Plugin Name: PKP Custom Post Types and Taxonomies
Description: A simple plugin that adds Post types and Taxonomies
Version: 0.1
Author: Paul Kirby Productions
License: GPL2

PKP Custom Post Types and Taxonomies is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

PKP Custom Post Types and Taxonomies is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with PKP Custom Post Types and Taxonomies. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

function my_custom_post_types() {
    // Services Offered Post Type
    $labels = array(
		'name'               => 'Services Offered',
		'singular_name'      => 'Service Offered',
		'menu_name'          => 'Services Offered',
		'name_admin_bar'     => 'Services Offered',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Service',
		'new_item'           => 'New Service',
		'edit_item'          => 'Edit Service',
		'view_item'          => 'View Service',
		'all_items'          => 'All Services Offered',
		'search_items'       => 'Search Services Offered',
		'parent_item_colon'  => 'Parent Services:',
		'not_found'          => 'No services found.',
		'not_found_in_trash' => 'No services offered found in Trash.',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-hammer',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'services_offered' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'post-formats')
	);
    register_post_type('services_offered', $args );

    //Testimonials Post Type
    $labels = array(
        'name'               => 'Testimonials',
        'singular_name'      => 'Testimonial',
        'menu_name'          => 'Testimonials',
        'name_admin_bar'     => 'Testimonials',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Testimonial',
        'new_item'           => 'New Testimonial',
        'edit_item'          => 'Edit Testimonial',
        'view_item'          => 'View Testimonial',
        'all_items'          => 'All Testimonials',
        'search_items'       => 'Search Testimonial',
        'parent_item_colon'  => 'Parent Testimonial:',
        'not_found'          => 'No Testimonials found.',
        'not_found_in_trash' => 'No Testimonials found in Trash.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-thumbs-up',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonials' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'supports'           => array( 'editor', 'comments', 'custom-fields')
    );
    register_post_type('testimonials', $args );

    //Our Work Post Type
    $labels = array(
        'name'               => 'Our Work',
        'singular_name'      => 'Our Work',
        'menu_name'          => 'Our Work',
        'name_admin_bar'     => 'Our Work',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Our Work',
        'new_item'           => 'New Our Work',
        'edit_item'          => 'Edit Our Work',
        'view_item'          => 'View Our Work',
        'all_items'          => 'All Our Work',
        'search_items'       => 'Search Our Work',
        'parent_item_colon'  => 'Parent Our Work:',
        'not_found'          => 'No Our Work found.',
        'not_found_in_trash' => 'No Our Work found in Trash.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-schedule',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'our-work' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 7,
        'supports'           => array( 'title', 'editor')
    );
    register_post_type('our-work', $args );
}

add_action( 'init', 'my_custom_post_types');

//Rewrite slugs and such when plugin is activated or deactivated
function my_rewrite_flush() {
    my_custom_post_types();
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );
?>
