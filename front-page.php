<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TEVILY
 */

get_header();
?>

	<main ">

        <?php
            get_template_part( 'template-parts/partials/home', 'banner' );
            get_template_part( '/template-parts/sections/destination-list');
            get_template_part( '/template-parts/sections/featured-tour' );
            get_template_part( '/template-parts/sections/popular-tours' );
            get_template_part( '/template-parts/sections/prectice' );
            get_template_part( '/template-parts/partials/popup' );
            get_template_part( '/template-parts/sections/form' );
           
            require get_template_directory() . '/tab.php';
            require get_template_directory() . '/accourdion.php';
            
        ?>

		
	</main><!-- #main -->

<?php

get_footer();
