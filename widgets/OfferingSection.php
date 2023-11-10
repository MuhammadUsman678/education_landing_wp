<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}


class Offering_Widget extends Widget_Base
{

    public function get_name()
    {
        return 'offering-widget';
    }

    public function get_title()
    {
        return __('Offering Widget', 'text-domain');
    }

    public function get_icon()
    {
        return 'eicon-post';
    }

    public function get_categories()
    {
        return ['basic'];
    }

    protected function _register_controls()
    {
        // Section  Controls
        $this->start_controls_section(
            'offers_section',
            [
                'label' => __('Offering', 'text-domain'),
            ]
        );

        $this->add_control(
            'sub_title_off',
            [
                'label' => __('Sub Title', 'text-domain'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('We offer two different strategies to help you beat your next prop firm challenge.', 'text-domain'),
            ]
        );

        $this->end_controls_section();


        // Section 1  Controls
        $this->start_controls_section(
            'section_1',
            [
                'label' => __('Section 1', 'text-domain'),
            ]
        );

        $this->add_control(
            'content_1',
            [
                'label' => __('Content', 'text-domain'),
                'type' => Controls_Manager::WYSIWYG,
                'default' => '<p class="why_choose_description mt-3">
                High Frequency Trading or simply HFT is a strategy of
                automatically executing trades that last milliseconds, in which
                traders make profits from small price disparities.
              </p>
              <p class="why_choose_description mt-4">
                HFT has important characteristics such as high speed, short time
                frame, and large numbers of trades.The trades must be done on
                high-speed computers, using certain algorithms, popularly known as
                Expert Advisors.Not just anyone (trader) has the knowledge to work
                with this type of strategy. It demands experience about latency,
                spread, risk management.
              </p>
              <p class="why_choose_description mt-3">
                The lack of experience makes you lose your account very quickly.In
                our company we have a highly experienced team with more than 10
                years on the Forex market.
              </p>', 'text-domain',
            ]
        );

        $this->add_control(
            'success_rate_1',
            [
                'label' => __('Success Rate', 'text-domain'),
                'type' => Controls_Manager::TEXT,
                'default' => __('100%', 'text-domain'),
            ]
        );

        $this->add_control(
            'completion_time_1',
            [
                'label' => __('Completion Time', 'text-domain'),
                'type' => Controls_Manager::TEXT,
                'default' => __('1-5 days (per phase)', 'text-domain'),
            ]
        );

        $this->add_control(
            'client_image_1',
            [
                'label' => 'Client Image',
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/images/partner12.png',
                ],
            ]
        );

        $this->add_control(
            'client_image_2',
            [
                'label' => 'Client Image',
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/images/partner11.png',
                ],
            ]
        );

