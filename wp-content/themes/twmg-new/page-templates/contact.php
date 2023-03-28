<?php

/**
 *
 * Template Name: Contact Us Template
 *
 */
get_header(); ?>

<div class="bg-primary single-header">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="breadcrumbs">
                    <span class="breadcrumb-title"><a href="">Home</a></span>
                    <span class="last"><a href="">Need To Get in Touch with our friendly team?</a></span>
                </div>
                <h1>Need To Get in Touch with our friendly team?</h1>
            </div>
        </div>
    </div>
</div>
<section class="floating-section contact-us-section">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <p>We value your feedback and inquiries. Please don't hesitate to reach out to us for any questions
                    or concerns. Our dedicated team is available to assist you. You can contact us through the form
                    below, email or phone.
                </p>
                <div class="box-wrapper d-flex flex-wrap">
                    <div class="border-box">
                        <div class="title">General Enquiries</div>
                        <div class="detail">
                            <p><i class="fa-solid fa-envelope"></i><span>hello@twmg.com.au</span></p>
                            <p><i class="fa-solid fa-phone"></i><span>1300 000 000</span></p>
                        </div>
                    </div>
                    <div class="border-box">
                        <div class="title">Sales</div>
                        <div class="detail">
                            <p><i class="fa-solid fa-envelope"></i><span>hello@twmg.com.au</span></p>
                            <p><i class="fa-solid fa-phone"></i><span>1300 000 000</span></p>
                        </div>
                    </div>
                    <div class="border-box">
                        <div class="title">Support</div>
                        <div class="detail">
                            <p><i class="fa-solid fa-envelope"></i><span>hello@twmg.com.au</span></p>
                            <p><i class="fa-solid fa-phone"></i><span>1300 000 000</span></p>
                        </div>
                    </div>
                </div>
                <h2>Looking for a career?</h2>
                <p>Join our team and be a part of something great! We are always looking for passionate and driven
                    individuals to join our organization. We offer competitive compensation and benefits, as well as
                    opportunities for growth and development within the company.</p>
                <div class="box-wrapper d-flex flex-wrap">
                    <div class="border-box">
                        <div class="title">Careers</div>
                        <div class="detail">
                            <p><i class="fa-solid fa-envelope"></i><span>Careers@twmg.com.au</span></p>
                        </div>
                    </div>
                </div>
                <h2>Want to join our partner program?</h2>
                <p>Our partner program is designed to provide mutual benefits for both our
                    companies, by leveraging our combined resources and expertise to reach new heights. Join our network
                    of trusted partners and enjoy exclusive perks, support, and opportunities for growth.</p>
                <a href="#" class="highlight-button primary-button br-5">Find out how to join our partner program</a>
            </div>
            <div class="col-4">
                <div class="card floating-item bg-white">
                    <div class="card-title">
                        <h2 class="text-center">Send us a quick message and we will respond within 24 hours</h2>
                        <?php echo do_shortcode('[contact-form-7 id="17" title="Contact form 1"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-divide-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="icon mx-auto">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/opera-building.png"
                        class="w-100" />
                </div>
                <h2 class="text-center text-white">Established on the picturesque North Sydney coastline in 2001</h2>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="w-75 mx-auto text-center">
            <h2>We are passionate about helping small and medium-sized businesses achieve their potential</h2>
            <p>We build relationships with our clients based on trust. We're an honest digital marketing
                agency and with us, you'll never be in the dark. Let's work together to make your business a
                success
            </p>
            <a href="" class="highlight-button">Check out our services</a>
        </div>
    </div>
</section>
<?php get_footer(); ?>