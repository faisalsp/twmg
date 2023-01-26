<div class="banner-section">
    <div class="bg-section z-0"></div>
    <div class="container-fluid position-relative z-1">
        <div class="row align-items-center gx-5">
            <div class="col-md-6">
                <div class="banner-text position-relative">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner-arrow.svg"
                        width="90" />
                    <h1>More Leads, More Customers,<br />More Revenue.</h1>
                    <p class="text-white">Request your free audit today. We'll increase your visibility, drive more
                        leads
                        and skyrocket your sales.</p>
                    <?php echo get_cta_button(array("class" => "homepage")); ?>
                    <div class="google-wrapper">
                        <div class="google-rate">
                            <i class="fa-brands fa-google"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <div class="google-desc">
                            <p>Rated 4.8 on Google</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner-image.svg" class="w-100" />
            </div>
        </div>
    </div>
    <div class="container position-relative">
        <div class="partner-slider">
            <h3>Loved By Australia's Top <br /> Companies</h3>
            <ul>
                <li>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partner.svg" class="w-100" />
                </li>
                <li>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partner.svg" class="w-100" />
                </li>
                <li>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partner.svg" class="w-100" />
                </li>
                <li>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partner.svg" class="w-100" />
                </li>
                <li>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partner.svg" class="w-100" />
                </li>
            </ul>
        </div>
    </div>
</div>
<?php $increasearr = array(
    array(
        "title" => "Reach customers where they are already looking",
        "description" => "Digital marketing allows you to reach potential customers anywhere and at any time, whether they're searching for your product or service online or just browsing for new ideas.",
        "image" => "icon-2.svg"
    ),
    array(
        "title" => "Target the customers you want to purchase your product",
        "description" => "You can reach out directly to specific groups of people who are most likely to be interested in your product or service, saving you time and money on advertising that doesn't connect",
        "image" => "icon-1.svg"
    ),
    array(
        "title" => "Save on advertising spending",
        "description" => "Digital marketing is often cheaper than traditional forms of advertising - and it's more cost effective than trying to do it all yourself!",
        "image" => "icon-2.svg"
    )
);
?>
<div class="increase-section">
    <div class="bg-section z-0"></div>
    <div class="container position-relative z-1">
        <div class="row gx-5 text-center">
            <div class="col-12">
                <h3>Increase Organic Website Traffic </br />and Enhance Your Business Web Presence</h3>
            </div>
            <?php foreach ($increasearr as $key => $arr): ?>
                <div class="col-md-4">
                    <?php $blueclass = $key % 2 == 0 ? "" : "bg-blue-twmg"; ?>
                    <div class="increase-item h-100 <?php echo $blueclass; ?>">
                        <img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/<?php echo $arr["image"]; ?>" />
                        <h4>
                            <?php echo $arr['title']; ?>
                        </h4>
                        <p>
                            <?php echo $arr['description']; ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="why-section">
    <div class="container-fluid">
        <div class="caption">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/captions/caption-1.svg" />
        </div>
        <?php $whyarr = array(
            array(
                "title" => "Dedicated project manager",
                "description" => "We understand your business and your industry. We know that each business is unique and has its own challenges. That's why we work with you to understand your business goals and challenges before creating a strategy that addresses those specific needs.",
            ),
            array(
                "title" => "Results clearly explained",
                "description" => "We have deep experience in digital marketing. We have been delivering results for our clients for over 20 years. Our team has decades of experience in search engine optimization (SEO), pay-per-click advertising (PPC), social media marketing (SMM), email marketing, web design, web development, mobile development, video production, conversion rate optimization, content creation and much more!",
            ),
            array(
                "title" => "No lock in contracts",
                "description" => "Our services are customized based on your needs. Our team will work with you to build a personalized plan that meets your goals while staying within your budget",
            )
        ); ?>
        <div class="row">
            <div class="col-md-6">
                <h3>Why Should You Use TWMG as Your Digital Marketing Partners</h3>
                <?php foreach ($whyarr as $key => $arr): ?>
                    <div class="why-item">
                        <div class="d-inline-block align-top bullet">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bullet.svg" />
                        </div>
                        <div class="d-inline-block align-top description">
                            <h4>
                                <?php echo $arr['title']; ?>
                            </h4>
                            <p>
                                <?php echo $arr['description']; ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php echo get_cta_button(array("class" => "homepage")); ?>
            </div>
            <div class="col-md-6">
                <div class="service-image text-end">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/laptop.png" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="steps-section">
    <div class="container">
        <div class="caption text-end">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/captions/caption-2.svg" />
        </div>
        <h3 class="mx-auto text-center">Three Proven Steps to Digital Marketing Success</h3>
        <p class="w-75 mx-auto text-center">We understand that every business is different and our goal is to cater to
            yours. Our
            diverse range of services can help you achieve your objectives. Whether you require a complete revamp of
            your website or just regular.</p>
        <?php $stepsarr = array(
            array(
                "title" => "Our process begins with a thorough examination of your current website and online visibility.",
                "description" => "We believe that each client is unique, so we work with you to indentify your most pressing challanges, then develop an approach that's tailored to those needs.<br/><br/>If you want more leads, we'll help you get them. If you want more customers ready to buy, we'll help you achieve that goal as well. We understand what it takes for businesses like yours to succeed in today's digital landscape - and we're here to help them do just that.",
                "image" => "image-1.png"
            ),
            array(
                "title" => "Following the analysis, we develop a tailored plan to enhance your online presence, drive more traffic, and generate leads.",
                "description" => "We set our sites on a digital marketing strategy, but not just any strategy - one that is custom tailored for historic data, your organization and goals. We do extensive research and identify where your marketing dollars is spent most efficiently.",
                "image" => "image-2.png"
            ),
            array(
                "title" => "Our expert teams will execute the plan and thoroughly test each solution, continuously making improvements.",
                "description" => "Our expert teams will ensure that your strategies are implemented and rigorously tested, so you can deliver results faster. We'll continue to refine our processes to make sure we're constantly delivering value as you need it.",
                "image" => "image-3.png"
            )
        ); ?>
        <div class="row">
            <?php foreach ($stepsarr as $key => $arr): ?>
                <?php if ($key % 2 == 0) { ?>
                    <div class="col-md-6">
                        <span class="step-number">
                            <img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/counter-<?php echo $key + 1; ?>.svg" />
                        </span>
                        <h4>
                            <?php echo $arr['title']; ?>
                        </h4>
                        <p>
                            <?php echo $arr['description']; ?>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="step-image text-end">
                            <img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/<?php echo $arr['image']; ?>" />
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="col-md-6">
                        <div class="step-image">
                            <img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/<?php echo $arr['image']; ?>" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <span class="step-number">
                            <img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/counter-<?php echo $key + 1; ?>.svg" />
                        </span>
                        <h4>
                            <?php echo $arr['title']; ?>
                        </h4>
                        <p>
                            <?php echo $arr['description']; ?>
                        </p>
                    </div>

                <?php } ?>

            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="video-section text-center">
    <div class="container">
        <div class="caption text-start">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/captions/caption-3.svg" />
        </div>
        <h3 class="w-50 mx-auto">How we helped a craft beer company achieve a 20% increase in turnover</h3>
        <div class="video-wrapper">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/craft-beer.png" />
            <i class="fa-solid fa-play"></i>
        </div>
    </div>
