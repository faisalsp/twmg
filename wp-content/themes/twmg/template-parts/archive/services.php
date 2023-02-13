<?php
$subtitle = "OUR SERVICES";
$title = "How we help you to grow your digital brand and find more paying customers";
$permalink = strpos(get_site_url(), "twmgdevs") === false ? get_permalink(59) : get_permalink(33);
echo get_top_banner(array("title" => $title, "subtitle" => $subtitle)); ?>
<div class="our-services-section">
    <div class="container">
        <div class="row gx-5">
            <div class="col-md-6">
                <p>We're not just a digital marketing agency. We're a business growth agency.</p>
                <p>We know that as a small to medium business owner, you're constantly juggling a lot of different
                    tasks: managing your employees, keeping an eye on your finances, and making sure you have enough
                    time to spend with your family.</p>
                <p>
                    That's why we focus on helping you grow your business—so that you can focus on what matters most to
                    you and your family. Whether it's by increasing sales or growing your customer base, we can provide
                    clear results for the marketing work that we do so you can see exactly how much return on investment
                    (ROI) there is for each dollar spent on our services.</p>
                <?php echo get_cta_button(array("button_text" => "Schedule a meeting with our digital marketing experts", "icon" => '<i class="fa-regular fa-calendar"></i>')); ?>
            </div>
            <div class="col-md-6">
                <div class="card-image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/digital-marketing.jpg" class="w-100" />
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/graph.png" class="w-100" />
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
                        <p>Our digital marketing strategy service is designed to help businesses of all sizes maximize
                            their online reach and drive results.</p>
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
                        <p>Our strategy plus service takes our digital marketing strategy service to the next level. In
                            addition to developing a customized plan, our team will also handle the implementation of
                            the plan for you.</p>
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
            <h3 class="w-50 mx-auto">Maximize Your Online Reach with Our Cutting-Edge Digital Marketing Techniques</h3>
            <p class="w-75 mx-auto">A combination of these methods is typically more effective than relying on just one.
                Also, regularly analyzing and adjusting your digital marketing strategy based on data and results is
                crucial for sustained traffic growth.</p>
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
        <div class="row">
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
                            <p>Our team of experts will work with you to create a strategy that is tailored to your unique
                                business goals.Our solutions will help you reach your target audience and drive conversions.
                            </p>
                            <a href="<?php echo $permalink; ?>">Learn More...</a>
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