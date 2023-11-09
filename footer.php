<footer class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mt-5">
            <img src="<?php echo get_theme_mod('footer_logo_setting', get_template_directory_uri() . '/images/new_footer_logo.png'); ?>" alt="Footer Logo">
            </div>
            <div class="col-lg-12 text-center my-5">
                <?php
                wp_nav_menu(
                    array(
                        'theme-location' => 'footer menu',
                        'menu_class' => 'footer_links'
                    )
                )
                ?>
            </div>
            <div class="col-lg-6 text-lg-start text-center">
                <p class="copy_right">© 2020 Prop Fund Prop. All rights reserved.</p>
            </div>
            <div class="col-lg-6 text-lg-end text-center">
                <div class="icons_container">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/send.png" class="mx-2" alt="" />
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Frame.png" class="mx-2" alt="" />
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Frame2.png" class="mx-2" alt="" />
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Frame3.png" class="mx-2" alt="" />
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Frame4.png" class="mx-2" alt="" />
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script>
    $(".carousel .carousel-item").each(function() {
        var minPerSlide = 2;
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(":first");
        }
        next.children(":first-child").clone().appendTo($(this));

        for (var i = 0; i < minPerSlide; i++) {
            next = next.next();
            if (!next.length) {
                next = $(this).siblings(":first");
            }
            next.children(":first-child").clone().appendTo($(this));
        }
    });
</script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
<?php wp_footer(); ?>
</body>

</html>