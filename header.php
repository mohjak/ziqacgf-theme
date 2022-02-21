<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <header> section and everything up until </header>
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
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
    <header class="header" style="background: url(<?php echo get_theme_file_uri('assets/images/bg.svg') ?>)">
        <section class="section">
            <div class="container">

                <!-- <div class="has-text-centered m-3">
                    <a href="/" class="has-text-white">العربية</a>
                    <a href="/index-en.html" class="has-text-white">English</a>
                </div> -->

                <h1 class="title has-text-white has-text-centered">
                    <?php bloginfo('title') ?>
                </h1>

                <h2 class="subtitle has-text-white has-text-centered">
                    <?php the_title() ?>
                </h2>

                <img src="<?php echo get_theme_file_uri('assets/images/aya2.bc77404d.png') ?>" alt="<?php _e('Fasting Aya', 'ziqacgf') ?>">

                <h1 class="title has-text-white has-text-centered"><?php _e('Ramadan Competition', 'ziqacgf') ?></h1>

                <div class="is-flex is-justify-content-center">
                    <img src="<?php echo get_theme_file_uri('assets/images/logo_ramadhan.svg') ?>" alt="<?php _e('Ramadan Logo', 'ziqacgf') ?>">
                </div>

                <div class="is-flex is-justify-content-center">
                    <a href="<?php echo site_url('/terms') ?>" class="button is-rounded"><?php _e('Terms and Conditions', 'ziqacgf') ?></a>
                </div>
            </div>
        </section>
    </header>