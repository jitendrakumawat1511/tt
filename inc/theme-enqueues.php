<?php
/**
 * Enqueue scripts and styles.
 */
function tevily_scripts() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.min.css', [], '5.3.7');
    wp_enqueue_style( 'tevily-style', get_stylesheet_uri(), array(), _S_VERSION );
   	wp_style_add_data( 'tevily-style', 'rtl', 'replace' );
	wp_enqueue_style(
    'font-awesome',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css',
    array(),
    '6.7.2'
);	
wp_enqueue_style(
    'swiper-css',
    'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css',
    array(),
    '6.7.2'
);

wp_enqueue_script( 'swiper-script','https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js' );
	wp_enqueue_script( 'bootstrap-script',get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js', [], '5.3.7', true  );
	wp_enqueue_script( 'jquery','https://code.jquery.com/jquery-3.7.1.min.js' );
	wp_enqueue_script( 'script',get_template_directory_uri().'/assets/js/script.js' );
	wp_enqueue_script( 'script-js',get_template_directory_uri().'/assets/js/customizer.js' );
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tevily_scripts' );