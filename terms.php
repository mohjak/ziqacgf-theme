<?php

/**
 * The terms page template
 * 
 * Template Name: Terms
 * 
 * @package ziqacgf-theme
 */

$copyright = sprintf(esc_html__('All rights reserved to website %1$s %2$s', 'ziqacgf'), 'IslamQA', $year)
?>

<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" type="image/png" href="<?php echo get_theme_file_uri('assets/images/favicons/favicon.ico') ?>" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_theme_file_uri('assets/images/favicons/apple-icon-57x57.png') ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_theme_file_uri('assets/images/favicons/apple-icon-60x60.png') ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_theme_file_uri('assets/images/favicons/apple-icon-72x72.png') ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_theme_file_uri('assets/images/favicons/apple-icon-76x76.png') ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_theme_file_uri('assets/images/favicons/apple-icon-114x114.png') ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_theme_file_uri('assets/images/favicons/apple-icon-120x120.png') ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_theme_file_uri('assets/images/favicons/apple-icon-144x144.png') ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_theme_file_uri('assets/images/favicons/apple-icon-152x152.png') ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_theme_file_uri('assets/images/favicons/apple-icon-180x180.png') ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_theme_file_uri('assets/images/favicons/android-icon-192x192.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_theme_file_uri('assets/images/favicons/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_theme_file_uri('assets/images/favicons/favicon-96x96.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_theme_file_uri('assets/images/favicons/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?php echo get_theme_file_uri('assets/images/favicons/manifest.json') ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo get_theme_file_uri('assets/images/favicons/ms-icon-144x144.png') ?>">
    <meta name="theme-color" content="#ffffff">

    <meta name="description" content="<?php bloginfo('name'); ?>">
    <meta name="copyright" content="<?php echo $copyright ?>">
    <meta name="web_author" content="zadgroup.net">

    <meta property="og:title" content="<?php if (is_single()) {
                                            wp_title();
                                        } else {
                                            bloginfo('name');
                                        } ?>" />
    <meta property="og:site_name" content="<?php bloginfo('name') ?>" />
    <meta property="og:description" content="<?php bloginfo('description') ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="<?php get_locale() ?>" />
    <meta property="og:image" content="<?php echo get_theme_file_uri('assets/images/ramadan-quiz-hero.png') ?>" />
    <meta property="og:url" content="<?php echo get_permalink() ?>" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@IslamQAcom" />
    <meta name="twitter:title" content="<?php if (is_single()) {
                                            wp_title();
                                        } else {
                                            bloginfo('name');
                                        } ?>">
    <meta name="twitter:description" content="<?php bloginfo('description') ?>">
    <meta name="twitter:creator" content="@IslamQAcom" />
    <meta name="twitter:image:src" content="<?php echo get_theme_file_uri('assets/images/ramadan-quiz-hero.png') ?>">
    <meta name="twitter:domain" content="<?php echo $_SERVER['SERVER_NAME'] ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class('ziqacgf-body is-flex is-flex-direction-column'); ?>>
    <header class="header">
        <section class="navbar-section section">
            <div class="container">
                <nav class="navbar" role="navigation" aria-label="main navigation">
                    <div class="navbar-brand">
                        <div class="site-header__logo">
                            <div class="site-header__logo__inner">
                                <a class="" href="<?php echo site_url() ?>">
                                    <img width="171" height="47" src="<?php echo get_theme_file_uri('assets/images/logo_islamQA.svg') ?>" alt="IslamQA Competitions">
                                </a>
                            </div>
                        </div>
                        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="header-nav-menu">
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>

                    <div id="header-nav-menu" class="navbar-menu">
                        <div class="navbar-end">
                            <?php wp_nav_menu(array(
                                'theme-location' => 'the-header-nav-location', //change it according to your register_nav_menus() function
                                'depth'          => 2,
                                'menu'           => 'Main menu - EN',
                                'container'      => '',
                                'menu_class'     => '',
                                'items_wrap'     => '%3$s',
                                'walker'         => new Bulma_NavWalker(),
                                'fallback_cb'    => 'Bulma_NavWalker::fallback'
                            ));
                            ?>
                        </div>
                    </div>
                </nav>
            </div>
        </section>

        <section class="hero">
            <div class="container is-fluid">
                <div class="hero-body is-flex">
                    <div class="section">
                        <div class="is-flex is-justify-content-center">
                            <img src="<?php echo get_theme_file_uri('assets/images/logo_ramadhan.svg') ?>" alt="<?php _e('Ramadan Logo', 'ziqacgf') ?>">
                        </div>
                    </div>

                    <div class="is-flex is-justify-content-center" style="width: 100%">
                        <div class="section">
                            <h1 class="title has-text-white has-text-centered"><?php _e('Terms And Conditions', 'ziqacgf') ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>

    <section class="section is-flex">
        <div class="container">
            <div class="card">
                <div class="card-content">
                    <div class="content">
                        <?php the_content() ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    get_footer()
    ?>