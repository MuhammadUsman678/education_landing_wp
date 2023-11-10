<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class Contact_Widget extends Widget_Base
{
    public function get_name()
    {
        return 'contact-widget';
    }

    public function get_title()
    {
        return __('Contact Us Section', 'text-domain');
    }

    public function get_icon()
    {
        return 'eicon-form-horizontal';
    }

    public function get_categories()
    {
        return ['basic'];
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'contact_section',
            [
                'label' => __('Contact Us Section', 'text-domain'),
            ]
        );

        $this->add_control(
            'contact_description',
            [
                'label' => __('Description', 'text-domain'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('For any questions or concerns or if you prefer to speak with one of our sales representative please contact our support team bellow'),
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
            'about_section',
            [
                'label' => __('About Us Section', 'text-domain'),
            ]
        );

        $this->add_control(
            'about_description',
            [
                'label' => __('Description', 'text-domain'),
                'type' => Controls_Manager::WYSIWYG,
                'default' => '<p class="contact_description">
                Our company is based in the USA helping clients all over the world
                with an unique solution in place to assist with the technical,
                fundamental, and psychological growth in any trader. "Our team of
                traders have more than 10 years of live experience within the
                largest financial market in the world".
              </p>
              <p class="contact_description">
                  And since 2019 our company is on a mission to help you complete your Challenge and get your Account Funded.
                </p>
                <p class="contact_description">
                  Keep in mind unfortunately nothing is 100% guaranteed in real trading. In a rare occasion we don’t pass we will try again at no extra cost to you. You only pay us once
                </p>
                <p class="contact_description">For more information please send us a message and one of our team members will walk you through the entire process and make sure you understand everything before starting.</p>',
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
?>


        <!--- Contact Section -->

        <div class="contactSection">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="contact_title mt-5">Contact Us</h2>
                        <p class="contact_description">
                            <?php echo esc_html($settings['contact_description']); ?>
                        </p>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/down_white.png" alt="" /><br />
                        <button class="btn btn_theme mt-3">
                            Message us to get started
                        </button>
                    </div>
                    <div class="col-12 text-center contact_description">
                        <h2 class="contact_title mt-5">About Us</h2>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/down_white.png" class="my-2" alt="" />
                        <p class="contact_description">
                            <?php echo $settings['about_description']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }


    protected function content_template()
    {
    ?>
        <# var contactDescription=settings.contact_description; var aboutDescription=settings.about_description; #>

            <!--- Contact Section -->
            <div class="contactSection">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2 class="contact_title mt-5">Contact Us</h2>
                            <p class="contact_description">{{{ contactDescription }}}</p>
                            <img src="{{{ elementorFrontend.config.base + '/images/down_white.png' }}}" alt="" /><br />
                            <button class="btn btn_theme mt-3">
                                Message us to get started
                            </button>
                        </div>
                        <div class="col-12 text-center">
                            <h2 class="contact_title mt-5">About Us</h2>
                            <img src="{{{ elementorFrontend.config.base + '/images/down_white.png' }}}" class="my-2" alt="" />
                            {{{ aboutDescription }}}
                        </div>
                    </div>
                </div>
            </div>
    <?php
    }
}
