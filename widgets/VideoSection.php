<?php
namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) {
    exit;
}

class Video_Section_Widget extends Widget_Base {

    public function get_name() {
        return 'PFP_video_section';
    }

    public function get_title() {
        return 'PFP Video Section';
    }

    public function get_icon() {
        return 'eicon-youtube';
    }

    public function get_categories() {
        return ['basic'];
    }

    protected function _register_controls() {
        $this->start_controls_section(
            'section_content',
            [
                'label' => 'Video Section',
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => 'Title',
                'type' => Controls_Manager::TEXT,
                'default' => 'This person is an avatar created using Artificial Intelligence',
            ]
        );

        $this->add_control(
            'button_text',
            [
                'label' => 'Button Text',
                'type' => Controls_Manager::TEXT,
                'default' => 'Message Us To Get Started',
            ]
        );

        $this->add_control(
            'video_link',
            [
                'label' => 'Video Link',
                'type' => Controls_Manager::URL,
                'default' => [
                    'url' => 'https://www.youtube.com/embed/zB4I68XVPzQ',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <!-- Video Section -->
        <div class="videSection">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="title_video"><?php echo esc_html($settings['title']); ?></p>
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/down_gray.png" /></a>
                    </div>
                    <div class="col-12">
                        <div class="embed-responsive embed-responsive-16by9 mt-2 rounded">
                            <iframe class="embed-responsive-item w-100 video" src="<?php echo esc_url($settings['video_link']['url']); ?>"></iframe>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button class="btn btn_theme px-5 mt-2"><?php echo esc_html($settings['button_text']); ?></button>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

    protected function _content_template() {
        ?>
        <div class="videSection">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="title_video">{{{ settings.title }}}</p>
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/down_gray.png" /></a>
                    </div>
                    <div class="col-12">
                        <div class="embed-responsive embed-responsive-16by9 mt-2 rounded">
                            <iframe class="embed-responsive-item w-100 video" src="{{{ settings.video_link.url }}}"></iframe>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button class="btn btn_theme px-5 mt-2">{{{ settings.button_text }}}</button>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}

?>

