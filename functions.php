<?php
/**
 * Child Theme Functions
 */


/*
 * Enqueue the parent style.css
 *
 * twentyfifteen parent theme for twentfifteen-child
 *
 */
add_action( 'wp_enqueue_scripts', 'aa_theme_enqueue_styles' );
function aa_theme_enqueue_styles() {

    // Parent style variable
    $parent_style = 'twentytwelve';
    // Enqueue Parent theme's style
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

    // Enqueue Child theme's style and ensure it is
    // Setting 'parent-style' as a dependency will ensure that the child theme stylesheet loads after it.
    wp_enqueue_style( 'give-email-template-demo', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ) );
}

function get_give_email_images() {
	$images = get_stylesheet_directory_uri() . '/give/emails/img/';
	
	return $images;
}