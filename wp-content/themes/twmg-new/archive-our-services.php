<?php

get_header(); ?>

<div class="bg-primary single-header">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="breadcrumbs">
                    <span class="breadcrumb-title"><a href="">Home</a></span>
                    <span class="last"><a href="">How we help you to grow your digital brand and find more paying
                            customers</a></span>
                </div>
                <h1>How we help you to grow your digital brand and find more paying customers</h1>
            </div>
        </div>
    </div>
</div>
<section class="floating-section">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <p>We're TWMG, and we're here to help you grow your business.</p>
                <p>Our mission is simple: to provide
                    small-to-medium business owners with digital marketing that works. We know that it's hard to
                    find someone who understands the needs of your business—and the demands of today's
                    marketplace—and can deliver results, so we've made it our goal to be that partner for you.</p>
                <p>We
                    offer clear ROI for our work by focusing on results first, and then working with you to develop
                    a plan that makes sense for your company and its goals. As a result, every client gets
                    personalized service and attention throughout the process—we don't just drop off some links or
                    set up an ad campaign for you and hope for the best!<br><br></p>
                <h2>Marketing Strategy</h2>
                <p>We're TWMG, and we're here to help you grow your business.</p>
                <p>Our mission is simple: to provide
                    small-to-medium business owners with digital marketing that works. We know that it's hard to
                    find someone who understands the needs of your business—and the demands of today's
                    marketplace—and can deliver results, so we've made it our goal to be that partner for you.</p>

            </div>
            <div class="col-4">
                <div class="card floating-item floating-icon bg-white">
                    <i class="fa-solid fa-chess-knight"></i>
                    <h2>Marketing Strategy</h2>
                    <p>
                        Our digital marketing strategy service is designed to help businesses of all sizes maximize
                        their online reach and drive results.</p>
                    </p>
                    <div class="card-icon">
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
                    <a href="" class="highlight-button d-block text-center">Learn how we use strategy to boost your revenue</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="services-section text-white">
    <div class="container">
        <div class="w-75 mx-auto text-center">
            <h2>We are passionate about helping small and medium-sized
                businesses
                achieve their potential
            </h2>
            <p>We get you results using tried-and-tested digital marketing that works.</p>
        </div>
        <?php $increasearr = array(
            array(
                "title" => "Increased Online Visibility",
                "description" => "Our team of experts will work with you to create a strategy that is tailored to your uniques business goals. Our solutions will",
                "icon" => '<i class="fa-solid fa-chess-queen"></i>',
            ),
            array(
                "title" => "Higher Conversion Rates",
                "description" => "Our team of experts will work with you to create a strategy that is tailored to your uniques business goals. Our solutions will",
                "icon" => '<i class="fa-solid fa-chess-queen"></i>',
            ),
            array(
                "title" => "Measurable Results",
                "description" => "Our team of experts will work with you to create a strategy that is tailored to your uniques business goals. Our solutions will",
                "icon" => '<i class="fa-solid fa-chess-queen"></i>',
            ),
            array(
                "title" => "Increased Online Visibility",
                "description" => "Our team of experts will work with you to create a strategy that is tailored to your uniques business goals. Our solutions will",
                "icon" => '<i class="fa-solid fa-chess-queen"></i>',
            ),
            array(
                "title" => "Higher Conversion Rates",
                "description" => "Our team of experts will work with you to create a strategy that is tailored to your uniques business goals. Our solutions will",
                "icon" => '<i class="fa-solid fa-chess-queen"></i>',
            ),
            array(
                "title" => "Measurable Results",
                "description" => "Our team of experts will work with you to create a strategy that is tailored to your uniques business goals. Our solutions will",
                "icon" => '<i class="fa-solid fa-chess-queen"></i>',
            )
        );
        ?>
        <ul class="row main-wrapper">
            <?php foreach ($increasearr as $key => $arr): ?>
                <li class="col-3 text-center">
                    <div class="card floating-icon bg-white">
                        <?php echo $arr['icon']; ?>
                        <h3>
                            <?php echo $arr['title']; ?>
                        </h3>
                        <p>
                            <?php echo $arr['description']; ?>
                        </p>
                        <h4>Key Benefits</h4>
                        <ul>
                            <li>Increase Traffic</li>
                            <li>Increase Click through Rate</li>
                            <li>Increase Conversions</li>
                        </ul>
                        <a href="" class="highlight-button d-block">Read more...</a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
<section class="faq-section">
    <div class="container">
        <div class="w-75 mx-auto text-center">
            <h2>We are passionate about helping small and medium-sized business achieve their full potential</h2>
            <p>We get you results using tried-and-tested digital marketing that works.</p>
        </div>
        <div class="row main-wrapper">
            <div class="col">
                <div class="faq-lists d-flex flex-column">
                    <?php for ($i = 0; $i < 5; $i++): ?>
                        <details <?php echo $i == 1 ? "open" : ""; ?>>
                            <summary>
                                <h3>What is a digital marketing strategy and how can it benefit my business?</h3>
                            </summary>
                            <p>Some placeholder content for the collapse component. This panel is hidden by default
                                but revealed when the user activates the relevant trigger.</p>
                        </details>
                    <?php endfor; ?>
                </div>
            </div>
            <div class="col">
                <div class="faq-lists d-flex flex-column">
                    <?php for ($i = 0; $i < 5; $i++): ?>
                        <details>
                            <summary>
                                <h3>What is a digital marketing strategy and how can it benefit my business?</h3>
                            </summary>
                            <p>Some placeholder content for the collapse component. This panel is hidden by default
                                but revealed when the user activates the relevant trigger.</p>
                        </details>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cta-section">
    <div class="container">
        <div class="w-75 bg-primary mx-auto text-center section-wrapper">
            <h2>A Digital Marketing Agency You Can Trust Really</h2>
            <p>We build relationships with our clients based on trust. We're an honest digital marketing
                agency and with us, you'll never be in the dark. Let's work together to make your business a
                success
            </p>
            <a href="" class="highlight-button">Get a Free Digital Marketing Audit</a>
        </div>
    </div>
</section>
<?php get_footer(); ?>