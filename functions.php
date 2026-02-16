<?php
/**
 * Olivaint (Kentwood) functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Olivaint
 * @since Olivaint 1.1
 */

declare(strict_types=1);

if (!function_exists("olivaint_support")):
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since Olivaint 1.1
     *
     * @return void
     */
    function olivaint_support()
    {
        // Enqueue editor styles.
        add_editor_style("style.css");

        // Make theme available for translation.
        load_theme_textdomain("olivaint");
    }
endif;

add_action("after_setup_theme", "olivaint_support");

if (!function_exists("olivaint_styles")):
    /**
     * Enqueue styles.
     *
     * @since Olivaint 1.1
     *
     * @return void
     */
    function olivaint_styles()
    {
        // Register theme stylesheet.
        wp_register_style(
            "olivaint-style",
            get_stylesheet_directory_uri() . "/style.css",
            [],
            wp_get_theme()->get("Version"),
        );

        // Enqueue theme stylesheet.
        wp_enqueue_style("olivaint-style");
    }
endif;

add_action("wp_enqueue_scripts", "olivaint_styles");

add_action("init", function () {
    register_post_meta("page", "subtitle", [
        "show_in_rest" => true,
        "single" => true,
        "type" => "string",
        "auth_callback" => function () {
            return current_user_can("edit_posts");
        },
    ]);
});
