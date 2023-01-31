<nav class="main-header sticky-top navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <?php
        $custom_logo_id = get_theme_mod('custom_logo');
        $image_url = wp_get_attachment_image_src($custom_logo_id, 'full')[0];
        $white_logo = get_stylesheet_directory_uri() . "/assets/images/white-logo.svg";
        ?>
        <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
            <img src="<?php echo $image_url; ?>" alt="" width="130" class="colour-logo">
            <img src="<?php echo $white_logo; ?>" alt="" width="130" class="white-logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarText">
            <?php echo wp_nav_menu(array('theme_location' => 'primary', 'container' => 'ul', 'container_class' => 'collapse navbar-collapse', 'container_id' => 'navbarText', 'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0')); ?>
        </div>
    </div>
</nav>