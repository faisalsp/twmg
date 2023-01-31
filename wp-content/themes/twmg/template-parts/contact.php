<?php
$subtitle = "HOW DO WE HELP YOU GROW";
$title = "Need to Get In Touch With Our Friendly Team?";
echo get_top_banner(array("title" => $title, "subtitle" => $subtitle)); ?>
<div class="contact-us-section">
    <div class="container">
        <div class="row gx-5">
            <div class="col-md-6">
                <div class="contact-wrapper">
                    <p>We value your feedback and inquiries. Please don't hesitate to reach out to us for any questions
                        or concerns. Our dedicated team is available to assist you. You can contact us through the form
                        below, email or phone.</p>
                </div>
                <div class="border-box">
                    <h3>General Enquiries</h3>
                    <div class="detail">
                        <p><i class="fa-solid fa-envelope"></i><span>hello@twmg.com.au</span></p>
                        <p><i class="fa-solid fa-phone"></i><span>1300 000 000</span></p>
                    </div>
                </div>
                <div class="border-box">
                    <h3>Sales</h3>
                    <div class="detail">
                        <p><i class="fa-solid fa-envelope"></i><span>hello@twmg.com.au</span></p>
                        <p><i class="fa-solid fa-phone"></i><span>1300 000 000</span></p>
                    </div>
                </div>
                <div class="border-box">
                    <h3>Support</h3>
                    <div class="detail">
                        <p><i class="fa-solid fa-envelope"></i><span>hello@twmg.com.au</span></p>
                        <p><i class="fa-solid fa-phone"></i><span>1300 000 000</span></p>
                    </div>
                </div>
                <div class="career-wrapper">
                    <h3>Looking for a career?</h3>
                    <p>Join our team and be a part of something great! We are always looking for passionate and driven
                        individuals to join our organization. We offer competitive compensation and benefits, as well as
                        opportunities for growth and development within the company.</p>
                    <div class="border-box">
                        <h3>Careers</h3>
                        <div class="detail">
                            <p><i class="fa-solid fa-envelope"></i><span>hello@twmg.com.au</span></p>
                            <p><i class="fa-solid fa-phone"></i><span>1300 000 000</span></p>
                        </div>
                    </div>
                </div>
                <div class="join-wrapper">
                    <h3>Want to join our partner program?</h3>
                    <p>Our partner program is designed to provide mutual benefits for both our companies, by leveraging
                        our combined resources and expertise to reach new heights. Join our network of trusted partners
                        and enjoy exclusive perks, support, and opportunities for growth.</p>
                    <a href="#">Find out how to join our partner program</a>
                </div>
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
                <div class="icon mx-auto">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/opera-building.png"
                        class="w-100" />
                </div>
                <h3 class="text-center">Established on the picturesque North Sydney coastline in 2001</h3>
            </div>
        </div>
    </div>
</div>
<div class="cta-section">
    <?php echo get_cta_banner(array("button_text" => "Schedule a Digital Marketing Consultation with our Experts Today!", "icon" => '<i class="fa-regular fa-calendar"></i>')); ?>
</div>