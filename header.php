<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-gray-900 antialiased'); ?>>

<?php do_action('theme_liber_site_before'); ?>

<div id="page" class="min-h-screen flex flex-col">

    <?php do_action('theme_liber_header'); ?>

    <header>

        <div class="mx-auto">
            <div class="lg:flex lg:justify-between lg:items-center">

                <a href="#" aria-label="Toggle navigation" id="primary-menu-toggle"
                   class="lg:hidden block bg-secondary p-4 uppercase font-semibold border-x border-y border-black">

                    <svg viewBox="0 0 20 20" class="inline-block w-6 h-6 mr-2" version="1.1"
                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                            <g id="icon-shape">
                                <path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
                                      id="Combined-Shape"></path>
                            </g>
                        </g>
                    </svg>
                    LIBER
                </a>

                <?php
                wp_nav_menu(
                    array(
                        'container_id' => 'primary-menu',
                        'container_class' => 'flex-grow hidden lg:block bg-secondary',
                        'menu_class' => 'lg:flex justify-around',
                        'theme_location' => 'primary',
                        'li_class' => 'grow text-center lg:border-y-2 border-y border-x p-3 border-black uppercase font-semibold',
                        'fallback_cb' => false,
                    )
                );
                ?>
            </div>
        </div>
    </header>

    <div id="content" class="site-content flex-grow">

        <?php do_action('theme_liber_content_start'); ?>

        <main>
