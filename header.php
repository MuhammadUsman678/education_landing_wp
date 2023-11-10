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
    <style>
        .heroSection {
            background-image: url('<?php echo get_template_directory_uri(); ?>/images/background_img.png');
            background-size: cover;
            height: 764px;
            position: relative;
            /* Additional styles */
        }

        .contactSection {
            background-image: url('<?php echo get_template_directory_uri(); ?>/images/contactbg.png');
            background-position: contain;
        }
    </style>
</head>

<body <?php body_class(); ?>>
    <!-- header -->
    <header>

        <!-- Navbar -->
        <div class="<?php echo (is_front_page()) ? 'isForHome' : '' ?>" id="mainHeader">
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
                    <div class="col-lg-6 col-8 text-end mt-2 isForHome">
                        <div class="icons_container mt-4">
                            <?php
                            $social_media_sites = array('telegram', 'whatsapp', 'facebook', 'instagram', 'discord'); // Should match the settings

                            foreach ($social_media_sites as $site) {
                                $link = get_theme_mod($site . '_link');
                                if (!empty($link)) {
                                    $icon = str_replace('_', ' ', $site); // Example: WhatsApp becomes WhatsApp

                                    echo '<a href="' . esc_url($link) . '" class="text-decoration-none">
                                            <img src="' . get_template_directory_uri() . '/images/' . $site . '.png" class="mx-2" alt="' . $icon . '" />
                                        </a>';
                                } else {
                            ?>
                                    <a href="#" class="text-decoration-none">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $site ?>.png" class="mx-2" alt="" />
                                    </a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>