<?php
$subtitle = "HOW DO WE HELP YOU GROW";
$title = "Case Studies";
$permalink = strpos(get_site_url(), "twmgdevs") === false ? get_permalink(53) : get_permalink(18798);
$banner_desc = "We are eager to discuss your business needs, and answer any questions you may have. Enter your details and we will get back to you shortly.";
echo get_top_banner(array("title" => $title, "subtitle" => $subtitle, "banner_desc" => $banner_desc, "style" => "box")); ?>
<div class="case-studies-section">
    <div class="container">
        <div class="row gx-5">
            <div class="col-12">
                <a href="<?php echo $permalink; ?>">
                    <div class="featured-item text-center position-relative">
                        <div class="featured-body">
                            <i class="fa-brands fa-apple"></i>
                            <h4>SEARCH ENGINE OPTIMISATION</h4>
                            <h3 class="mx-auto">How we took Apple computers from working in their garage to a fortune
                                500
                                company</h3>
                        </div>

                        <div class="read-more">
                            <p class="mb-0">Read More</p>
                            <i class="fa-solid fa-angle-down"></i>
                        </div>
                    </div>
                </a>
            </div>
            <?php for ($i = 0; $i < 4; $i++): ?>
                <div class="col-md-6">
                    <a href="<?php echo $permalink; ?>">
                        <div class="case-item text-center position-relative">
                            <div class="featured-body">
                                <i class="fa-brands fa-apple"></i>
                                <h4>Digital Marketing</h4>
                                <h3 class="mx-auto">How we helped increase turnover by 130% for this large Aussie retailer
                                </h3>
                                <div class="excerpt">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadi pscing elitr, sed diam nonumy eirmod
                                        tempor
                                        invidunt ut labore et dolore magna aliqu yam erat, sed diam voluptua. ipsum dolor
                                        sit
                                        amet,
                                        consetetur sadi pscing elitr, se</p>
                                </div>
                            </div>
                            <div class="read-more">
                                <p class="mb-0">Read More</p>
                                <i class="fa-solid fa-angle-down"></i>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</div>
<div class="cta-section">
    <?php
    $title = "Get similar life changing results in your business. Book Your Appointment Now";
    $desc = "Unlock the Full Potential of Your Business and See a Significant Increase in Your Bottom Line with Our Customized and Results-Driven Digital Marketing Solutions";
    ?>
    <?php echo get_cta_banner(array("title" => $title, "desc" => $desc, "button_text" => "Schedule a Digital Marketing Consultation with our Experts Today!", "icon" => '<i class="fa-regular fa-calendar"></i>')); ?>
</div>