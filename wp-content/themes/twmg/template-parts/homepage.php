<div class="banner-section small-padding">
    <div class="header-dots-section w-100 z-0">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/header-dots.png" class="w-100" />
    </div>
    <div class="bg-section z-1"></div>
    <div class="container overflow-hidden position-relative pe-0 z-2">
        <div class="row align-items-center gx-5">
            <div class="col-md-6">
                <div class="banner-text position-relative">
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
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner-arrow.svg"
                        width="90" />
                    <h1>Digital strategies for More leads, more customers, more revenue.</h1>
                    <p class="text-white">Maximize Your Online Potential with a Customized Digital Marketing Plan that
                        will increase your visibility, drive more leads and skyrocket your sales.</p>
                    <div class="banner-button">
                        <?php echo get_cta_button(array("style" => 'subscribe', "button_text" => "Get a free digital visibility report")); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner-image-new.svg"
                    class="w-100" />
            </div>
        </div>
    </div>
    <div class="container position-relative z-2">
        <div class="partner-slider">
            <h3>Loved by many <br />Australian companies</h3>
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
        "title" => "Increased Online Visibility",
        "description" => "Our digital marketing strategy will help you reach more potential customers and increase your online visibility, allowing you to reach a wider audience and get your brand in front of more people.",
        "image" => "web-icon.svg"
    ),
    array(
        "title" => "Higher Conversion Rates",
        "description" => "By targeting the right audience with the right message, our digital marketing strategy will help you convert more leads into customers, resulting in increased revenue for your business.",
        "image" => "trade-icon.svg"
    ),
    array(
        "title" => "Measurable Results",
        "description" => "Unlike traditional marketing methods, digital marketing provides measurable results, allowing you to track your progress and see the impact of your marketing efforts in real-time.",
        "image" => "ruler-icon.svg"
    )
);
?>
<div class="increase-section small-padding">
    <div class="bg-section z-0"></div>
    <div class="container position-relative z-1">
        <div class="row gx-5 text-center">
            <div class="col-12">
                <h3 class="w-50 mx-auto main-heading-white mb-5">Unlock the Full Potential of Your Business with Digital
                    Marketing Strategy</h3>
            </div>
            <?php foreach ($increasearr as $key => $arr): ?>
                <div class="col-md-4">
                    <?php $blueclass = $key % 2 == 0 ? "" : "bg-blue-twmg"; ?>
                    <div class="increase-item h-100 <?php echo $blueclass; ?> p-4">
                        <img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/<?php echo $arr["image"]; ?>" />
                        <h4>
                            <?php echo $arr['title']; ?>
                        </h4>
                        <p class="common-body">
                            <?php echo $arr['description']; ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="why-section overflow-hidden long-padding">
    <div class="container pe-0">
        <?php $whyarr = array(
            array(
                "title" => "Proven Results",
                "description" => "TWMG has a proven track record of delivering results for our clients. Our team of experts has a deep understanding of the latest digital marketing techniques and strategies, and we've helped numerous businesses achieve their marketing goals. You can trust us to drive results for your business as well.",
            ),
            array(
                "title" => "Clear ROI",
                "description" => "With our digital marketing services, you'll have a clear understanding of the return on your investment. Our team will provide detailed analytics and performance metrics that show the impact of your marketing efforts, allowing you to see the direct financial benefits of our services. This transparency and accountability make it easy to measure the success of your digital marketing strategy and make informed decisions about your marketing budget.",
            ),
            array(
                "title" => "Customized Approach",
                "description" => "We understand that every business is unique, which is why we take a customized approach to digital marketing. We'll work closely with you to understand your business goals and develop a tailored marketing strategy that is optimized for your specific needs.",
            )
        ); ?>
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="why-wrapper">
                    <h2 class="mb-4 main-heading">Why Should You Use TWMG as Your Digital Marketing Partners</h2>
                    <?php foreach ($whyarr as $key => $arr): ?>
                        <div class="why-item">
                            <div class="d-inline-block align-top bullet">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bullet.svg" />
                            </div>
                            <div class="d-inline-block align-top description">
                                <h3 class="text-dark-blue-twmg">
                                    <?php echo $arr['title']; ?>
                                </h3>
                                <p class="mb-0 small-font text-dark-blue-twmg">
                                    <?php echo $arr['description']; ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <?php echo get_cta_button(array("icon" => '<i class="fa-regular fa-calendar"></i>', "button_text" => "Schedule a meeting with our digital marketing experts")); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/right-message.png"
                        class="w-100" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="steps-section small-padding">
    <div class="container">
        <h2 class="mx-auto text-center mb-2 main-heading">Three Proven Steps to Digital Marketing Success</h2>
        <p class="w-75 mx-auto text-center main-content mb-5">Discover the Power of a Tailored Digital Marketing Strategy:
            Unlock Your
            Business's Full Potential with Our Proven Three-Step Process to Digital Marketing Success</p>
        <?php $stepsarr = array(
            array(
                "title" => "Comprehensive Website Assessment",
                "description" => "To ensure that your digital marketing efforts are effective, we start by conducting a comprehensive assessment of your current website and online presence.<br/><br/> This allows us to understand your current strengths and weaknesses and identify areas for improvement. Our team will analyze your website structure, content, and overall online visibility to determine the best course of action for achieving your marketing goals.",
                "image" => "steps/step-1.svg"
            ),
            array(
                "title" => "Tailored Plan Development",
                "description" => "Based on the results of our website assessment, we'll develop a tailored digital marketing plan specifically for your business. Our plan will outline specific tactics and strategies that we'll use to drive more traffic to your website, generate more leads, and increase your online visibility. This plan will be based on your unique business goals and will be optimized for your specific needs.",
                "image" => "steps/step-2.svg"
            ),
            array(
                "title" => "Expert Execution and Continuous Improvement",
                "description" => "Our team of experts will then execute the tailored plan, utilizing the latest digital marketing techniques and strategies to drive results for your business.<br/><br/> We'll continuously monitor and test your marketing efforts, making adjustments and improvements as needed to ensure that you're getting the most out of your investment. With our ongoing support and optimization, you can be confident that your digital marketing strategy will deliver results over the long term.",
                "image" => "steps/step-3.svg"
            )
        ); ?>
    </div>
    <div class="steps-detail-section">
        <div class="container">
            <div class="row gx-5">

                <div class="col-md-6">
                    <?php foreach ($stepsarr as $key => $arr): ?>
                        <div class="step-content pe-5">
                            <div class="step-detail">
                                <span class="step-number">
                                    <?php echo $key + 1; ?>
                                </span>
                                <h5 class="text-blue-twmg">
                                    <?php echo $arr['title']; ?>
                                </h5>
                                <p class="main-content">
                                    <?php echo $arr['description']; ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="col-md-6">
                    <div class="step-image text-end">
                        <?php foreach ($stepsarr as $key => $arr): ?>
                            <div
                                class="image-content image-<?php echo $key; ?>                                             <?php echo $key == 0 ? "active" : ""; ?>">
                                <img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/<?php echo $arr['image']; ?>" />
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>
<div class="grow-section text-center long-padding">
    <div class="container">
        <h2 class="main-heading w-50 mx-auto mb-2">Elevate Your Online Presence with Our Digital Marketing Services</h2>
        <p class="mx-auto main-content w-50 mb-5">Maximize Your Reach, Boost Your Bottom Line, and Stay Ahead of the
            Competition with Our Expertly Crafted Digital Marketing Services
        </p>
        <div class="row">
            <?php
            $growarr = array(
                array(
                    "title" => "Marketing Strategy",
                    "description" => "Unlock Your Online Potential and Drive Business Growth with a Customized Digital Marketing Plan",
                    "icon" => '<i class="fa-solid fa-chess-knight"></i>',
                    "button_text" => "Read more about Strategy",
                ),
                array(
                    "title" => "Marketing Strategy + Implementation",
                    "description" => "Achieving Online Success with Ease: Our Full-Service Solution Takes Your Marketing Efforts to the Next Level",
                    "icon" => '<i class="fa-solid fa-chess-queen"></i>',
                    "button_text" => "Read more about Strategy+",
                )
            ); foreach ($growarr as $val): ?>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="icon">
                                <?php echo $val['icon']; ?>
                            </div>
                            <h2 class="text-dark-blue-twmg mb-3">
                                <?php echo $val['title']; ?>
                            </h2>
                            <p class="small-font text-dark-blue-twmg mb-4">
                                <?php echo $val['description']; ?>
                            </p>
                            <?php echo get_cta_button(array("button_text" => $val['button_text'])); ?>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="col-12">
                <div class="learn-more">
                    <i class="fa-regular fa-lightbulb"></i>
                    <span>Unlock Online Success. <a href="#">Click here</a> to learn more about our services</span>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="letter-section small-margin medium-padding bg-dark-blue-twmg position-relative">
    <div class="container">
        <div class="row gx-5">
            <div class="col-md-7">
                <h2 class="main-heading-white">Something about if we don't hit our goals - you don't pay</h2>
                <p class="main-content-white">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                    eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et ea rebum.</p>
                <ul class="small-margin p-0">
                    <li>Benefit for the business number 1</li>
                    <li>Benefit for the business number 1</li>
                    <li>Benefit for the business number 1</li>
                </ul>

                <div class="banner-button">
                    <?php echo get_cta_button(array("style" => 'subscribe', "button_text" => "Get a free digital visibility report")); ?>
                </div>
            </div>
            <div class="col-md-5">
                <div class="person-image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/kirby-portrait.png" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="video-section text-center small-padding">
    <div class="container">
        <h2 class="main-heading mb-5">How we helped a craft beer company achieve a 20% increase in turnover</h2>
        <div class="video-wrapper">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/craft-beer.png" />
            <i class="fa-solid fa-play"></i>
        </div>
        <div class="learn-more">
            <i class="fa-regular fa-lightbulb"></i>
            <span>See Results for Yourself. Browse Our Case Studies.</span>
        </div>
    </div>
