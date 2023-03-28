<?php
/**
 * Template Name: Front Page Template
 * 
 * 
 *  
 */

get_header(); ?>
<section class="bg-primary">
    <div class="banner-wrapper container">
        <div class="row align-center">
            <div class="main-banner col">
                <div class="google-rating d-flex">
                    <a href="" class="text-secondary">
                        <i class="fa-brands fa-google"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                    </a>
                    <div class="google-desc">
                        <p>Rated 4.8 on Google</p>
                    </div>
                </div>
                <div class="content-wrapper">
                    <h1>Drive More Sales with Our Effective Digital Strategies.</h1>
                    <p>Looking to grow your business and increase sales? Our expert digital strategies have a proven
                        track record of success. Get started today by requesting a free digital marketing audit.</p>
                    <a href="" class="highlight-button d-inline-block">Get a Free Digital Marketing Audit</a>
                </div>
            </div>
            <div class="main-banner col">
                <picture>
                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/webp/twmg.webp"
                        type="image/webp">
                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/twmg.png"
                        type="image/png">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/twmg.png" alt="Banner Image"
                        class="w-100">
                </picture>
            </div>
        </div>
        <div class="scroll-button text-center">
            <a href="" class="text-white"><i class="fa-solid fa-angle-down"></i></a>
        </div>
    </div>
</section>
<section class="business-growth-section">
    <div class="container">
        <div class="w-60 mx-auto text-center">
            <h2>Supercharge Your Digital Strategy and Skyrocket Your Business Growth</h2>
            <p>Are you ready to take your business to the next level? Our expert team is here to help you supercharge
                your digital strategy and achive skyrocketing growth. Here are just a few of the benefits you can expect
                when you work with us:</p>
        </div>
        <?php $increasearr = array(
            array(
                "title" => "Increased Online Visibility and targeted traffic",
                "description" => "Our digital marketing strategy will help you reach more potential customers and increase your online visibility, allowing you to reach a wider audience and get your brand in front of more people.",
                "icon" => '<i class="fa-solid fa-chess-queen"></i>',
            ),
            array(
                "title" => "Improved Conversion Rates",
                "description" => "By targeting the right audience with the right message, our digital marketing strategy will help you convert more leads into customers, resulting in increased revenue for your business.",
                "icon" => '<i class="fa-solid fa-chess-queen"></i>',
            ),
            array(
                "title" => "Higher return on investment (ROI)",
                "description" => "Unlike traditional marketing methods, digital marketing provides measurable results, allowing you to track your progress and see the impact of your marketing efforts in real-time.",
                "icon" => '<i class="fa-solid fa-chess-queen"></i>',
            )
        );
        ?>
        <ul class="row main-wrapper">
            <?php foreach ($increasearr as $key => $arr): ?>
                <li class="col text-center">
                    <div class="card bg-white h-100">
                        <?php echo $arr['icon']; ?>
                        <h3>
                            <?php echo $arr['title']; ?>
                        </h3>
                        <p>
                            <?php echo $arr['description']; ?>
                        </p>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
<section class="bg-primary">
    <div class="container">
        <h2 class="w-60 mx-auto text-center">Meet the Team Behind Your Successful Digital Marketing Strategies</h2>
        <div class="row center main-wrapper">
            <div class="col">
                <div class="content-wrapper">
                    <p>Maximize Your Online Potential with a Customized Digital Marketing Plan that will
                        increase
                        your visibility, drive more leads and skyrocket your sales. Maximize Your Online
                        Potential
                        with a Customized Digital Marketing Plan that will increase
                        your visibility, drive more leads and skyrocket your sales. Maximize Your Online
                        Potential
                        with a Customized Digital Marketing Plan that will increase
                        your visibility, drive more leads and skyrocket your sales.</p>
                    <p>Maximize Your Online Potential with a Customized Digital Marketing Plan that will
                        increase
                        your visibility, drive more leads and skyrocket your sales. Maximize Your Online
                        Potential
                        with a Customized Digital Marketing Plan that will increase
                        your visibility, drive more leads and skyrocket your sales.</p>
                </div>
            </div>
            <div class="col">
                <picture>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner-image-new.svg"
                        alt="Banner Image" class="w-100">
                </picture>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="w-60 mx-auto text-center">
            <h2>Take Your Business to New Heights with These Game-Changing Features</h2>
            <p>With our cutting-edge digital marketing strategies, you can reach new heights and stay ahead of the
                competition. Here are three key features that will transform your online presence and help you achieve
                your business goals.</p>
        </div>
        <div class="row main-wrapper align-center">
            <div class="col-4">
                <ul class="d-flex flex-column g-2 sidenav">
                    <li class="active">
                        <h3><i class="fa-solid fa-chess-queen text-secondary"></i> Get Clear Insights on Your Marketing
                            Investments</h3>
                        <p>Our digital marketing strategy will help you reach more potential customers and
                            increase
                            your online visibility, allowing you to reach a wider audience and get your brand in
                            front of more people.</p>
                    </li>
                    <li>
                        <h3><i class="fa-solid fa-chess-queen text-secondary"></i> No Lock-In Contracts and Scalable
                            Pricing Options</h3>
                        <p>Our digital marketing strategy will help you reach more potential customers and
                            increase
                            your online visibility, allowing you to reach a wider audience and get your brand in
                            front of more people.</p>
                    </li>
                    <li>
                        <h3><i class="fa-solid fa-chess-queen text-secondary"></i> Multiple Digital Channels, One
                            East-to-Understand Invoice</h3>
                        <p>Our digital marketing strategy will help you reach more potential customers and
                            increase
                            your online visibility, allowing you to reach a wider audience and get your brand in
                            front of more people.</p>
                    </li>
                </ul>
            </div>
            <div class="col-8">
                <picture>
                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/webp/craft-beer.webp"
                        type="image/webp">
                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/craft-beer.png"
                        type="image/png">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/craft-beer.png"
                        alt="craft beer">
                </picture>
            </div>
        </div>
    </div>