        $this->add_control(
            'client_image_3',
            [
                'label' => 'Client Image',
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/images/partner15.png',
                ],
            ]
        );

        $this->add_control(
            'client_image_4',
            [
                'label' => 'Client Image',
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/images/partner14.png',
                ],
            ]
        );

        $this->add_control(
            'client_image_5',
            [
                'label' => 'Client Image',
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/images/partner13.png',
                ],
            ]
        );

        // Add 'Clients' type - Choose Images Loop control

        $this->end_controls_section();

        // Section 2 Controls
        $this->start_controls_section(
            'section_2',
            [
                'label' => __('Section 2', 'text-domain'),
            ]
        );

        $this->add_control(
            'content_2',
            [
                'label' => __('Content', 'text-domain'),
                'type' => Controls_Manager::WYSIWYG,
                'default' => '<p class="why_choose_description mt-3">
                High Frequency Trading or simply HFT is a strategy of
                automatically executing trades that last milliseconds, in which
                traders make profits from small price disparities.
              </p>
              <p class="why_choose_description mt-4">
                HFT has important characteristics such as high speed, short time
                frame, and large numbers of trades.The trades must be done on
                high-speed computers, using certain algorithms, popularly known as
                Expert Advisors.Not just anyone (trader) has the knowledge to work
                with this type of strategy. It demands experience about latency,
                spread, risk management.
              </p>
              <p class="why_choose_description mt-3">
                The lack of experience makes you lose your account very quickly.In
                our company we have a highly experienced team with more than 10
                years on the Forex market.
              </p>', 'text-domain',
            ]
        );

        $this->add_control(
            'success_rate_2',
            [
                'label' => __('Success Rate', 'text-domain'),
                'type' => Controls_Manager::TEXT,
                'default' => __('75%', 'text-domain'),
            ]
        );

        $this->add_control(
            'completion_time_2',
            [
                'label' => __('Completion Time', 'text-domain'),
                'type' => Controls_Manager::TEXT,
                'default' => __('21 Days', 'text-domain'),
            ]
        );


        $this->add_control(
            'client_image_6',
            [
                'label' => 'Client Image',
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/images/partner2.png',
                ],
            ]
        );

        $this->add_control(
            'client_image_7',
            [
                'label' => 'Client Image',
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/images/partner3.png',
                ],
            ]
        );

        $this->add_control(
            'client_image_8',
            [
                'label' => 'Client Image',
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/images/partnernew.png',
                ],
            ]
        );

        $this->add_control(
            'client_image_9',
            [
                'label' => 'Client Image',
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/images/partnernew2.png',
                ],
            ]
        );

        $this->add_control(
            'client_image_10',
            [
                'label' => 'Client Image',
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/images/parternew3.png',
                ],
            ]
        );

        // Add 'Clients' type - Choose Images Loop control

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        // Section 1 HTML structure
?>

        <div class="why_us_single_section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="why_choose_title mt-5">Our Offerings</h2>

                        <p class="why_choose_description mt-3">
                            <?php echo esc_html($settings['sub_title_off']); ?>
                        </p>
                        <a href="javascript:void(0);">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/down_white.png" class="my-3" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="why_us_single_section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="why_choose_heading mt-2">Headlines</h2>
                    </div>
                    <div class="col-12">
                            <?php echo $settings['content_1']; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="success_rate">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mt-4">
                        <p class="succes_rate d-inline">Average success rate:</p>
                        <span class="succes_percent ms-2"><?php echo esc_html($settings['success_rate_1']); ?></span>
                    </div>
                    <div class="col-12 text-center mt-3">
                        <p class="succes_rate d-inline">Average time for completion:</p>
                        <span class="succes_percent ms-2"> <?php echo esc_html($settings['completion_time_1']); ?></span>
                    </div>
                    <div class="col-12 text-center mt-4">
                        <button class="btn btn_theme">Get Started Today</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="our_partners py-3 mt-5 mb-3 justify-content-space-between">
            <div class="container">
                <div class="row">
                    <div class="col-lg col-sm-12 col-md-12 text-center justify-content-center my-lg-0 my-3">
                        <img src="<?php echo esc_url($settings['client_image_1']['url']); ?>" class="mt-4" alt="" />
                    </div>
                    <div class="col-lg col-sm-12 col-md-12 text-center justify-content-center my-lg-0 my-3">
                        <img src="<?php echo esc_url($settings['client_image_2']['url']); ?>" alt="" />
                    </div>
                    <div class="col-lg col-sm-12 col-md-12 text-center justify-content-center my-lg-0 my-3">
                        <img src="<?php echo esc_url($settings['client_image_3']['url']); ?>" class="mt-4" alt="" />
                    </div>
                    <div class="col-lg col-sm-12 col-md-12 text-center justify-content-center my-lg-0 my-3">
                        <img src="<?php echo esc_url($settings['client_image_4']['url']); ?>" class="mt-4 ms-4" alt="" />
                    </div>
                    <div class="col-lg col-sm-12 col-md-12 text-center justify-content-center my-lg-0 my-3">
                        <img src="<?php echo esc_url($settings['client_image_5']['url']); ?>" class="mt-4 ms-4" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <div class="why_us_single_section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mt-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/down_white.png" alt="" />
                    </div>
                    <div class="col-12 text-center">
                        <h2 class="why_choose_heading mt-2">Headlines</h2>
                    </div>
                    <div class="col-12 text-center">
                        <?php echo $settings['content_2']; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="success_rate">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mt-4">
                        <p class="succes_rate d-inline">Average success rate:</p>
                        <span class="succes_percent ms-2"><?php echo esc_html($settings['success_rate_2']); ?></span>
                    </div>
                    <div class="col-12 text-center mt-3">
                        <p class="succes_rate d-inline">Average time for completion:</p>
                        <span class="succes_percent ms-2"> <?php echo esc_html($settings['completion_time_2']); ?></span>
                    </div>
                    <div class="col-12 text-center mt-4">
                        <button class="btn btn_theme">Get Started Today</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="our_partners py-4 mt-5 mb-0 justify-content-space-between">
            <div class="container">
                <div class="row">
                    <div class="col-lg col-sm-12 col-md-12 text-center justify-content-center my-lg-0 my-3">
                        <img src="<?php echo esc_url($settings['client_image_6']['url']); ?>" class="mt-2" alt="" />
                    </div>
                    <div class="col-lg col-sm-12 col-md-12 text-center justify-content-center my-lg-0 my-3">
                        <img src="<?php echo esc_url($settings['client_image_7']['url']); ?>" alt="" class="mt-2" />
                    </div>
                    <div class="col-lg col-sm-12 col-md-12 text-center justify-content-center my-lg-0 my-3">
                        <img src="<?php echo esc_url($settings['client_image_8']['url']); ?>" class="" alt="" />
                    </div>
                    <div class="col-lg col-sm-12 col-md-12 text-center justify-content-center my-lg-0 my-3">
                        <img src="<?php echo esc_url($settings['client_image_9']['url']); ?>" class="" alt="" />
                    </div>
                    <div class="col-lg col-sm-12 col-md-12 text-center justify-content-center my-lg-0 my-3">
                        <img src="<?php echo esc_url($settings['client_image_10']['url']); ?>" class="" alt="" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 2 HTML structure -->
        <!-- Similar structure as Section 1 -->

    <?php
    }
 
}
