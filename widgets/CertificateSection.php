<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class Certificates_Widget extends Widget_Base
{
    public function get_name()
    {
        return 'certificates-widget';
    }

    public function get_title()
    {
        return __('Certificates Section', 'text-domain');
    }

    public function get_icon()
    {
        return 'eicon-editor-code';
    }

    public function get_categories()
    {
        return ['basic'];
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'certificates_section',
            [
                'label' => __('Certificates Section', 'text-domain'),
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => __('Title', 'text-domain'),
                'type' => Controls_Manager::TEXT,
                'default' => 'Over 2,000 Approved Certificates',
            ]
        );

        $this->add_control(
            'list',
            [
                'label' => esc_html__('Certifications', 'textdomain'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'crt_name',
                        'label' => 'Name',
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('Brokerage', 'textdomain'),
                    ]
                ],
                'default' => [
					[
						'crt_name' => esc_html__( 'Challenge 200K', 'textdomain' ),
					],
                    [
						'crt_name' => esc_html__( 'Challenge 200K', 'textdomain' ),
					],
                    [
						'crt_name' => esc_html__( 'Challenge 200K', 'textdomain' ),
					],
                    [
						'crt_name' => esc_html__( 'Challenge 200K', 'textdomain' ),
					],
                    [
						'crt_name' => esc_html__( 'Challenge 200K', 'textdomain' ),
					],
                    [
						'crt_name' => esc_html__( 'Challenge 200K', 'textdomain' ),
					],
                    [
						'crt_name' => esc_html__( 'Challenge 200K', 'textdomain' ),
					],
                    [
						'crt_name' => esc_html__( 'Challenge 200K', 'textdomain' ),
					],
                    [
						'crt_name' => esc_html__( 'Challenge 200K', 'textdomain' ),
					],
				],
                'title_field' => '{{{ crt_name }}}',
            ]
        );

        $this->add_control(
            'images',
            [
                'label' => __('Certifications Images', 'text-domain'),
                'type' => Controls_Manager::GALLERY,
                'label_block' => true,
                'default' => [
                    [
                        'url' => get_template_directory_uri() . '/images/img-card1.png"',
                    ],
                    [
                        'url' => get_template_directory_uri() . '/images/img-card2.png"',
                    ],
                    [
                        'url' => get_template_directory_uri() . '/images/img-card3.png"',
                    ],
                    [
                        'url' => get_template_directory_uri() . '/images/img-card4.png"',
                    ],
                    [
                        'url' => get_template_directory_uri() . '/images/img-card5.png"',
                    ],
                    [
                        'url' => get_template_directory_uri() . '/images/img-card6.png"',
                    ],
                    // Add more default images as needed
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
?>


        <div class="certificatesSection">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <h1 class="certificate_title mt-5">
                                <?php echo esc_html($settings['title']); ?>
                        </h1>
                        <p class="certificate_desc mt-4">
                            Click on the buttons below and see the results
                        </p>
                        <img src="images/down_white.png" alt="" />
                    </div>

                    <?php foreach ($settings['list'] as $item) { ?>
                        <div class="col-lg-4 mb-5">
                            <button class="btn btn_theme_dark w-100"><?php echo esc_html($item['crt_name']); ?></button>
                        </div>
                    <?php } ?>
                </div>
                <div class="row">

                 <!-- Images -->
                 <?php if (!empty($settings['images'])) : ?>
                        <?php foreach ($settings['images'] as $image) : ?>
                            <div class="col-lg-4 mb-5">
                                <div class="img-card p-0">
                                    <img src="<?php echo esc_url($image['url']); ?>" class="w-100" alt="" />
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
<?php
    }

}
