<div class="grow-section text-center">
    <div class="container">
        <h3 class="w-50 mx-auto">Want to Grow Your Business Online? We've Got You Covered</h3>
        <p class="w-75 mx-auto section-desc">We know that your business is unique and we're here to help. We have a wide
            range of services that can help you reach your goals. Whether you need an overhaul of your current website
            or just some maintenance, our team is ready to work with you to make sure you meet all of your needs.</p>
        <div class="row">
            <?php $growarr = array(
                "Web Design and Development",
                "Digital Marketing",
                "Search Engine Optimisation",
                "Google Ads Management",
                "Facebook Ads Management",
                "Direct Response Landing Pages",
                "Content Marketing",
                "Branding & Logo Design"
            );
            foreach ($growarr as $val) { ?>
                <div class="col-md-3">
                    <div class="card">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/grow-icon.png" class="pt-5 w-50 m-auto">
                        <div class="card-body">
                            <h4><?php echo $val; ?></h4>
                            <div class="card-text">
                                <p>Your future customers are online! Here's how to get their attention,
                                    demonstrate your value and make yourself irresistible to them</p>
                                <a href="#">Learn More...</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="col-12">
                <a href="#" class="text-center show-more d-block">All services...</a>
            </div>
        </div>

    </div>
</div>
<div class="faqs-section text-center">
    <div class="container">
        <h3>FAQS</h3>
        <p class="w-75 mx-auto section-desc">Our SEO packages are designed to help you get your business found online.
            Each package includes a full audit
            of
            your website, including a keyword analysis and suggestions for how to improve your site's SEO. We'll also
            create
            a customized plan for how you can improve your organic search presence.</p>
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
    <div class="cta-section">
        <?php echo get_cta_banner(array("class" => "homepage")); ?>
    </div>
</div>