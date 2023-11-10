<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

class Testimonials_Widget extends Widget_Base
{

  public function get_name()
  {
    return 'testimonials-widget';
  }

  public function get_title()
  {
    return __('Testimonials Widget', 'text-domain');
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
      'testimonials-widget',
      [
        'label' => __('Testimonials Section', 'text-domain'),
      ]
    );

    $this->add_control(
      'main_video_url',
      [
        'label' => __('Main Video URL', 'text-domain'),
        'type' => Controls_Manager::URL,
        'default' => [
          'url' => 'https://www.youtube.com/embed/zB4I68XVPzQ'
        ]
      ]
    );


    $this->add_control(
      'list',
      [
        'label' => esc_html__('Videos', 'textdomain'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => [
          [
            'name' => 'list_title',
            'label' => esc_html__('Title', 'textdomain'),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__('Video', 'textdomain'),
            'label_block' => false,
          ],
          [
            'name' => 'video_url',
            'label' => 'Video',
            'type' => \Elementor\Controls_Manager::URL,
            'default' => [
              'url' => 'https://www.youtube.com/embed/zB4I68XVPzQ'
            ]
          ]
        ],
        'default' => [
          'list_title' => '#'
        ],
        'title_field' => '{{{ list_title }}}',
      ]
    );

    $this->end_controls_section();
  }

  protected function render()
  {
    $settings = $this->get_settings_for_display();

    // Render the main video URL
    $main_video_url = $settings['main_video_url']['url'];
?>

    <!-- testimonials Section -->

    <div class="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mt-5">
            <div class="embed-responsive embed-responsive-16by9 mt-2 rounded w-lg-75 w-100 mx-auto">
              <iframe class="embed-responsive-item w-100 video_2" src="<?php echo $main_video_url; ?>"></iframe>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="video_slider">
          <div id="myCarousel" class="carousel slide container" data-bs-ride="carousel">
            <div class="carousel-inner w-100">
            <?php foreach ($settings['list'] as $video) { ?>
              <div class="carousel-item">
                <div class="col-lg-4 col-12">
                  <div class="card card-body video_card">
                    <iframe class="embed-responsive-item w-100 video_3" src="<?php echo $video['video_url']['url']; ?>"></iframe>
                  </div>
                </div>
              </div>
              <?php } ; ?>
              
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
              <span aria-hidden="true">
                <img src="<?php echo get_template_directory_uri() ?>/images/slider-prev.png" alt="" /></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
              <span aria-hidden="true">
                <img src="<?php echo get_template_directory_uri() ?>/images/slider-next.png" alt="" /></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>

<?php
  }
}
