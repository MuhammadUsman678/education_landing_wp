<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class PFP_Process_Widget extends Widget_Base
{

    public function get_name()
    {
        return 'pfp_process_widget';
    }

    public function get_title()
    {
        return 'PFP Process Widget';
    }

    public function get_icon()
    {
        return 'eicon-gallery-grid';
    }

    public function get_categories()
    {
        return ['basic'];
    }

    protected function _register_controls()
    {
        // Process Section
        $this->start_controls_section(
            'process_section',
            [
                'label' => 'Process Section',
            ]
        );

        $this->add_control(
            'process_title',
            [
                'label' => 'Title',
                'type' => Controls_Manager::TEXT,
                'default' => 'How Prop Fund Pros Works',
            ]
        );

        $this->add_control(
            'process_image',
            [
                'label' => 'Mobile Image',
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/images/mobile.png',
                ],
            ]
        );

        $processTitlesDefaults = ['01', '02', '03', '04'];
        $processContentsDefaults = [
            '1- Purchase your challenge with the Prop Firm of your choice.(FTMO, MyForexFunds or others).',
            '1- Purchase your challenge with the Prop Firm of your choice.(FTMO, MyForexFunds or others).',
            '1- Purchase your challenge with the Prop Firm of your choice.(FTMO, MyForexFunds or others).',
            '1- Purchase your challenge with the Prop Firm of your choice.(FTMO, MyForexFunds or others).'
        ];

        
        // Add controls for each step
        for ($i = 1; $i <= 4; $i++) {
            $this->add_control(
                "step_{$i}_title",
                [
                    'label' => "Step {$i} Title",
                    'type' => Controls_Manager::TEXT,
                    'default' => $processTitlesDefaults[$i - 1],
                ]
            );

            $this->add_control(
                "step_{$i}_content",
                [
                    'label' => "Step {$i} Content",
                    'type' => Controls_Manager::TEXTAREA,
                    'default' => $processContentsDefaults[$i - 1],
                ]
            );
        }

        $this->end_controls_section();

        // Core Values Section
        $this->start_controls_section(
            'core_values_section',
            [
                'label' => 'Core Values Section',
            ]
        );


        $coreValuesTitles = [
            'Traders Team',
            'Traders Team',
            'Traders Team'
        ];



        $coreValuesContents = [
            'A team of highly experienced and skilled traders. All with more than 10 years in the financial market.',
            'A team of highly experienced and skilled traders. All with more than 10 years in the financial market.',
            'A team of highly experienced and skilled traders. All with more than 10 years in the financial market.',
        ];
        


        // Add controls for each core value
        for ($i = 1; $i <= 3; $i++) {
            $this->add_control(
                "core_value_{$i}_title",
                [
                    'label' => "Core Value {$i} Title",
                    'type' => Controls_Manager::TEXT,
                    'default' => $coreValuesTitles[$i - 1],
                ]
            );

            $this->add_control(
                "core_value_{$i}_content",
                [
                    'label' => "Core Value {$i} Content",
                    'type' => Controls_Manager::TEXTAREA,
                    'default' => $coreValuesContents[$i - 1],
                ]
            );
        }

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        // Process Section
?>

        <div class="founSection">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="mt-5"><?php echo esc_html($settings['process_title']); ?></h1>
                    </div>
                    <div class="col-lg-3 text-center mt-5">
                        <div class="contai_div">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/ion_cart.png" alt="" />
                            <h2 class="counter ms-2"><?php echo esc_html($settings["step_1_title"]); ?></h2>
                            <p class="desc_counter">
                                <?php echo esc_html($settings["step_1_content"]); ?>
                            </p>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/arrow_down.png" class="my-4" alt="" />
                        <div class="contain_div mt-5">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/tabler_award-filled.png" alt="" />
                            <h2 class="counter ms-2"><?php echo esc_html($settings["step_2_title"]); ?></h2>
                            <p class="desc_counter">
                                <?php echo esc_html($settings["step_2_content"]); ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center mt-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/arrow_left.png" class="mt-4 d-lg-inline d-none" alt="arrow" />
                        <img src="<?php echo esc_url($settings['process_image']['url']); ?>" class="mt-5" alt="mobile" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images//arrow_right.png" class="mt-4 d-lg-inline d-none" alt="" />
                    </div>
                    <div class="col-lg-3 text-center mt-5">
                        <div class="contai_div">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/ion_card.png" alt="" />
                            <h2 class="counter ms-2"><?php echo esc_html($settings["step_3_title"]); ?></h2>
                            <p class="desc_counter">
                                <?php echo esc_html($settings["step_3_content"]); ?>
                            </p>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/arrow_down.png" class="my-4" alt="" />
                        <div class="contain_div mt-5">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/la_money-bill-alt.png" alt="" />
                            <h2 class="counter ms-2"><?php echo esc_html($settings["step_4_title"]); ?></h2>
                            <p class="desc_counter">
                                <?php echo esc_html($settings["step_4_content"]); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Our Core Values -->
        <div class="coreValue pt-5">
        <div class="container">
            <div class="row">
            <div class="col-12 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Line.png" alt="Line" />
            </div>
            <div class="col-lg-3 text-center mt-5">
                <div class="contai_div">
                <img src="<?php echo get_template_directory_uri(); ?>/images/team.png" alt="" />
                <h2 class="values_title ms-2"><?php echo esc_html($settings["core_value_1_title"]); ?></h2>
                <p class="desc_counter">
                    <?php echo esc_html($settings["core_value_1_content"]); ?>
                </p>
                </div>
            </div>
            <div class="offset-lg-cutom col-lg-3 text-center mt-5">
                <div class="contai_div">
                <img src="<?php echo get_template_directory_uri(); ?>/images/risk.png" alt="" />
                <h2 class="values_title ms-2"><?php echo esc_html($settings["core_value_2_title"]); ?></h2>
                <p class="desc_counter">
                    <?php echo esc_html($settings["core_value_2_content"]); ?>
                </p>
                </div>
            </div>
            <div class="offset-lg-cutom col-lg-3 text-center mt-5">
                <div class="contai_div">
                <img src="<?php echo get_template_directory_uri(); ?>/images/money.png" alt="" />
                <h2 class="values_title ms-2"><?php echo esc_html($settings["core_value_3_title"]); ?></h2>
                <p class="desc_counter">
                    <?php echo esc_html($settings["core_value_3_content"]); ?>
                </p>
                </div>
            </div>
            </div>
        </div>
        </div>
    <?php
    }

    protected function _content_template() { ?>
        <div class="founSection">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="mt-5">{{{ settings.process_title }}}</h1>
                    </div>
                    <div class="col-lg-3 text-center mt-5">
                        <div class="contai_div">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/ion_cart.png" alt="" />
                            <h2 class="counter ms-2">{{{ settings.step_1_title }}}</h2>
                            <p class="desc_counter">
                                {{{ settings.step_1_content }}}
                            </p>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/arrow_down.png" class="my-4" alt="" />
                        <div class="contain_div mt-5">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/tabler_award-filled.png" alt="" />
                            <h2 class="counter ms-2">{{{ settings.step_2_title }}}</h2>
                            <p class="desc_counter">
                                {{{ settings.step_2_content }}}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center mt-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/arrow_left.png" class="mt-4 d-lg-inline d-none" alt="arrow" />
                        <img src="{{{ settings.process_image.url }}}" class="mt-5" alt="mobile" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/arrow_right.png" class="mt-4 d-lg-inline d-none" alt="" />
                    </div>
                    <div class="col-lg-3 text-center mt-5">
                        <div class="contai_div">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/ion_card.png" alt="" />
                            <h2 class="counter ms-2">{{{ settings.step_3_title }}}</h2>
                            <p class="desc_counter">
                                {{{ settings.step_3_content }}}
                            </p>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/arrow_down.png" class="my-4" alt="" />
                        <div class="contain_div mt-5">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/la_money-bill-alt.png" alt="" />
                            <h2 class="counter ms-2">{{{ settings.step_4_title }}}</h2>
                            <p class="desc_counter">
                                {{{ settings.step_4_content }}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="coreValue pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Line.png" alt="Line" />
                    </div>
                    <div class="col-lg-3 text-center mt-5">
                        <div class="contai_div">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/team.png" alt="" />
                            <h2 class="values_title ms-2">{{{ settings.core_value_1_title }}}</h2>
                            <p class="desc_counter">
                                {{{ settings.core_value_1_content }}}
                            </p>
                        </div>
                    </div>
                    <div class="offset-lg-cutom col-lg-3 text-center mt-5">
                        <div class="contai_div">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/risk.png" alt="" />
                            <h2 class="values_title ms-2">{{{ settings.core_value_2_title }}}</h2>
                            <p class="desc_counter">
                                {{{ settings.core_value_2_content }}}
                            </p>
                        </div>
                    </div>
                    <div class="offset-lg-cutom col-lg-3 text-center mt-5">
                        <div class="contai_div">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/money.png" alt="" />
                            <h2 class="values_title ms-2">{{{ settings.core_value_3_title }}}</h2>
                            <p class="desc_counter">
                                {{{ settings.core_value_3_content }}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }
    
}

    ?>