<?php
$subtitle = "OUR SERVICES";
$title = get_the_title();
$banner_desc = "Enhancing Your Online Presence through Strategic Search Engine Optimization";
echo get_top_banner(array("title" => $title, "subtitle" => $subtitle, "banner_desc" => $banner_desc)); ?>
<div class="single-our-services-section">
    <div class="container">
        <div class="our-services-detail mx-auto">
            <?php the_content(); ?>
        </div>
    </div>
</div>
<div class="service-cta-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Add a CTA Here</h3>
                <p>SEO stands for Search Engine Optimization, and it's the practice of making sure your website is as
                    easy to find on search engines as possible</p>
                <?php for ($i = 0; $i < 3; $i++): ?>
                    <div class="cta-item">
                        <div class="d-inline-block align-middle bullet">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bullet.svg" />
                        </div>
                        <div class="d-inline-block align-middle description">
                            <h4>Dedicated project manager</h4>
                        </div>
                    </div>
                <?php endfor; ?>
                <?php echo get_cta_button(array("button_text" => "Schedule a meeting with our digital marketing experts", "icon" => '<i class="fa-regular fa-calendar"></i>')); ?>
            </div>
            <div class="col-md-6">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner-image-new.svg"
                    class="w-100" />
            </div>
        </div>
    </div>
</div>
<div class="faqs-section text-center">
    <div class="faqs-wrapper container">
        <h3>FAQS</h3>
        <p class="w-75 mx-auto section-desc">Our SEO packages are designed to help you get your business found online.
            Each package includes a full audit of your website, including a keyword analysis and suggestions for how to
            improve your site's SEO. We'll also create a customized plan for how you can improve your organic search
            presence.</p>
        <div class="row">
            <div class="col-md-6">
                <?php for ($i = 0; $i < 4; $i++) { ?>
                    <div class="faqs-item left-item">
                        <button class="text-start btn btn-primary d-block w-100 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#faqs-left-<?php echo $i; ?>" aria-expanded="false"
                            aria-controls="faqs-left-<?php echo $i; ?>">
                            When will I see results from SEO?
                        </button>
                        <div class="collapse" id="faqs-left-<?php echo $i; ?>">
                            <div class="card card-body text-start">
                                Some placeholder content for the collapse component. This panel is hidden by default but
                                revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-6">
                <?php for ($i = 0; $i < 4; $i++) { ?>
                    <div class="faqs-item right-item">
                        <button class="text-start btn btn-primary d-block w-100 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#faqs-right-<?php echo $i; ?>" aria-expanded="false"
                            aria-controls="faqs-right-<?php echo $i; ?>">
                            When will I see results from SEO?
                        </button>
                        <div class="collapse" id="faqs-right-<?php echo $i; ?>">
                            <div class="card card-body text-start">
                                Some placeholder content for the collapse component. This panel is hidden by default but
                                revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<div class="blog-featured-section">
    <div class="container">
        <h3 class="text-center">Resources</h3>
        <p class="text-center">Not ready to buy, check out these great resources related to SEO</p>
        <?php echo get_card_article(array("direction" => "row")); ?>
    </div>
</div>
<div class="cta-section">
    <?php
    $title = "Maximize Your Earnings with Our Proven Digital Marketing Strategies. Book Your Appointment Now";
    $desc = "Unlock the Full Potential of Your Business and See a Significant Increase in Your Bottom Line with Our Customized and Results-Driven Digital Marketing Solutions";
    ?>
    <?php echo get_cta_banner(array("title" => $title, "desc" => $desc, "button_text" => "Schedule a Digital Marketing Consultation with our Experts Today!", "icon" => '<i class="fa-regular fa-calendar"></i>')); ?>
</div>