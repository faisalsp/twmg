<?php

/**
 *
 * Template Name: About Us Template
 *
 */
get_header(); ?>

<div class="bg-primary single-header">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="breadcrumbs">
                    <span class="breadcrumb-title"><a href="">Home</a></span>
                    <span class="last"><a href="">Who we are and what we stand for</a></span>
                </div>
                <h1>Who we are and what we stand for.</h1>
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
                    set up an ad campaign for you and hope for the best!</p>
            </div>
            <div class="col-4">
                <div class="card floating-item bg-white">
                    <div class="card-title">
                        <h2>Our Partnerships</h2>
                        <ul class="partner-list d-flex flex-wrap g-2 align-center">
                            <?php
                            $arrpartner = array(
                                "google-partner-logo.png",
                                "microsoft-partners-australia-sydney.png",
                                "kentico-partners-australia-sydney.png",
                                "australian-government-partner.png",
                                "modx-partners-australia-sydney.png",
                                "sitefinity-partners-australia-sydney.png",
                                "cart2quote-partners-australia-sydney.png",
                                "wp-engine-logo.png"
                            );
                            ?>
                            <?php foreach ($arrpartner as $partner): ?>
                                <li>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partners/<?php echo $partner; ?>"
                                        class="w-100" />
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="image-with-text-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <figure>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/discuss-image.png"
                        alt="Discuss" class="w-100">
                    <figcaption class="text-center">Image showing whatever the blog is about</figcaption>
                </figure>
            </div>
            <div class="col">
                <div class="about-main-desc">
                    <p>We use sophisticated analysis, intelligent interpretation, insight and proven strategy to ensure
                        our clients are a step ahead of their competition.</p>
                </div>
            </div>
            <div class="col">
                <p>With a proven outstanding reputation and an enviable market-leading position developed over 15
                    years, we develop longstanding partnerships with our clients, creating targeted digital
                    strategies that mesh with clients’ business objectives.</p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Our why</h2>
                <p>We value the relationships we build with our clients and are dedicated to providing exceptional
                    customer service.</p>
                <p>Our goal is to make a positive impact on the lives and businesses of those we work with, and to
                    continuously improve and evolve our services to meet their changing needs.</p>
            </div>
            <div class="col">
                <h2>What we value</h2>
                <ul class="with-bullet">
                    <li>Client Satisfaction</li>
                    <li>Innovation and Creativity</li>
                    <li>Honesty and Transparency</li>
                    <li>Results-Oriented Solutions</li>
                    <li>Continuous Learning and Improvement</li>
                    <li>Strong Client Relationships</li>
                </ul>
            </div>
            <div class="col">
                <h2>What We don't like</h2>
                <ul class="with-bullet">
                    <li>Dishonesty and lack of transparency</li>
                    <li>Mediocre or subpar results</li>
                    <li>Poor communication and customer service</li>
                    <li>Inefficient and outdated processes</li>
                    <li>Disrespect for clients, colleagues, and the community.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="letter-section position-relative">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2>Letter From The Director</h2>
                <p>As the Director of this company, I am committed to ensuring that our customers receive the highest
                    level of value and care. We understand that the success of our business is directly tied to the
                    satisfaction of our customers.</p>
                <p>That is why we have made it our mission to provide the same level of
                    dedication and attention to detail that we would expect for our own business. We strive to be
                    transparent and open with our clients about the results we are achieving on their behalf.</p>
                <p>We value
                    the trust that our customers place in us, and we are constantly working to improve our services to
                    meet their needs. Our team is dedicated to providing exceptional customer service and delivering
                    measurable results.
                <p>We appreciate your business and look forward to building a long-term
                    relationship with you.</p>
                <p>Sincerely,</p>
                <span class="name"><strong>Kirby Hibbins - Company Director</strong></span>
            </div>
            <div class="col-4">
                <div class="position-absolute person-image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/kirby-portrait.png" />
                </div>
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