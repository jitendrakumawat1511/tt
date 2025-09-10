<?php
/**
 * TEVILY Theme Customizer
 *
 * @package TEVILY
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function tevily_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'tevily_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'tevily_customize_partial_blogdescription',
			)
		);
	}
	
}
add_action( 'customize_register', 'tevily_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function tevily_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function tevily_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function tevily_customize_preview_js() {
	wp_enqueue_script( 'tevily-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'tevily_customize_preview_js' );

function custom_post_type_register() {
    register_post_type('tour', array(
        'labels' => array(
            'name' => 'Tours',
            'singular_name' => 'Tour'
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'tours'),
        'supports' => array('title', 'editor', 'thumbnail')
    ));
	 register_taxonomy('tour_category', 'tour', array(
        'labels' => array(
            'name' => 'Tour Categories',
            'singular_name' => 'Tour Category',
        ),
        'hierarchical' => true, // like categories
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'tour-category'),
    ));

    // Taxonomy: Tour Location
    register_taxonomy('tour_location', 'tour', array(
        'labels' => array(
            'name' => 'Tour Locations',
            'singular_name' => 'Tour Location',
        ),
        'hierarchical' => true,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'tour-location'),
    ));

    // Taxonomy: Tour Duration
    register_taxonomy('tour_duration', 'tour', array(
        'labels' => array(
            'name' => 'Tour Durations',
            'singular_name' => 'Tour Duration',
        ),
        'hierarchical' => false, // like tags
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'tour-duration'),
    ));
   
	
}
add_action('init', 'custom_post_type_register');
