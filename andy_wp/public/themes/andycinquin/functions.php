<?php

use App\Blocs\BlocArticle;
use App\Blocs\BlocHero;

function andycinquin_enqueue_styles_scripts()
{
    if (!is_home() && !is_single()) {
//        différent des articles / et page d'article général (home : general articles ) & single (article spécifique)

    }

    if (is_page('contact')) {
//        page de contact

    }

    if (is_front_page()) {
//        page d'accueil

    } else if (is_home() || is_single()) {
        if (is_home()) {
//        blog general
        } else {
//        article spécifique
        }
//        un des deux (article / blog général)

    }
    $dependencies = [];
    wp_register_style('btn', get_template_directory_uri() . '/assets/css/btn.css');
    $dependencies[] = 'btn';
    wp_register_style('carroussel', get_template_directory_uri() . '/assets/css/carroussel.css');
    $dependencies[] = 'carroussel';
    wp_register_style('distorsions', get_template_directory_uri() . '/assets/css/distorsions.css');
    $dependencies[] = 'distorsions';
    wp_register_style('main', get_template_directory_uri() . '/assets/css/main.css');
    $dependencies[] = 'main';
    wp_register_style('nav', get_template_directory_uri() . '/assets/css/nav.css');
    $dependencies[] = 'nav';

    wp_enqueue_style('andycinquin-style', get_stylesheet_uri(), $dependencies);

    wp_enqueue_script('andycinquin-script-nav', get_template_directory_uri() . '/assets/js/nav.js', 'andycinquin-script-nav', '1', true);

    if (!is_admin()) {
        // optimisation
        wp_dequeue_style('wp-block-library');
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('admin_print_scripts', 'print_emoji_detection_script');
        remove_action('wp_print_styles', 'print_emoji_styles');
        remove_action('admin_print_styles', 'print_emoji_styles');

        remove_filter('the_content_feed', 'wp_staticize_emoji');
        remove_filter('comment_text_rss', 'wp_staticize_emoji');

        wp_deregister_script('wp-embed');
        wp_deregister_script('wp-emoji');
        wp_deregister_script('jquery');  // Bonus: remove jquery too if it's not required
    }
}

add_action('wp_enqueue_scripts', 'andycinquin_enqueue_styles_scripts');

add_action('after_setup_theme', function () {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    register_nav_menu('andycinquin_menu', 'menu personnalisée pour andycinquin');
    add_theme_support('editor-styles');
});

add_filter('block_categories_all', function (array $categories) {
    return array_merge(
        $categories,
        [
            [
                'slug' => 'andycinquin',
                'title' => 'Andy Cinquin',
            ],
        ]
    );
}, 10, 1);

BlocHero::register();
BlocArticle::register();
