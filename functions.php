<?php


// dynamic menu
register_nav_menus(
    array(
        'primary-menu' => 'Top menu',
        'footer-menu' => 'Footer menu'
    )
);

// // dynamic logo
// add_theme_support('custom-header');

// Header logo setting
function theme_customizer_settings($wp_customize) {
    $wp_customize->add_section('header_logo_section', array(
        'title' => __('Header Logo', 'text-domain'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('header_logo_setting', array(
        'default' => '',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_logo_setting', array(
        'label' => __('Upload Header Logo', 'text-domain'),
        'section' => 'header_logo_section',
        'settings' => 'header_logo_setting',
    )));
}

add_action('customize_register', 'theme_customizer_settings');


function enqueue_elementor_style() {
    wp_enqueue_style('style-css', get_template_directory_uri() . '/style.css', array(), null, 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_elementor_style');

function enqueue_elementor_script() {
    wp_enqueue_script('script', get_template_directory_uri() . '/script.js', array(), null, true);
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), null, true);
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), null, 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_elementor_script');

// Register Elementor location for header and footer
if (function_exists('elementor_theme_register_locations')) {
    elementor_theme_register_locations(array('header', 'footer'));
}


// Create an array with the page names
$page_titles = array(
    'Home',
    'Services',
    'About',
    'Contact'
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

  
?>

