<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class HeroSection extends Widget_Base
{

    public function get_name()
    {
        return 'hero-section';
    }

    public function get_title()
    {
        return 'Custom Hero Section';
    }

    public function get_icon()
    {
        return 'eicon-sidebar';
    }

    public function get_categories()
    {
        return ['basic'];
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'section_content',
            [
                'label' => 'Hero Section',
            ]
        );

        $this->add_control(
            'heading',
            [
                'label' => 'Heading',
                'type' => Controls_Manager::TEXT,
                'default' => 'Acing Your Prop Firm Challenge Just Got Easier', // Set a default heading
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => 'Description',
                'type' => Controls_Manager::TEXT,
                'default' => 'Benefit from the art of knowledge market manipulation', // Set a default description
            ]
        );

        $currencyTitles = [
            'Bitcoin',
            'EUR/USD',
            'Ethereum',
            'US 100',
            'Ethereum'
        ];



        $currencyContents = [
            '28327 -1 (-0.00%)',
            '1.05342 +0.07(+0.01%)',
            '28322 -1 (-0.00%)',
            '14887.5 -57.8 (-0.39%)',
            '28322 -8 (-0.03%)'
        ];

        $currencyImages = [
            get_template_directory_uri() . '/images/Bitcoin.png',
            get_template_directory_uri() . '/images/flags.png',
            get_template_directory_uri() . '/images/Etherium.png',
            get_template_directory_uri() . '/images/usd.png',
            get_template_directory_uri() . '/images/Etherium.png',
        ];


        // Add controls for each core value
        for ($i = 1; $i <= 5; $i++) {
            $this->add_control(
                "currency_{$i}_title",
                [
                    'label' => "Currency {$i} Title",
                    'type' => Controls_Manager::TEXT,
                    'default' => $currencyTitles[$i - 1],
                ]
            );

            $this->add_control(
                "currency_{$i}_content",
                [
                    'label' => "Currency  {$i} Value",
                    'type' => Controls_Manager::TEXTAREA,
                    'default' => $currencyContents[$i - 1],
                ]
            );

            $this->add_control(
                "currency_{$i}_image",
                [
                    'label' => "Currency {$i} Image",
                    'type' => Controls_Manager::MEDIA,
                    'default' => [
                        'url' => $currencyImages[$i - 1],
                    ],
                ]
            );
        }


        $this->end_controls_section();
    }


    protected function render()
    {
        $settings = $this->get_settings_for_display();

        $this->add_inline_editing_attributes('heading', 'basic');
        $this->add_render_attribute(
            'heading',
            [
                'class' => ['advertisement__label-heading'],
            ]
        );

?>

        <div class="heroSection">
            <div class="container">
                <div class="row">
                    <div class="bannerSection">
                        <div class="col-lg-12 text-center">
                            <h1 class="banner_heading">
                                <?php echo esc_html($settings['heading']); ?>
                            </h1>
                            <p class="banner_description">
                                <?php echo esc_html($settings['description']); ?>
                            </p>
                            <button class="btn btn_theme">Sign Up</button>
                            <button class="btn btn_theme_outline ms-lg-3 ms-0 mt-lg-0 mt-3">
                                Find out More
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Currency Section -->
        <div class="stockSection py-4">
            <div class="container-fluid">
                <div class="row">
                    <?php for ($i = 1; $i <= 5; $i++) { ?>
                        <div class="col-lg col-md-6 col-sm-6 text-center my-lg-0 my-3">
                            <img src="<?php echo esc_url($settings['currency_' . $i . '_image']['url']); ?>" alt="<?php echo esc_attr($settings['currency_' . $i . '_title']); ?>" />
                            <h2 class="currency_name"><?php echo esc_html($settings['currency_' . $i . '_title']); ?></h2>
                            <p class="difference"><?php echo esc_html($settings['currency_' . $i . '_content']); ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php
    }
}
