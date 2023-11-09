<?php
if (function_exists('elementor_theme_do_location')) {
    elementor_theme_do_location('content');
} else {
    get_header();
    the_content();
    get_footer();
}
?>
