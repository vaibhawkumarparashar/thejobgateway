<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="container-xxl bg-white p-0">
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand p-0">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        echo '<h1 class="m-0">' . get_bloginfo('name') . '</h1>';
                    }
                    ?>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <?php
                    wp_nav_menu([
                        'theme_location'  => 'primary',
                        'container'       => false,
                        'menu_class'      => 'navbar-nav ms-auto py-0',
                        'fallback_cb'     => false,
                        'depth'           => 2,
                        'walker'          => new WP_Bootstrap_Navwalker(),
                    ]);
                    ?>
                    <a href="/register" class="btn btn-light rounded-pill text-primary py-2 px-4 ms-lg-5">Register</a>
                </div>
            </nav>
        </div>