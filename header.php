<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div id="page" class="site">
        <header>
            <section class="top-bar">
                <div class="container mt-2 mb-2">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="logo">
                                <?php the_custom_logo(); ?>
                            </div>
                        </div>
                        <div class="col-sm-6">

                            <div class="search-bar d-flex justify-content-end">
                                <?php get_search_form(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="menu-area">
                <nav class="main-menu">
                    <button class="check-button">
                        <div class="menu-icon">
                            <div class="bar1"></div>
                            <div class="bar2"></div>
                            <div class="bar3"></div>
                        </div>
                    </button>
                    <?php wp_nav_menu(array("theme_location" => "primary_menu", "depth" => 2)) ?>
                </nav>
            </section>
        </header>