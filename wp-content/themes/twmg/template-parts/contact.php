<?php
$subtitle = "HOW DO WE HELP YOU GROW";
$title = "Need to Get In Touch With Our Friendly Team?";
echo get_top_banner(array("title" => $title, "subtitle" => $subtitle)); ?>
<div class="contact-us-section">
    <div class="container">
        <div class="row gx-5">
            <div class="col-md-6">
                    <p>We value your feedback and inquiries. Please don't hesitate to reach out to us for any questions
                        or
                        concerns. Our dedicated team is available to assist you. You can contact us through the form
                        below,
                        email or phone.</p>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-title">
                        <h2 class="text-center">Send us a quick message and we will respond within <span
                                class="underscore position-relative">24 hours</span>
                        </h2>
                        <?php echo do_shortcode('[contact-form-7 id="17" title="Contact form 1"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact-divide-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">Established on the picturesque North Sydney coastline in 2001</h3>
            </div>
        </div>
    </div>
</div>
<div class="cta-section">
    <div class="container">
        <div class="caption text-end">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/captions/caption-6.svg" />
        </div>
    </div>
    <?php echo get_cta_banner(array("class" => "cta-homepage")); ?>
</div>