<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

class Plans_Widget extends Widget_Base
{

  public function get_name()
  {
    return 'plans_widget';
  }

  public function get_title()
  {
    return 'Plans Widget';
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
      'plans_section',
      [
        'label' => 'Plans Section',
      ]
    );

    $this->add_control(
      'title',
      [
        'label' => 'Title',
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => 'Start Today',
      ]
    );

    $this->end_controls_section();

    // Top Plans Section
    $this->start_controls_section(
      'top_plans_section',
      [
        'label' => 'Top Rated Plans',
      ]
    );

    $this->add_control(
      'pro_list',
      [
        'label' => esc_html__('Top Rated Plans', 'textdomain'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => [
          [
            'name' => 'plan_title',
            'label' => esc_html__('Plan Title', 'textdomain'),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__('Special Offer', 'textdomain'),
            'label_block' => true,
          ],
          [
            'name' => 'plan_price',
            'label' => esc_html__('Plan Price', 'textdomain'),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__('$1250', 'textdomain'),
            'label_block' => true,
          ],
          [
            'name' => 'plan_slogan',
            'label' => esc_html__('Plan Slogan', 'textdomain'),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__('Free Service', 'textdomain'),
            'label_block' => true,
          ],
          [
            'name' => 'desc',
            'label' => esc_html__('List', 'textdomain'),
            'type' => \Elementor\Controls_Manager::REPEATER,
            'fields' => [
              [
                'name' => 'list_title',
                'label' => esc_html__('Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Line', 'textdomain'),
                'label_block' => true,
              ],
            ],
            'default' => [
              [
                'list_title' => esc_html__('Choose between manual trades or HFT', 'textdomain'),
              ],
              [
                'list_title' => esc_html__('Customer service', 'textdomain'),
              ],
              [
                'list_title' => esc_html__('Includes passing challenge and verification', 'textdomain'),
              ],
            ],
            'title_field' => '{{{ list_title }}}',
          ],
        ],
        'default' => [
          [
            'plan_title' => esc_html__('Special Offer', 'textdomain'),
            'plan_price' => esc_html__('$1250', 'textdomain'),
            'plan_slogan' => esc_html__('Free Service', 'textdomain'),
          ],
        ],
        'title_field' => '{{{ plan_title }}}',
      ]
    );
    $this->end_controls_section();




    // Top Plans Section
    $this->start_controls_section(
      'other_plans_section',
      [
        'label' => 'Other Plans',
      ]
    );

    $this->add_control(
      'other_list',
      [
        'label' => esc_html__('Other Plans', 'textdomain'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => [
          [
            'name' => 'plan_title',
            'label' => esc_html__('Plan Title', 'textdomain'),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__('Special Offer', 'textdomain'),
            'label_block' => true,
          ],
          [
            'name' => 'plan_price',
            'label' => esc_html__('Plan Price', 'textdomain'),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__('$1250', 'textdomain'),
            'label_block' => true,
          ],
          [
            'name' => 'plan_slogan',
            'label' => esc_html__('Plan Slogan', 'textdomain'),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__('Free Service', 'textdomain'),
            'label_block' => true,
          ],
          [
            'name' => 'desc',
            'label' => esc_html__('List', 'textdomain'),
            'type' => \Elementor\Controls_Manager::REPEATER,
            'fields' => [
              [
                'name' => 'list_title',
                'label' => esc_html__('Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Line', 'textdomain'),
                'label_block' => true,
              ],
            ],
            'default' => [
              [
                'list_title' => esc_html__('Choose between manual trades or HFT', 'textdomain'),
              ],
              [
                'list_title' => esc_html__('Customer service', 'textdomain'),
              ],
              [
                'list_title' => esc_html__('Includes passing challenge and verification', 'textdomain'),
              ],
            ],
            'title_field' => '{{{ list_title }}}',
          ],
        ],
        'default' => [
          [
            'plan_title' => esc_html__('Special Offer', 'textdomain'),
            'plan_price' => esc_html__('$1250', 'textdomain'),
            'plan_slogan' => esc_html__('Free Service', 'textdomain'),
          ],
          [
            'plan_title' => esc_html__('Special Offer', 'textdomain'),
            'plan_price' => esc_html__('$1250', 'textdomain'),
            'plan_slogan' => esc_html__('Free Service', 'textdomain'),
          ],
          [
            'plan_title' => esc_html__('Special Offer', 'textdomain'),
            'plan_price' => esc_html__('$1250', 'textdomain'),
            'plan_slogan' => esc_html__('Free Service', 'textdomain'),
          ],
          [
            'plan_title' => esc_html__('Special Offer', 'textdomain'),
            'plan_price' => esc_html__('$1250', 'textdomain'),
            'plan_slogan' => esc_html__('Free Service', 'textdomain'),
          ],
          [
            'plan_title' => esc_html__('Special Offer', 'textdomain'),
            'plan_price' => esc_html__('$1250', 'textdomain'),
            'plan_slogan' => esc_html__('Free Service', 'textdomain'),
          ],
          [
            'plan_title' => esc_html__('Special Offer', 'textdomain'),
            'plan_price' => esc_html__('$1250', 'textdomain'),
            'plan_slogan' => esc_html__('Free Service', 'textdomain'),
          ],
          [
            'plan_title' => esc_html__('Special Offer', 'textdomain'),
            'plan_price' => esc_html__('$1250', 'textdomain'),
            'plan_slogan' => esc_html__('Free Service', 'textdomain'),
          ],
          [
            'plan_title' => esc_html__('Special Offer', 'textdomain'),
            'plan_price' => esc_html__('$1250', 'textdomain'),
            'plan_slogan' => esc_html__('Free Service', 'textdomain'),
          ],
        ],
        'title_field' => '{{{ plan_title }}}',
      ]
    );
    $this->end_controls_section();
  }


  protected function render()
  {
    $settings = $this->get_settings_for_display();

?>

    <!--- Start today Section -->

    <div class="startToday">
      <div class="container">
        <div class="nav_today">
          <div class="row">
            <div class="col-12 text-center">
              <h1><?php echo esc_html($settings['title']); ?></h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Card Section -->

    <div class="container mt-5 mb-5 mx-auto text-center">
      <div class="row">
        <?php foreach ($settings['pro_list'] as $key=>$row) { ?>
          <div class="col-lg-4 mt-lg-0 mt-5 mx-auto">
            <div class="price_Card position-relative">
              <img src="<?php echo get_template_directory_uri(); ?>/images/label.png" class="label_img" alt="">
              <span class="heading text-center"> <?php echo $row['plan_title']; ?> </span>
              <h3 class="price_title text-center"><?php echo $row['plan_price']; ?></h3>
              <span class="service text-center"><?php echo $row['plan_slogan']; ?></span>
              <img src="<?php echo get_template_directory_uri(); ?>/images/Line 45.png" />
              <?php foreach ($row['desc'] as $data) { ?>
                <p class="description text-start">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/check.png" class="me-1 me-lg-2" alt="" />
                  <?php echo $data['list_title']; ?>
                </p>
              <?php }; ?>
              <button class="btn btn_theme">Get Started</button>
            </div>
          </div>
        <?php }; ?>
      </div>
      <div class="row">
        <?php foreach ($settings['other_list'] as $row) { ?>
          <div class="col-lg-4 mt-5 mx-auto">
            <div class="price_Card_2">
              <span class="heading text-center"> <?php echo $row['plan_title']; ?> </span>
              <h3 class="price_title text-center"><?php echo $row['plan_price']; ?></h3>
              <span class="service text-center"><?php echo $row['plan_slogan']; ?></span>
              <img src="<?php echo get_template_directory_uri(); ?>/images/Line 45.png" />
              <?php foreach ($row['desc'] as $data) { ?>
                <p class="description text-start">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/check.png" class="me-2" alt="" />
                  <?php echo $data['list_title']; ?>
                </p>
              <?php }; ?>
              <button class="btn btn_theme_dark">Get Started</button>
            </div>
          </div>
        <?php }; ?>
      </div>
    </div>

<?php
  }
}
