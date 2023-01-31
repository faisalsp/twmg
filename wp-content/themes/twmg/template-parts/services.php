<?php
$subtitle = "OUR SERVICES";
$title = "How we help you to grow your digital brand and find more paying customers";
echo get_top_banner(array("title" => $title, "subtitle" => $subtitle)); ?>
<div class="our-services-section">
    <div class="container">
        <div class="row gx-5">
            <div class="col-md-6">
                <p>We're not just a digital marketing agency. We're a business growth agency.</p>
                <p> We know that as a small to
                    medium business owner, you're constantly juggling a lot of different tasks: managing your employees,
                    keeping an eye on your finances, and making sure you have enough time to spend with your family.</p>
                <p>
                    That's why we focus on helping you grow your business—so that you can focus on what matters most to
                    you and your family. Whether it's by increasing sales or growing your customer base, we can provide
                    clear results for the marketing work that we do so you can see exactly how much return on investment
                    (ROI) there is for each dollar spent on our services.</p>
                <?php echo get_cta_button(array("button_text" => "Schedule a meeting with our digital marketing experts", "icon" => '<i class="fa-regular fa-calendar"></i>')); ?>
            </div>
            <div class="col-md-6">
                <div class="card-image">
                    <img src="https://dummyimage.com/500x310/cccccc/000.png" class="w-100" />
                    <img src="https://dummyimage.com/500x310/cccccc/000.png" class="w-100" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="potential-business-section">
    <div class="container">
        <div class="row gx-5">
            <div class="col-12 text-center">
                <h3 class="w-50 mx-auto">Unlock Your Business Potential with Our Customized Digital
                    Marketing Strategies
                </h3>
                <p class="w-50 mx-auto">Customized digital marketing strategy to drive traffic, increase
                    conversions, and boost revenue. Our
                    experts will work with you to unlock your business's potential in the digital world</p>
            </div>
            <div class="col-md-5 offset-md-1">
                <div class="card">
                    <div class="card-head">
                        <i class="fa-solid fa-chess-knight"></i>
                    </div>
                    <div class="card-body">
                        <h4>Marketing Strategy</h4>
                        <p>Our company creates custom digital marketing strategies. We work with you to understand your
                            audience and develop a plan to increase website traffic and conversions. We provide a
                            comprehensive strategy that can be implemented by your own team or an agency.</p>
                        <div class="card-icon">
                            <p>
                                <i class="fa-solid fa-bell-concierge"></i>
                                <span>Services provided by our in-house team, or through our partner network</span>
                            </p>
                            <p>
                                <i class="fa-solid fa-bell-concierge"></i>
                                <span>All work is overseen by one of our managers</span>
                            </p>
                            <p>
                                <i class="fa-solid fa-bell-concierge"></i>
                                <span>Services provided by our in-house team, or through our partner network</span>
                            </p>
                        </div>
                    </div>
                    <div class="card-footer">
                        <?php echo get_cta_button(array("button_text" => "Learn how we use strategy to boost your revenue")); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card plus">
                    <div class="card-head">
                        <span>Most Value</span>
                        <i class="fa-solid fa-chess-queen"></i>
                    </div>
                    <div class="card-body">
                        <h4>Marketing Strategy Plus</h4>
                        <p>We provide a full-service digital marketing package, including strategy and implementation.
                            Our team will create a personalized plan to increase website traffic and revenue. We handle
                            all aspects of the process.</p>
                        <div class="card-icon">
                            <p>
                                <i class="fa-solid fa-chess-knight"></i>
                                <span>The same meticulously crafted plan, constantly monitered by our expert
                                    team.</span>
                            </p>
                            <p>
                                <i class="fa-solid fa-bell-concierge"></i>
                                <span>Services provided by our in-house team, or through our partner network</span>
                            </p>
                            <p>
                                <i class="fa-solid fa-bell-concierge"></i>
                                <span>All work is overseen by one of our managers</span>
                            </p>
                            <p>
                                <i class="fa-solid fa-bell-concierge"></i>
                                <span>Services provided by our in-house team, or through our partner network</span>
                            </p>
                        </div>
                    </div>
                    <div class="card-footer">
                        <?php echo get_cta_button(array("button_text" => "Learn how we use strategy to boost your revenue", "icon" => '<i class="fa-solid fa-book-open-reader"></i>')); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="effective-marketing-section">
    <div class="container">
        <div class="main-text text-center">
            <h3 class="w-50 mx-auto">Effective Digital Marketing Services to Boost Your Business Growth</h3>
            <p class="w-50 mx-auto">Our service offering encompasses a wide range of tactics that can help your
                business thrive in the digital landscape.</p>
        </div>
        <?php $stepsarr = array(
            "Search Engine Optimisation",
            "Conversion Optimisation",
            "Direct Email Marketing",
            "Pay-per-click advertising",
            "Social Media Marketing",
            "Direct Response Landing Pages",
            "Content Marketing",
            "Branding & Logo Design"
        ); ?>
        <div class="row gx-5">
            <?php foreach ($stepsarr as $key => $val): ?>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="digital-item text-center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/grow-icon.png" />
                        <h4>
                            <?php echo $val; ?>
                        </h4>
                        <div class="digital-desc">
                            <h5>
                                <?php echo $val; ?>
                            </h5>
                            <p>Enhancing Your Online Presence through Strategic Search Engine Optimization</p>
                            <a href="#">Learn More...</a>
                        </div>
                        <?php if ($key > 5) { ?>
                            <div class="recommended">
                                <i class="fa-solid fa-handshake"></i>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="col-12">
                <div class="desc text-center">
                    <div class="recommended">
                        <i class="fa-solid fa-handshake"></i>
                    </div>
                    <span>This indicates services provided by partner
                        network. <a href="#">Learn more</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cta-section">
    <?php echo get_cta_banner(array("button_text" => "Schedule a Digital Marketing Consultation with our Experts Today!", "icon" => '<i class="fa-regular fa-calendar"></i>')); ?>
</div>