<?php
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

function job_gateway_enqueue_assets()
{
    $theme_uri = get_template_directory_uri();

    // Enqueue CSS (already set previously)
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap', [], null);
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css', [], '5.10.0');
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css', [], '1.4.1');
    wp_enqueue_style('animate', $theme_uri . '/assets/lib/animate/animate.min.css', [], null);
    wp_enqueue_style('owl-carousel', $theme_uri . '/assets/lib/owlcarousel/assets/owl.carousel.min.css', [], null);
    wp_enqueue_style('bootstrap-css', $theme_uri . '/assets/css/bootstrap.min.css', [], null);
    wp_enqueue_style('job-gateway-style', $theme_uri . '/assets/css/style.css', [], null);

    // Enqueue JS
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', [], '3.4.1', true);
    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', ['jquery'], '5.0.0', true);

    wp_enqueue_script('wow', $theme_uri . '/assets/lib/wow/wow.min.js', ['jquery'], null, true);
    wp_enqueue_script('easing', $theme_uri . '/assets/lib/easing/easing.min.js', ['jquery'], null, true);
    wp_enqueue_script('waypoints', $theme_uri . '/assets/lib/waypoints/waypoints.min.js', ['jquery'], null, true);
    wp_enqueue_script('owl-carousel', $theme_uri . '/assets/lib/owlcarousel/owl.carousel.min.js', ['jquery'], null, true);

    wp_enqueue_script('job-gateway-main', $theme_uri . '/assets/js/main.js', ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', 'job_gateway_enqueue_assets');


// Theme support features
function job_gateway_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    register_nav_menus([
        'primary' => __('Primary Menu', 'the-job-gateway'),
    ]);
}
add_action('after_setup_theme', 'job_gateway_theme_setup');
