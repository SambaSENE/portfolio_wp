<?php
/**
 * Plugin Name: Font Awesome Icon Plugin
 * Plugin URI: https://example.com/font-awesome-icon-plugin
 * Description: A simple plugin to add Font Awesome icons to your WordPress site.
 * Version: 1.0.0
 * Author: Samba
 * Author URI: https://example.com
 * License: GPL-2.0+
 * Text Domain: font-awesome-icon-plugin
 */

// Enqueue Font Awesome stylesheet
function fa_icon_plugin_enqueue_styles() {
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css', array(), '5.15.3' );
}
add_action( 'wp_enqueue_scripts', 'fa_icon_plugin_enqueue_styles' );

// Add Font Awesome icon shortcode
function fa_icon_plugin_shortcode( $atts ) {
    $icon = isset( $atts['icon'] ) ? $atts['icon'] : 'fa-question-circle';
    return '<i class="fas ' . esc_attr( $icon ) . '"></i>';
}
add_shortcode( 'fa_icon', 'fa_icon_plugin_shortcode' );
