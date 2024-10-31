<?php
/**
 * @package Personalize
 * @version 0.2
 */
/*
Plugin Name: Personalize
Plugin URI: http://wordpress.org/plugins/personalize/
Description: Simple personalization tools for wordpress
Author: Innoport Studio
Version: 0.2
Author URI: https://innoport.io
*/

function ip_personalize_shortcode( $atts = array(), $content = null, $tag = '' ) {
	$atts = array_change_key_case( (array)$atts, CASE_LOWER );
	extract( shortcode_atts(
			array(
				'param'		=> false
			),
			$atts,
			'ip_personalize'
		) );
	if( $param == false || !isset( $_GET[ $param ] ) ) {
		return $content;
	}
	return $_GET[ $param ];
}

add_shortcode( 'personalize', 'ip_personalize_shortcode' );

function ip_personalize_enqueue_scripts() {   
    wp_enqueue_script( 'my_custom_script', trailingslashit( plugin_dir_url( __FILE__ ) ) . 'assets/personalize.js', array(), '123' );
}
add_action('wp_enqueue_scripts', 'ip_personalize_enqueue_scripts');