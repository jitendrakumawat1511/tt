<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TEVILY
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'tevily' ); ?></a>

        <header id="masthead" class="site-header  py-2 shadow p-3 bg-white rounded header-font-color">
            <div class="container">
                <nav class="navbar navbar-expand-lg ">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="<?php echo site_url();   ?>">
                           <?php $logo = get_header_image();
                            echo '<img src="' . esc_url($logo) . '" alt="Logo">'; ?>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end gap-5" id="navbarNav">
                            <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'menu-1',
                                    'container' => true,
                                    'menu_class' => 'navbar-nav',
                                    'fallback_cb' => '__return_false',
                                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                    'depth' => 2,
                                    'walker' => new Bootstrap_5_WP_Navwalker(),
                                ));
                            ?>

                            <div class="header-search" id="header-search">
                                <i class="fa-solid fa-magnifying-glass header-icon" id="header-icon"></i>
                                <div class="search-input shadow-lg  bg-white rounded" id="search-input">
                                    <input type="search">
                                </div>
                            </div>
                            <div class="header-logins">
                                <i class="fa-regular fa-circle-user header-icon"></i>
                            </div>
                            <div id="mobile-menu-toggle">
                                <i class="fa-solid fa-burger"></i>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="toggle-menu"></div>
            <div id="back-to-top"></div>

        </header><!-- #masthead -->