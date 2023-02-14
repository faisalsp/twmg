<?php
$subtitle = "OUR SERVICES";
$title = "How we help you to grow your digital brand and find more paying customers";
$permalink = strpos(get_site_url(), "twmgdevs") === false ? get_permalink(59) : get_permalink(18802);
echo get_top_banner(array("title" => $title, "subtitle" => $subtitle)); ?>
<div class="our-services-section small-padding">
    <div class="container">
        <div class="row gx-5">
            <div class="col-md-6">
                <div class="main-content">
                    <p>We're not just a digital marketing agency. We're a business growth agency.</p>
                    <p>We know that as a small to medium business owner, you're constantly juggling a lot of different
                        tasks: managing your employees, keeping an eye on your finances, and making sure you have enough
                        time to spend with your family.</p>
                    <p>
                        That's why we focus on helping you grow your business—so that you can focus on what matters most
                        to
                        you and your family. Whether it's by increasing sales or growing your customer base, we can
                        provide
                        clear results for the marketing work that we do so you can see exactly how much return on
                        investment
                        (ROI) there is for each dollar spent on our services.</p>
                    <div class="mt-4">
                        <?php echo get_cta_button(array("button_text" => "Schedule a meeting with our digital marketing experts", "icon" => '<i class="fa-regular fa-calendar"></i>')); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/digital-marketing.jpg"
                        class="w-100" />
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/graph.png" class="w-100" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="potential-business-section long-padding">
    <div class="container">
        <div class="row gx-5">
            <div class="col-12 text-center">
                <h3 class="mx-auto main-heading mb-2">Unlock Your Business Potential with Our Customized Digital
                    Marketing Strategies
                </h3>
                <p class="w-75 mx-auto main-content">Customized digital marketing strategy to drive traffic, increase
                    conversions, and boost revenue. Our
                    experts will work with you to unlock your business's potential in the digital world</p>
            </div>
            <div class="col-md-5 offset-md-1">
                <div class="card br-20 mt-5">
                    <div class="card-head">
                        <i class="fa-solid fa-chess-knight"></i>
                    </div>
                    <div class="card-body">
                        <h2 class="text-dark-blue-twmg mb-2">Marketing Strategy</h2>
                        <p class="common-body text-dark-blue-twmg mb-4">Our digital marketing strategy service is
                            designed to help businesses of all sizes maximize
                            their online reach and drive results.</p>
                        <div class="card-icon extra-small-padding">
                            <p>
                                <i class="fa-solid fa-bell-concierge"></i>
                                <span>Services provided by our in-house team, or through our partner network</span>
                            </p>
                            <p>
                                <i class="fa-solid fa-bell-concierge"></i>
                                <span>All work is overseen by one of our managers</span>
                            </p>
                            <p class="mb-0">
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
                <div class="card plus br-20 mt-5">
                    <div class="card-head">
                        <span>Most Value</span>
                        <i class="fa-solid fa-chess-queen"></i>
                    </div>
                    <div class="card-body">
                        <h2 class="text-dark-blue-twmg mb-2">Marketing Strategy Plus</h2>
                        <p class="common-body text-dark-blue-twmg mb-4">Our strategy plus service takes our digital
                            marketing strategy service to the next level. In
                            addition to developing a customized plan, our team will also handle the implementation of
                            the plan for you.
                        </p>
                        <div class="card-icon extra-small-padding">
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
                            <p class="mb-0">
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
<div class="effective-marketing-section small-padding">
    <div class="container">
        <div class="main-text text-center">
            <h2 class="w-50 mx-auto main-heading mb-2">Maximize Your Online Reach with Our Cutting-Edge Digital
                Marketing Techniques</h2>
            <p class="w-75 mx-auto main-content">A combination of these methods is typically more effective than relying
                on just one.
                Also, regularly analyzing and adjusting your digital marketing strategy based on data and results is
                crucial for sustained traffic growth.</p>
        </div>
        <?php $stepsarr = array(
            "Search Engine Optimisation",
            "Conversion Optimisation",
            "Email Marketing",
            "Pay-per-click advertising",
            "Social Media Marketing",
            "Influencer Marketing",
            "Content Marketing",
            "Video Marketing"
        ); ?>
        <div class="row">
            <?php foreach ($stepsarr as $key => $val): ?>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="digital-item text-center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/grow-icon.png" />
                        <h4 class="proxima-bold">
                            <?php echo $val; ?>
                        </h4>
                        <div class="digital-desc">
                            <h5 class="proxima-bold">
                                <?php echo $val; ?>
                            </h5>
                            <p class="small-font">Our team of experts will work with you to create a strategy that is
                                tailored to your unique
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
                    <span class="common-body text-dark-blue-twmg">This indicates services provided by partner
                        network. <a href="#">Learn more</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cta-section small-padding">
    <?php echo get_cta_banner(array("button_text" => "Schedule a Digital Marketing Consultation with our Experts Today!", "icon" => '<i class="fa-regular fa-calendar"></i>')); ?>
</div>