</section>
<section class="bg-primary">
    <div class="container">
        <div class="w-60 mx-auto text-center">
            <h2>Ready to Supercharge Your Digital Marketing? Get Your Free Audit Now!</h2>
            <p>Sign up for a free digital marketing audit today and unlock the power of your business. With a
                comprehensive report detailing your strengths and areas for improvement. You'll have everything you need
                to take your business to the next level.
            </p>
            <a href="" class="highlight-button">Get a Free Digital Marketing Audit</a>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="w-60 mx-auto text-center">
            <h2>Discover Our Comprehensive Digital Marketing Services</h2>
            <p>Discover the Full Range of Our Services and How They Can Benefit Your Business. See How Our Expertise Can
                Help You Take Your Digital Marketing to the Next Level.</p>
        </div>
        <div class="row main-wrapper">
            <div class="col">
                <div class="card bg-primary text-center">
                    <i class="fa-solid fa-chess-queen main-icon"></i>
                    <h3>Digital Marketing Strategy</h3>
                    <p class="mb-0">
                        Our digital marketing strategy will help you reach more potential customers and increase
                        your online visibility, allowing you to reach a wider audience and get your brand in
                        front of more people. </p>
                    <a href="" class="highlight-button">Get a Free Digital Marketing Audit</a>
                </div>
            </div>
            <div class="col">
                <div class="faq-lists d-flex flex-column">
                    <?php for ($i = 0; $i < 5; $i++): ?>
                        <details>
                            <summary class="bg-white">
                                <h3><i class="fa-solid fa-chess-queen"></i> What is lorem ipsum?</h3>
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
<section>
    <div class="container">
        <div class="w-60 mx-auto text-center">
            <h2>Our Proven Process for Digital Marketing Success</h2>
            <p>At TWMG, we take a comprehensive approach to digital marketing to ensure that our clients get the best
                results possible. Our four-step process is designed to help you identify your goals, understand your
                market, develop a solid strategy, and continually refine your approach.</p>
        </div>
        <div class="row main-wrapper">
            <div class="col">
                <ul class="process-list">
                    <li class="text-primary d-flex">
                        <h3 class="title">Comprehensive Website Assessment 1</h3>
                        <p>To ensure that your digital marketing efforts are effective, we start by
                            conducting a
                            comprehensive assessment of your current website and online presence.</p>
                        <p>This allows us to understand your current strengths and weaknesses and
                            identify areas
                            for
                            improvement. Our team will analyze your website structure, content, and
                            overall
                            online
                            visibility to determine the best course of action for achieving your
                            marketing
                            goals.</p>
                    </li>
                    <li class="text-primary d-flex">
                        <h3 class="title">Comprehensive Website Assessment 2</h3>
                        <p>To ensure that your digital marketing efforts are effective, we start by
                            conducting a
                            comprehensive assessment of your current website and online presence.</p>
                        <p>This allows us to understand your current strengths and weaknesses and
                            identify areas
                            for
                            improvement. Our team will analyze your website structure, content, and
                            overall
                            online
                            visibility to determine the best course of action for achieving your
                            marketing
                            goals.</p>
                    </li>
                    <li class="text-primary d-flex">
                        <h3 class="title">Comprehensive Website Assessment 3</h3>
                        <p>To ensure that your digital marketing efforts are effective, we start by
                            conducting a
                            comprehensive assessment of your current website and online presence.</p>
                        <p>This allows us to understand your current strengths and weaknesses and
                            identify areas
                            for
                            improvement. Our team will analyze your website structure, content, and
                            overall
                            online
                            visibility to determine the best course of action for achieving your
                            marketing
                            goals.</p>
                    </li>
                </ul>
            </div>
            <div class="col">
                <div class="step-image text-end">
                    <div class="d-flex image-content position-absolute image-0 active">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/steps/step-1.svg"
                            alt="steps/step-1.svg">
                    </div>
                    <div class="d-flex image-content position-absolute image-1">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/steps/step-2.svg"
                            alt="steps/step-2.svg">
                    </div>
                    <div class="d-flex image-content position-absolute image-2">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/steps/step-3.svg"
                            alt="steps/step-3.svg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-primary with-arrow position-relative">
    <div class="container">
        <div class="w-60 mx-auto text-center">
            <h2>See What Our Clients Have to Say About Us</h2>
            <p>Partner with a Digital Marketing Agency that Values Trust and Transparency. Our Honest Approach Keeps You
                in the Loop Every Step of the Way. Let's Collaborate to Propel Your Business Forward.
            </p>
            <a href="" class="highlight-button">Get a Free Digital Marketing Audit</a>
        </div>
    </div>
