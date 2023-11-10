<?php

require_once 'custom-elementor.php';

// dynamic menu
register_nav_menus(
    array(
        'primary-menu' => 'Top menu',
        'footer-menu' => 'Footer menu'
    )
);

// // dynamic logo
// add_theme_support('custom-header');

// Header logo and Footer Logo setting
function theme_customizer_settings($wp_customize) {
    $wp_customize->add_section('header_logo_section', array(
        'title' => __('Header Logo', 'text-domain'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('header_logo_setting', array(
        'default' => get_template_directory_uri() . '/images/logo.png', // Set the default logo
        'transport' => 'refresh', // Choose the refresh option
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_logo_setting', array(
        'label' => __('Upload Header Logo', 'text-domain'),
        'section' => 'header_logo_section',
        'settings' => 'header_logo_setting',
    )));



    // Add Footer Logo section
    $wp_customize->add_section('footer_logo_section', array(
        'title' => __('Footer Logo', 'text-domain'),
        'priority' => 35, // Set the priority as needed
    ));

    // Add Footer Logo Setting
    $wp_customize->add_setting('footer_logo_setting', array(
        'default' => get_template_directory_uri() . '/images/new_footer_logo.png', // Set the default logo
        'transport' => 'refresh', // Choose the refresh option
    ));

    // Add Footer Logo Control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo_setting', array(
        'label' => __('Upload Footer Logo', 'text-domain'),
        'section' => 'footer_logo_section',
        'settings' => 'footer_logo_setting',
    )));



    // Add Footer Text section
    $wp_customize->add_section('footer_text_section', array(
        'title' => __('Footer Text', 'text-domain'),
        'priority' => 40, // Set the priority as needed
    ));

    // Add Footer Text Setting
    $wp_customize->add_setting('footer_text_setting', array(
        'default' => '© 2020 Prop Fund Prop. All rights reserved.', // Set the default text
        'sanitize_callback' => 'sanitize_text_field', // Sanitize the input
        'transport' => 'refresh', // Choose the transport option
    ));

    // Add Footer Text Control
    $wp_customize->add_control('footer_text_setting', array(
        'label' => __('All Rights Reserved Text', 'text-domain'),
        'section' => 'footer_text_section',
        'settings' => 'footer_text_setting',
        'type' => 'text',
    ));
}

add_action('customize_register', 'theme_customizer_settings');


function enqueue_elementor_style() {
    wp_enqueue_style('style-css', get_template_directory_uri() . '/style.css', array(), null, 'all');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), null, 'all');
    wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), null, 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_elementor_style');

function enqueue_elementor_script() {
    wp_enqueue_script('jquery', get_template_directory_uri().'/assets/js/jquery.min.js', array(), null, true);
    wp_enqueue_script('jquery', get_template_directory_uri().'/assets/js/slider.js', array(), null, true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js', array(), null, true);
    
}
add_action('wp_enqueue_scripts', 'enqueue_elementor_script');

// Register Elementor location for header and footer
if (function_exists('elementor_theme_register_locations')) {
    elementor_theme_register_locations(array('header', 'footer'));
}


// Custom Social Links
function customizer_social_media_settings($wp_customize) {
    $social_media_sites = array('telegram', 'whatsapp', 'facebook', 'instagram', 'discord');

    $default_links = array(
        'telegram' => 'https://t.me/YourChannel',
        'whatsapp' => 'https://wa.me/1234567890',
        'facebook' => 'https://www.facebook.com/YourPage',
        'instagram' => 'https://www.instagram.com/YourAccount',
        'discord' => 'https://discord.gg/YourServer',
    );

    $wp_customize->add_section('social_media_links', array(
        'title' => 'Social Media Links',
        'priority' => 30,
    ));

    foreach ($social_media_sites as $site) {
        $wp_customize->add_setting($site . '_link', array(
            'default' => $default_links[$site],
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control($site . '_link', array(
            'label' => ucfirst($site) . ' Link',
            'section' => 'social_media_links',
            'type' => 'url',
        ));
    }
}

add_action('customize_register', 'customizer_social_media_settings');




// Create an array with the page names
$page_titles = array(
    'About',
    'Contact',
    'Home',
    'Services',
);

// Loop through the array and create pages with the titles
foreach ($page_titles as $title) {
    $page_exists = get_page_by_title($title); // Check if the page exists already
    if ($page_exists === null) {
        $page = array(
            'post_type'    => 'page',
            'post_title'   => $title,
            'post_status'  => 'publish',
        );
        wp_insert_post($page);
    }
}


// Set Default Site Title
function set_default_site_title($title) {
    if (empty($title)) {
        return 'Prop Fund Pros'; // Set your default site title here
    }
    return $title;
}
add_filter('pre_option_blogname', 'set_default_site_title');

// Set Default Site Title
function set_default_tagline($description) {
    if (empty($description)) {
        return 'Acing Your Prop Firm Challenge Just Got Easier'; // Your default tagline here
    }
    return $description;
}
add_filter('pre_option_blogdescription', 'set_default_tagline');


  
?>

