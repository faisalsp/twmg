<?php

/**
 *
 * Template Name: Customer Results Template
 *
 */
get_header(); ?>

<div class="bg-primary single-header">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="breadcrumbs">
                    <span class="breadcrumb-title"><a href="">Home</a></span>
                    <span class="last"><a href="">Our customer results</a></span>
                </div>
                <h1>Our customer results</h1>
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
                <a href="" class="highlight-button">Get a Free Digital Marketing Audit</a>
            </div>
            <div class="col-4">
                <div class="floating-item bg-white">
                    <img src="https://dummyimage.com/300x300/cccccc/000.png" class="w-100" />
                </div>
            </div>
        </div>
    </div>
</section>
<section class="video-section">
    <div class="container">
        <ul class="d-flex g-2 justify-center nav">
            <li class="active"><a href="">Guides</a></li>
            <li><a href="">Bite Sized Strategies</a></li>
            <li><a href="">Videos</a></li>
            <li><a href="">Tools</a></li>
        </ul>
        <div class="row main-wrapper">
            <?php for ($i = 0; $i < 8; $i++): ?>
                <div class="col-6">
                    <a href="" class="d-block position-relative video-link">
                        <picture>
                            <source
                                srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/webp/craft-beer.webp"
                                type="image/webp">
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/craft-beer.png"
                                type="image/png">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/craft-beer.png"
                                alt="craft beer">
                        </picture>
                    </a>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="w-75 mx-auto text-center px-2">
            <h2>Here's Why Our Customers Love Us</h2>
            <p>We get you results using tried-and-tested digital marketing that works.</p>
        </div>
        <div class="slider">
            <div class="row">
                <?php for ($i = 0; $i < 12; $i++): ?>
                    <div class="col-3">
                        <div class="testimonial-header text-center">
                            <img src="https://dummyimage.com/50x50/cccccc/000.png" alt="dummy image" class="w-100">
                        </div>
                        <div class="card bg-white">
                            <p>"TWMG is fantastic! No matter which member of the team I deal with, I am always
                                taking to a true expert. They are passionate about their field, fun to work with and
                                are brilliant at what they do."</p>
                            <div class="card-footer d-flex align-center">
                                <div class="author-image testimonial-image">
                                    <img src="https://dummyimage.com/50x50/cccccc/000.png" alt="dummy image" class="w-100">
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="author-name">Brett Lee</div>
                                    <p class="title">Australian Fast Bowler</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>

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