</section>
<section class="video-section">
    <div class="container">
        <div class="w-60 mx-auto text-center">
            <h2>See How Our Digital Marketing Strategies Helped Business Like Yours Succeed</h2>
            <p>Explore some of our recent success stories and discover how our digital marketing strategies have helped
                businesses just like yours achieve their goals.</p>
        </div>
        <div class="row main-wrapper">
            <div class="col">
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
            <div class="col">
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
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="w-60 mx-auto text-center px-2">
            <h2>See What Our Clients Are Saying About Us</h2>
            <p>what our clients have to say about their experience working with us. Our satisfied clients are a
                testament to
                our commitment to delivering high-quality results.</p>
        </div>
    </div>
    <div class="slider position-relative fade-side">
        <ul class="items position-relative">
            <?php for ($i = 0; $i < 5; $i++): ?>
                <li class="item">
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
                </li>
            <?php endfor; ?>
        </ul>
        <ul class="items next-items position-relative">
            <?php for ($i = 0; $i < 5; $i++): ?>
                <li class="item">
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
                </li>
            <?php endfor; ?>
        </ul>
    </div>
</section>
<section class="bg-primary with-arrow article-section position-relative">
    <div class="container">
        <div class="w-60 mx-auto text-center">
            <h2>Elevate Your Marketing Game with Our Educational resources</h2>
            <p>Unlock the Secrets of Digital Marketing with Our Free Resources - Empower Yourself to Grow Your Business.
            </p>
        </div>
        <ul class="row main-wrapper">
            <?php for ($i = 0; $i < 3; $i++): ?>
                <li class="col">
                    <a href="" class="h-100">
                        <div class="featured-image">
                            <picture>
                                <source
                                    srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/webp/blog-image.webp"
                                    type="image/webp">
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog-image.jpg"
                                    type="image/jpg">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog-image.jpg"
                                    class="w-100" alt="blog image">
                            </picture>
                        </div>
                        <div class="card bg-white">
                            <h3>
                                10 ways to reduce the cost of your ads that you can do right now
                            </h3>
                            <div class="card-footer">
                                <div class="author-image">
                                    <img src="https://dummyimage.com/30x30/cccccc/000.png" alt="dummy image" class="w-100">
                                </div>
                                <div class="author-name"> Brett Lee</div>
                                <div class="read-duration"> 10min read</div>
                            </div>
                        </div>
                    </a>
                </li>
            <?php endfor; ?>
        </ul>
        <ul class="d-flex g-2 justify-center nav">
            <li class="active"><a href="">Guides</a></li>
            <li><a href="">Bite Sized Strategies</a></li>
            <li><a href="">Videos</a></li>
            <li><a href="">Tools</a></li>
        </ul>
    </div>
</section>
<section>
    <div class="container">
        <div class="w-60 mx-auto text-center">
            <h2>Not sure where to start?</h2>
            <p>Are you Lost in the world of digital marketing? Don't worry, we've got you covered. Take the first step
                towards growing your business online by getting a free digital marketing audit from us. Our experts will
                help you identify areas of improvement and suggest strategies to boost your online presence.</p>
            <a href="" class="highlight-button">Get a Free Digital Marketing Audit</a>
        </div>
    </div>
</section>
<section class="bg-white">
    <div class="container">
        <div class="w-75 mx-auto text-center">
            <h2>Brands we've worked with</h2>
        </div>
        <div class="client-images">
            <ul class="d-flex justify-center">
                <?php for ($i = 0; $i < 18; $i++): ?>
                    <li>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/zortrax.svg" alt="partner"
                            class="w-100">
                    </li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</section>
<section class="faq-section">
    <div class="container">
        <div class="w-75 mx-auto text-center">
            <h2>FAQS</h2>
            <p>Find the Answers You Need with Our Frequently Asked Questions</p>
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