</div>
<div class="faqs-section text-center small-padding mb-5">
    <div class="faqs-wrapper container">
        <h2 class="main-heading mb-2">FAQS</h2>
        <p class="w-50 mx-auto main-content mb-4">Find the Answers You Need with Our Frequently Asked Questions</p>
        <div class="row">
            <div class="col-md-6">
                <?php for ($i = 0; $i < 4; $i++) { ?>
                    <div class="faqs-item left-item">
                        <button class="text-start btn btn-primary d-block w-100 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#faqs-left-<?php echo $i; ?>" aria-expanded="false"
                            aria-controls="faqs-left-<?php echo $i; ?>">
                            What is digital marketing strategy and how can it benefit my business?
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
                            How can I measure the success of my digital marketing strategy?
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
<div class="cta-main-section">
    <div class="cta-section small-padding">
        <?php
        $title = "Maximize Your Earnings with Our Proven Digital Marketing Strategies. Book Your Appointment Now";
        $desc = "Unlock the Full Potential of Your Business and See a Significant Increase in Your Bottom Line with Our Customized and Results-Driven Digital Marketing Solutions";

        echo get_cta_banner(array("title" => $title, "desc" => $desc, "button_text" => "Schedule a Digital Marketing Consultation with our Experts Today!", "icon" => '<i class="fa-regular fa-calendar"></i>'));
        ?>
    </div>
</div>