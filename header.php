<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <?php wp_head(); ?>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css" />
</head>
<body <?php body_class(); ?>>
    <!-- header -->
    <header>
        <!--- Main Hero Section -->
        <div class="heroSection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-4">
                        <nav class="navbar" id="header">
                            <div class="container-fluid">
                                <a href="<?php echo esc_url(home_url('/')); ?>">
                                    <img src="<?php echo get_theme_mod('header_logo_setting', get_template_directory_uri() . '/images/logo.png'); ?>" alt="<?php bloginfo('name'); ?>">
                                </a>
                            </div>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-8 text-end">
                        <div class="icons_container mt-4">
                            <!-- Your icon images here -->
                            <img src="<?php echo get_template_directory_uri(); ?>/images/send.png" class="mx-2" alt="" />
                            <img src="<?php echo get_template_directory_uri(); ?>/images/Frame.png" class="mx-2" alt="" />
                            <img src="<?php echo get_template_directory_uri(); ?>/images/Frame2.png" class="mx-2" alt="" />
                            <img src="<?php echo get_template_directory_uri(); ?>/images/Frame3.png" class="mx-2" alt="" />
                            <img src="<?php echo get_template_directory_uri(); ?>/images/Frame4.png" class="mx-2" alt="" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="bannerSection">
                        <div class="col-lg-12 text-center">
                            <h1 class="banner_heading">
                                Acing Your Prop Firm Challenge Just Got Easier
                            </h1>
                            <p class="banner_description">
                                Benefit from the art of knowledge market manipulation
                            </p>
                            <button class="btn btn_theme">Sign Up</button>
                            <button class="btn btn_theme_outline ms-lg-3 ms-0 mt-lg-0 mt-3">Find out More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
