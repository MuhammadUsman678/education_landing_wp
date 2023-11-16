<footer class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mt-5">
            <img src="<?php echo esc_url(get_theme_mod('footer_logo_setting', get_template_directory_uri() . '/images/new_footer_logo.png')); ?>" alt="Footer Logo">
            </div>
            <div class="col-lg-12 text-center mt-5 mb-4">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-menu', // Ensure that it matches the registered menu slug
                        'menu_class' => 'footer_links'
                    )
                );
                ?>
            </div>
			<hr class="text-white">
            <div class="col-lg-6 text-lg-start text-center">
                <p class="copy_right"><?php echo get_theme_mod('footer_text_setting', '© ' . date('Y') . ' Your Site. All Rights Reserved.'); ?>.</p>
            </div>
            <div class="col-lg-6 text-lg-end text-center">
                <div class="icons_container">
                <?php
                    $social_media_sites = array('telegram', 'whatsapp', 'facebook', 'instagram', 'discord'); // Should match the settings

                    foreach ($social_media_sites as $site) {
                        $link = get_theme_mod($site . '_link');
                        if (!empty($link)) {
                            $icon = str_replace('_', ' ', $site); // Example: WhatsApp becomes WhatsApp

                            echo '<a href="' . esc_url($link) . '" class="text-decoration-none">
                                <img src="' . get_template_directory_uri() . '/images/' . $site . '.png" class="mx-2" alt="' . $icon . '" />
                            </a>';
                        }else{
                            ?>
                            <a href="#" class="text-decoration-none">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $site ?>.png" class="mx-2" alt="" />
                            </a>
                            <?php
                        }
                    }
                ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slider.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
<?php wp_footer(); ?>
</body>

</html>