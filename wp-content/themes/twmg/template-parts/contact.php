<?php
$subtitle = "HOW DO WE HELP YOU GROW";
$title = "Need to Get In Touch With Our Friendly Team?";
echo get_top_banner(array("title" => $title, "subtitle" => $subtitle)); ?>
<div class="contact-us-section extra-small-padding">
    <div class="container">
        <div class="row gx-5">
            <div class="col-md-6">
                <div class="contact-wrapper">
                    <p class="main-content mb-4">We value your feedback and inquiries. Please don't hesitate to reach out to us for any questions
                        or concerns. Our dedicated team is available to assist you. You can contact us through the form
                        below, email or phone.</p>
                </div>
                <div class="border-box">
                    <h3>General Enquiries</h3>
                    <div class="detail p-3">
                        <p><i class="fa-solid fa-envelope"></i><span>hello@twmg.com.au</span></p>
                        <p><i class="fa-solid fa-phone"></i><span>1300 000 000</span></p>
                    </div>
                </div>
                <div class="border-box">
                    <h3>Sales</h3>
                    <div class="detail p-3">
                        <p><i class="fa-solid fa-envelope"></i><span>hello@twmg.com.au</span></p>
                        <p><i class="fa-solid fa-phone"></i><span>1300 000 000</span></p>
                    </div>
                </div>
                <div class="border-box">
                    <h3>Support</h3>
                    <div class="detail p-3">
                        <p><i class="fa-solid fa-envelope"></i><span>hello@twmg.com.au</span></p>
                        <p><i class="fa-solid fa-phone"></i><span>1300 000 000</span></p>
                    </div>
                </div>
                <div class="career-wrapper extra-small-padding">
                    <h2 class="main-heading mb-2">Looking for a career?</h2>
                    <p class="main-content">Join our team and be a part of something great! We are always looking for passionate and driven
                        individuals to join our organization. We offer competitive compensation and benefits, as well as
                        opportunities for growth and development within the company.</p>
                    <div class="border-box">
                        <h3>Careers</h3>
                        <div class="detail p-3">
                            <p><i class="fa-solid fa-envelope"></i><span>hello@twmg.com.au</span></p>
                            <p><i class="fa-solid fa-phone"></i><span>1300 000 000</span></p>
                        </div>
                    </div>
                </div>
                <div class="join-wrapper">
                    <h2 class="main-heading mb-2">Want to join our partner program?</h2>
                    <p class="main-content">Our partner program is designed to provide mutual benefits for both our companies, by leveraging
                        our combined resources and expertise to reach new heights. Join our network of trusted partners
                        and enjoy exclusive perks, support, and opportunities for growth.</p>
                    <a href="#" class="mt-3 orange-button bg-blue-twmg">Find out how to join our partner program</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-title">
                        <h2 class="text-center mb-2">Send us a quick message and we will respond within <span
                                class="underscore position-relative">24 hours</span>
                        </h2>
                        <?php echo do_shortcode('[contact-form-7 id="17" title="Contact form 1"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact-divide-section my-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="icon mx-auto">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/opera-building.png"
                        class="w-100" />
                </div>
                <h2 class="main-heading-white text-center">Established on the picturesque North Sydney coastline in 2001</h2>
            </div>
        </div>
    </div>
</div>
<div class="cta-section small-padding">
    <?php echo get_cta_banner(array("button_text" => "Schedule a Digital Marketing Consultation with our Experts Today!", "icon" => '<i class="fa-regular fa-calendar"></i>')); ?>
</div>