</div>
<div class="grow-section text-center">
    <div class="container">
        <div class="caption text-end">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/captions/caption-4.svg" />
        </div>
        <h3 class="w-50 mx-auto">Need assistance expanding your online presence? We're here to help.</h3>
        <p class="w-75 mx-auto section-desc">We understand that every business is different and our goal is to cater to
            yours. Our diverse range of services can help you achieve your objectives. Whether you require a complete
            revamp of your website or just regular upkeep, our team is eager to collaborate with you and ensure that all
            of your requirements are met.
        </p>
        <div class="row">
            <?php
            $growarr = array(
                array(
                    "title" => "Marketing Strategy",
                    "description" => "We know that your business is unique and we're here to help. We have a wide range of services that can help you reach your goals. Whether you need an overhaul of your current website or just some maintenance, our team is ready to work with you to make sure you meet all of your needs.",
                    "icon" => '<i class="fa-solid fa-chess-knight"></i>'
                ),
                array(
                    "title" => "Marketing Strategy + Implementation",
                    "description" => "We know that your business is unique and we're here to help. We have a wide range of services that can help you reach your goals. Whether you need an overhaul of your current website or just some maintenance, our team is ready to work with you to make sure you meet all of your needs.",
                    "icon" => '<i class="fa-solid fa-chess-queen"></i>'
                )
            );
            foreach ($growarr as $val): ?>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="icon">
                                <?php echo $val['icon']; ?>
                            </div>
                            <h4>
                                <?php echo $val['title']; ?>
                            </h4>
                            <p>
                                <?php echo $val['description']; ?>
                            </p>
                            <?php echo get_cta_button(array("class" => "homepage")); ?>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="col-12">
                <div class="learn-more">
                    <i class="fa-regular fa-lightbulb"></i>
                    <span>Want to learn more about our offerings? Check out our</span>
                    <a href="#">service page</a>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="faqs-section text-center">
    <div class="faqs-wrapper container">
        <div class="caption">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/captions/caption-5.svg" />
        </div>
        <h3>FAQS</h3>
        <p class="w-50 mx-auto section-desc">Our SEO packages are designed to help you get your business found
            online.
            Each package includes a full audit
            of
            your website, including a keyword analysis and suggestions for how to improve your site's SEO. We'll
            also
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
        <div class="container">
            <div class="caption text-end">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/captions/caption-6.svg" />
            </div>
        </div>
        <?php echo get_cta_banner(array("class" => "cta-homepage")); ?>
    </div>
</div>