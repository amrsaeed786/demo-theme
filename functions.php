<?php
/**
 * Theme functions and definitions
 *
 * @package myTheme
 */
// Add this in functions.php or a custom plugin
function add_custom_css()
{
    wp_enqueue_style(
        "my-custom-style",
        get_template_directory_uri() . "/css/custom-style.css",
        [],
        "1.0",
        "all"
    );

    wp_enqueue_style("google-font", "https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap", array(), null, "all");
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css", array(), "5.1", "all");
    wp_enqueue_script(
        "custom-script",
        get_template_directory_uri() . "/js/custom-script.js",
        array("jquery"),
        "1.0",
        true
    );
    wp_enqueue_script(
        "bootstrap-script",
        "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js",
        array("jquery"),
        "5.1",
        true
    );
}
add_action("wp_enqueue_scripts", "add_custom_css");



function mytheme_setup()
{
    register_nav_menus(
        array(
            "primary_menu" => "Primary Menu",
            "footer_menu" => "Footer Menu",
        )
    );
    add_theme_support('post-thumbnails');
    add_theme_support("custom-logo", array(
        "width" => 200,
        "height" => 100,
        "flex-width" => true,
        "flex-height" => true
    ));
}
add_action("after_setup_theme", "mytheme_setup");
add_action("widgets_init", "sidebar_bloginfo");
function sidebar_bloginfo()
{
    register_sidebar(
        array(
            "name" => "Blog Sidebar one",
            "id" => "sidebar-blog",
            "description" => "Widgets in this area will be shown on blog posts and archive pages.",
            "before_widget" => "<div class='widget-wrapper'>",
            "after_widget" => "</div>",
            "before_title" => "<h3 class='widget-title'>",
            "after_title" => "</h3>"
        )

    );
    register_sidebar(
        array(
            "name" => "Service One",
            "id" => "service-1",
            "description" => "First service widget area.",
            "before_widget" => "<div class='widget-wrapper'>",
            "after_widget" => "</div>",
            "before_title" => "<h3 class='widget-title'>",
            "after_title" => "</h3>"
        )

    );
    register_sidebar(
        array(
            "name" => "Service Two",
            "id" => "service-2",
            "description" => "Second service widget area.",
            "before_widget" => "<div class='widget-wrapper'>",
            "after_widget" => "</div>",
            "before_title" => "<h3 class='widget-title'>",
            "after_title" => "</h3>"
        )

    );
    register_sidebar(
        array(
            "name" => "Service Three",
            "id" => "service-3",
            "description" => "Third service widget area.",
            "before_widget" => "<div class='widget-wrapper'>",
            "after_widget" => "</div>",
            "before_title" => "<h3 class='widget-title'>",
            "after_title" => "</h3>"
        )

    );
}