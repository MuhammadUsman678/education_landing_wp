<?php
namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}


class About_Work_Widget extends Widget_Base {

    public function get_name() {
        return 'about-section-widget';
    }

    public function get_title() {
        return __( 'About Work Section', 'text-domain' );
    }

    public function get_icon() {
        return 'eicon-info-box';
    }

    public function get_categories() {
        return [ 'basic' ];
    }

    protected function _register_controls() {

        // About Prop Fund Pros Section
        $this->start_controls_section(
            'about_section',
            [
                'label' => __( 'About Prop Fund Pros', 'text-domain' ),
            ]
        );

        $this->add_control(
            'about_title',
            [
                'label' => __( 'Title', 'text-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => __( 'Why Work with Prop Fund Pros?', 'text-domain' ),
            ]
        );

        $this->add_control(
            'about_content',
            [
                'label' => __( 'Content', 'text-domain' ),
                'type' => Controls_Manager::WYSIWYG,
                'default' => '<p class="why_choose_description mt-3">
                If you want to achieve the best returns possible in a prop firm
                challenge, you need two things: Excellent trading skills and
                substantial funding. At Prop Fund Pros, we can offer you both.
              </p>
              <p class="why_choose_description mt-4">
                Even if your trading skills are good enough to blow the
                competition out of the water, limited access to capital will hold
                you back. The fees involved in joining a challenge and executing
                trades eat into profits, and a lower initial investment means
                lower earning potential. We solve this problem and help you bring
                in fantastic profits without taking excessive risks.
              </p>
              <p class="why_choose_description mt-4">
                Our team of manual traders have a near-perfect success rate to
                boost your chances of winning your challenge. Or, if you want to
                take your trading to the next level, we also offer an Expert
                Advisor (EA) option to automate your trades with sophisticated
                algorithms.
              </p>', 'text-domain',
            ]
        );

        $this->end_controls_section();

        // Verification Process Section
        $this->start_controls_section(
            'verification_section',
            [
                'label' => __( 'Verification Process', 'text-domain' ),
            ]
        );

        $this->add_control(
            'verification_title',
            [
                'label' => __( 'Title', 'text-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => __( 'How Verification Works in Prop Firm Challenges', 'text-domain' ),
            ]
        );

        $this->add_control(
            'verification_content',
            [
                'label' => __( 'Content', 'text-domain' ),
                'type' => Controls_Manager::WYSIWYG,
                'default' => '<p class="why_choose_description mt-3">
                Before you can receive a funded account from a prop firm, you need
                to prove you’re skilled in navigating financial markets. This is
                known as the verification process, and there are two different
                phases. The first phase lasts around 30 days, while the second
                phase lasts 60 days.
              </p>
              <p class="why_choose_description mt-4">
                During this evaluation period, your aim is to stick to the rules
                regarding daily loss and maximum loss and reach while meeting the
                total profit target. If you’re successful, you’ll receive funding
                and be able to start earning from your trades (though you’ll split
                your profits with the prop firm).
              </p>', 'text-domain',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="why_us_single_section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="why_choose_title mt-5"><?php echo esc_html($settings['about_title']); ?></h2>
                        <a href="javascript:void(0);">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/down_white.png" class="my-3" />
                        </a>
                    </div>
                    <div class="col-12">
                        <p class="why_choose_description mt-3">
                            <?php echo esc_html($settings['about_content']); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="why_us_single_section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="why_choose_title mt-5"><?php echo esc_html($settings['verification_title']); ?></h2>
                        <a href="javascript:void(0);">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/down_white.png" class="my-3" />
                        </a>
                    </div>
                    <div class="col-12">
                        <p class="why_choose_description mt-3">
                            <?php echo esc_html($settings['verification_content']); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

    protected function _content_template() { ?>
        <div class="why_us_single_section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="why_choose_title mt-5">{{{ settings.about_title }}}</h2>
                        <a href="javascript:void(0);">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/down_white.png" class="my-3" />
                        </a>
                    </div>
                    <div class="col-12">
                        <p class="why_choose_description mt-3">{{{ settings.about_content }}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="why_us_single_section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="why_choose_title mt-5">{{{ settings.verification_title }}}</h2>
                        <a href="javascript:void(0);">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/down_white.png" class="my-3" />
                        </a>
                    </div>
                    <div class="col-12">
                        <p class="why_choose_description mt-3">{{{ settings.verification_content }}}</p>
                    </div>
                </div>
            </div>
        </div>
    <?php }
}
