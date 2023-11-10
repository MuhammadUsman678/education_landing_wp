<?php
namespace WPC;

// use Elementor\Plugin; ?????


class Widget_Loader{

  private static $_instance = null;

  public static function instance()
  {
    if (is_null(self::$_instance)) {
      self::$_instance = new self();
    }
    return self::$_instance;
  }


  private function include_widgets_files(){
    require_once(__DIR__ . '/widgets/VideoSection.php');
    require_once(__DIR__ . '/widgets/ProcessSection.php');
    require_once(__DIR__ . '/widgets/About_Work_Widget.php');
    require_once(__DIR__ . '/widgets/OfferingSection.php');
    require_once(__DIR__ . '/widgets/CertificateSection.php');
    require_once(__DIR__ . '/widgets/ContactSection.php');
    require_once(__DIR__ . '/widgets/PlansSection.php');
    require_once(__DIR__ . '/widgets/TestimonialsSection.php');
    require_once(__DIR__ . '/widgets/HeroSection.php');
    
  
  }

  public function register_widgets(){

    $this->include_widgets_files();

    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Video_Section_Widget());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\PFP_Process_Widget());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\About_Work_Widget());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Offering_Widget());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Certificates_Widget());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Contact_Widget());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Plans_Widget());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Testimonials_Widget());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\HeroSection());
    
 
  }

  public function __construct(){
    add_action('elementor/widgets/widgets_registered', [$this, 'register_widgets'], 99);
  }
}

// Instantiate Plugin Class
Widget_Loader::instance();