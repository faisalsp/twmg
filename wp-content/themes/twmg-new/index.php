<!DOCTYPE html>
<html lang="en-AU">
<?php $permalink = get_stylesheet_directory_uri(); ?>

<head itemscope itemtype="https://schema.org/WebSite">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TWMG</title>
    <meta name='robots' content='noindex, nofollow'>
    <link rel='stylesheet' href='<?php echo $permalink; ?>/assets/stylesheets/index.min.css' media='all'>

    <script src="https://kit.fontawesome.com/c3d51ca1da.js" defer></script>
    <script src="<?php echo $permalink; ?>/assets/js/custom.js" defer></script>
    <script src="<?php echo $permalink; ?>/assets/js/slider.js" defer></script>
</head>

<body>
    <header class="container-fluid bg-primary">
        <a class="navbar-brand" href="">
            <img src="<?php echo $permalink; ?>/assets/images/white-logo.svg" alt="white logo" width="130"
                class="white-logo">
        </a>
        <button class="navbar-toggler" type="button"><span class="navbar-toggler-icon"></span></button>
        <nav>
            <ul class="d-flex fw-bold align-center">
                <li><a href="">Who is TWMG?</a></li>
                <li><a href="">Who we have helped</a></li>
                <li><a href="">How we grow businesses</a></li>
                <li><a href="">Guides & Insights</a></li>
                <li><a href="">Contact Us</a></li>
                <li><a href="" class="highlight-button">Free Marketing Review</a></li>
            </ul>
        </nav>
    </header>
    <main>
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
                            <h1>Digital strategies that deliver More leads, more revenue.</h1>
                            <p>Maximize Your Online Potential with a Customized Digital Marketing Plan that will
                                increase
                                your
                                visibility, drive more leads and skyrocket your sales.</p>
                            <a href="" class="highlight-button d-inline-block">Get a Free Digital Marketing Audit</a>
                        </div>
                    </div>
                    <div class="main-banner col">
                        <picture>
                            <source srcset="<?php echo $permalink; ?>/assets/images/webp/twmg.webp" type="image/webp">
                            <source srcset="<?php echo $permalink; ?>/assets/images/twmg.png" type="image/png">
                            <img src="<?php echo $permalink; ?>/assets/images/twmg.png" alt="Banner Image"
                                class="w-100">
                        </picture>
                    </div>
                </div>
                <div class="scroll-button text-center">
                    <a href="" class="text-white"><i class="fa-solid fa-angle-down"></i></a>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <h2 class="w-75 mx-auto text-center">We are passionate about helping small and medium-sized businesses
                    achieve their potential
                </h2>
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
                            <img src="<?php echo $permalink; ?>/assets/images/banner-image-new.svg" alt="Banner Image"
                                class="w-100">
                        </picture>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-primary">
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
                        "description" => "Our digital marketing strategy will help you reach more potential customers and increase your online visibility, allowing you to reach a wider audience and get your brand in front of more people.",
                        "icon" => '<i class="fa-solid fa-chess-queen"></i>',
                    ),
                    array(
                        "title" => "Higher Conversion Rates",
                        "description" => "By targeting the right audience with the right message, our digital marketing strategy will help you convert more leads into customers, resulting in increased revenue for your business.",
                        "icon" => '<i class="fa-solid fa-chess-queen"></i>',
                    ),
                    array(
                        "title" => "Measurable Results",
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
        <section>
            <div class="container">
                <div class="w-75 mx-auto text-center">
                    <h2>We are passionate about helping small and medium-sized
                        businesses
                        achieve their potential
                    </h2>
                    <p>We get you results using tried-and-tested digital marketing that works.</p>
                </div>
                <div class="row main-wrapper align-center">
                    <div class="col-4">
                        <ul class="d-flex flex-column g-2 sidenav">
                            <li class="active">
                                <h3><i class="fa-solid fa-chess-queen text-secondary"></i> Increased Online
                                    Visibility</h3>
                                <p>Our digital marketing strategy will help you reach more potential customers and
                                    increase
                                    your online visibility, allowing you to reach a wider audience and get your brand in
                                    front of more people.</p>
                            </li>
                            <li>
                                <h3><i class="fa-solid fa-chess-queen text-secondary"></i> Increased Online
                                    Visibility</h3>
                                <p>Our digital marketing strategy will help you reach more potential customers and
                                    increase
                                    your online visibility, allowing you to reach a wider audience and get your brand in
                                    front of more people.</p>
                            </li>
                            <li>
                                <h3><i class="fa-solid fa-chess-queen text-secondary"></i> Increased Online
                                    Visibility</h3>
                                <p>Our digital marketing strategy will help you reach more potential customers and
                                    increase
                                    your online visibility, allowing you to reach a wider audience and get your brand in
                                    front of more people.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-8">
                        <picture>
                            <source srcset="<?php echo $permalink; ?>/assets/images/webp/craft-beer.webp"
                                type="image/webp">
                            <source srcset="<?php echo $permalink; ?>/assets/images/craft-beer.png" type="image/png">
                            <img src="<?php echo $permalink; ?>/assets/images/craft-beer.png" alt="craft beer">
                        </picture>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-primary">
            <div class="container">
                <div class="w-75 mx-auto text-center">
                    <h2>We are passionate about helping small and medium-sized businesses achieve their potential</h2>
                    <p>We build relationships with our clients based on trust. We're an honest digital marketing
                        agency and with us, you'll never be in the dark. Let's work together to make your business a
                        success
                    </p>
                    <a href="" class="highlight-button">Get a Free Digital Marketing Audit</a>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="w-75 mx-auto text-center">
                    <h2>We are passionate about helping small and medium-sized businesses achieve their potential</h2>
                    <p>We get you results using tried-and-tested digital marketing that works.</p>
                </div>
                <div class="row main-wrapper">
                    <div class="col">
                        <div class="card bg-primary text-center">
                            <i class="fa-solid fa-chess-queen"></i>
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
                <div class="w-75 mx-auto text-center">
                    <h2>We are passionate about helping small and medium-sized businesses achieve their potential</h2>
                    <p>We get you results using tried-and-tested digital marketing that works.</p>
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
                                <img src="<?php echo $permalink; ?>/assets/images/steps/step-1.svg"
                                    alt="steps/step-1.svg">
                            </div>
                            <div class="d-flex image-content position-absolute image-1">
                                <img src="<?php echo $permalink; ?>/assets/images/steps/step-2.svg"
                                    alt="steps/step-2.svg">
                            </div>
                            <div class="d-flex image-content position-absolute image-2">
                                <img src="<?php echo $permalink; ?>/assets/images/steps/step-3.svg"
                                    alt="steps/step-3.svg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-primary with-arrow position-relative">
            <div class="container">
                <div class="w-75 mx-auto text-center">
                    <h2>A Digital Marketing Agency You Can Trust Really</h2>
                    <p>We build relationships with our clients based on trust. We're an honest digital marketing
                        agency and with us, you'll never be in the dark. Let's work together to make your business a
                        success
                    </p>
                    <a href="" class="highlight-button">Get a Free Digital Marketing Audit</a>
                </div>
            </div>
        </section>
        <section class="video-section">
            <div class="container">
                <div class="w-75 mx-auto text-center">
                    <h2>Digital Marketing Campaigns That Deliver ROI</h2>
                    <p>We get you results using tried-and-tested digital marketing that works.</p>
                </div>
                <div class="row main-wrapper">
                    <div class="col">
                        <a href="" class="d-block position-relative">
                            <picture>
                                <source srcset="<?php echo $permalink; ?>/assets/images/webp/craft-beer.webp"
                                    type="image/webp">
                                <source srcset="<?php echo $permalink; ?>/assets/images/craft-beer.png"
                                    type="image/png">
                                <img src="<?php echo $permalink; ?>/assets/images/craft-beer.png" alt="craft beer">
                            </picture>
                        </a>
                    </div>
                    <div class="col">
                        <a href="" class="d-block position-relative">
                            <picture>
                                <source srcset="<?php echo $permalink; ?>/assets/images/webp/craft-beer.webp"
                                    type="image/webp">
                                <source srcset="<?php echo $permalink; ?>/assets/images/craft-beer.png"
                                    type="image/png">
                                <img src="<?php echo $permalink; ?>/assets/images/craft-beer.png" alt="craft beer">
                            </picture>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="w-75 mx-auto text-center px-2">
                <h2>Here's Why Our Customers Love Us</h2>
                <p>We get you results using tried-and-tested digital marketing that works.</p>
            </div>
            <div class="slider position-relative">
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
                                        <img src="https://dummyimage.com/50x50/cccccc/000.png" alt="dummy image"
                                            class="w-100">
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
                                        <img src="https://dummyimage.com/50x50/cccccc/000.png" alt="dummy image"
                                            class="w-100">
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
                <div class="w-75 mx-auto text-center">
                    <h2>Teach Yourself Digital Marketing</h2>
                    <p>Learn more about internet marketing and increase your website's traffic, leads abd sales using
                        our extensive training resources
                    </p>
                </div>
                <ul class="row main-wrapper">
                    <?php for ($i = 0; $i < 3; $i++): ?>
                        <li class="col">
                            <a href="" class="h-100">
                                <div class="featured-image">
                                    <picture>
                                        <source srcset="<?php echo $permalink; ?>/assets/images/webp/blog-image.webp"
                                            type="image/webp">
                                        <source srcset="<?php echo $permalink; ?>/assets/images/blog-image.jpg"
                                            type="image/jpg">
                                        <img src="<?php echo $permalink; ?>/assets/images/blog-image.jpg" class="w-100"
                                            alt="blog image">
                                    </picture>
                                </div>
                                <div class="card bg-white">
                                    <h3>
                                        10 ways to reduce the cost of your ads that you can do right now
                                    </h3>
                                    <div class="card-footer">
                                        <div class="author-image">
                                            <img src="https://dummyimage.com/30x30/cccccc/000.png" alt="dummy image"
                                                class="w-100">
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
                <div class="w-75 mx-auto text-center">
                    <h2>Not sure where to start?</h2>
                    <p>Our expert Digital Marketing Consultants are here to help.</p>
                    <p>Request a free review and we'll send you and individually crafted report reviewing your.</p>
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
                                <img src="<?php echo $permalink; ?>/assets/images/zortrax.svg" alt="partner" class="w-100">
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
                <div class="row">
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
    </main>
    <footer>
        <div class="container">
            <a href="">
                <img src="<?php echo $permalink; ?>/assets/images/logo.svg" width="130" alt="footer logo">
            </a>
            <div class="row">
                <div class="col">
                    <p class="footer-desc">We are a digital marketing service provider that helps businesses achieve
                        online success through customized strategies and expert implementation. Our goal is to drive
                        results
                        and increase revenue for our clients.</p>
                    <div class="footer-info d-flex flex-column">
                        <div class="phone d-flex g-2 align-center">
                            <i class="fa-solid fa-phone text-secondary"></i>
                            <span class="h3">1300 000 000</span>
                        </div>
                        <div class="email">
                            <a href="" class="d-flex g-2 align-center">
                                <i class="fa-solid fa-envelope text-secondary"></i>
                                <span class="h3">Hello@twmg.com.au</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <span class="h3">Navigate</span>
                    <ul class="nav footer-navigation">
                        <li class="nav-item mb-1"><a href="" class="nav-link p-0 text-secondary">Home</a></li>
                        <li class="nav-item mb-1"><a href="" class="nav-link p-0 text-secondary">Home</a></li>
                        <li class="nav-item mb-1"><a href="" class="nav-link p-0 text-secondary">Home</a></li>
                        <li class="nav-item mb-1"><a href="" class="nav-link p-0 text-secondary">Home</a></li>
                        <li class="nav-item mb-1"><a href="" class="nav-link p-0 text-secondary">Home</a></li>
                        <li class="nav-item mb-1"><a href="" class="nav-link p-0 text-secondary">Home</a></li>
                        <li class="nav-item mb-1"><a href="" class="nav-link p-0 text-secondary">Home</a></li>
                        <li class="nav-item mb-1"><a href="" class="nav-link p-0 text-secondary">About us</a></li>
                        <li class="nav-item mb-1"><a href="" class="nav-link p-0 text-secondary">Service</a></li>
                        <li class="nav-item mb-1"><a href="" class="nav-link p-0 text-secondary">SEO</a></li>
                        <li class="nav-item mb-1"><a href="" class="nav-link p-0 text-secondary">Website Design</a>
                        </li>
                        <li class="nav-item mb-1"><a href="" class="nav-link p-0 text-secondary">Website Redesign</a>
                        </li>
                        <li class="nav-item mb-1"><a href="" class="nav-link p-0 text-secondary">PPC</a></li>
                        <li class="nav-item mb-1"><a href="" class="nav-link p-0 text-secondary">Digital Strategy</a>
                        </li>
                    </ul>
                </div>

                <div class="col">
                    <span class="h3">Socials</span>
                    <ul class="nav flex-row g-2 d-flex social-icons">
                        <li class="nav-item"><a href="" class="nav-link p-0"><i
                                    class="fa-brands fa-facebook text-secondary"></i></a>
                        </li>
                        <li class="nav-item"><a href="" class="nav-link p-0"><i
                                    class="fa-brands fa-facebook text-secondary"></i></a>
                        </li>
                        <li class="nav-item"><a href="" class="nav-link p-0"><i
                                    class="fa-brands fa-facebook text-secondary"></i></a>
                        </li>
                        <li class="nav-item"><a href="" class="nav-link p-0"><i
                                    class="fa-brands fa-facebook text-secondary"></i></a>
                        </li>
                    </ul>
                    <div class="subscribe-form mt-5">
                        <span class="h3">Subscribe to our Digital marketing tips</span>
                        <form class="mc-form">
                            <input type="email" class="w-100" placeholder="Enter Email">
                            <input type="Submit" class="w-100 highlight-button" value="Subscribe for 1 month">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php $year = date("Y"); ?>
        <p class="text-center copyright bg-primary">Copyright
            <?php echo $year; ?> TWMG PTY LTD
        </p>
    </footer>
</body>

</html>