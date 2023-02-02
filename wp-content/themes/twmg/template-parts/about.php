<?php
$subtitle = "GET TO KNOW THE TEAM BEHIND YOUR ONLINE SUCCESS";
$title = "Discover Our Passion for Driving Results and Our Commitment to Helping Businesses Grow";
echo get_top_banner(array("title" => $title, "subtitle" => $subtitle)); ?>
<div class="about-section">
    <div class="container">
        <div class="row gx-5">
            <div class="col-md-6">
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
            <div class="col-md-6">
                <div class="card">
                    <div class="card-title">
                        <h2>Our Partnerships</h2>
                        <div class="partner-list">
                            <div class="row gx-5 align-items-center text-center">
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
                                    <div class="col-6">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partners/<?php echo $partner; ?>"
                                            class="w-100" />
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about-image-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/discuss-image.png"
                        class="w-100" />
                    <span class="text-center">Image showing whatever the blog is about</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about-description-section">
    <div class="container">
        <div class="row gx-5">
            <div class="col-md-6">
                <div class="about-main-desc">
                    <p>We use sophisticated analysis, intelligent interpretation, insight and proven strategy to ensure
                        our clients are a step ahead of their competition.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-extra-desc">
                    <p>With a proven outstanding reputation and an enviable market-leading position developed over 15
                        years, we develop longstanding partnerships with our clients, creating targeted digital
                        strategies that mesh with clients’ business objectives.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="who-we-are-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="who-we-are-wrapper h-100">
                    <h3>what we value</h3>
                    <ul class="flex-column">
                        <li class="list-item mb-3">Client Satisfaction</li>
                        <li class="list-item mb-3">Innovation and Creativity</li>
                        <li class="list-item mb-3">Honesty and Transparency</li>
                        <li class="list-item mb-3">Results-Oriented Solutions</li>
                        <li class="list-item mb-3">Continuous Learning and Improvement</li>
                        <li class="list-item mb-3">Strong Client Relationships</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="who-we-are-wrapper h-100">
                    <h3>What We don't like</h3>
                    <ul class="flex-column">
                        <li class="list-item mb-3">Dishonesty and lack of transparency</li>
                        <li class="list-item mb-3">Mediocre or subpar results</li>
                        <li class="list-item mb-3">Poor communication and customer service</li>
                        <li class="list-item mb-3">Inefficient and outdated processes</li>
                        <li class="list-item mb-3">Disrespect for clients, colleagues, and the community.</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-wrapper h-100">
                    <h3>Our why</h3>
                    <p>We value the relationships we build with our clients and are dedicated to providing exceptional
                        customer service. <br /><br />Our goal is to make a positive impact on the lives and businesses
                        of those we
                        work with, and to continuously improve and evolve our services to meet their changing needs.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="letter-section">
    <div class="container">
        <div class="row gx-5">
            <div class="col-md-7">
                <h3>Letter From The Director</h3>
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
                <span class="name">Kirby Hibbins - Company Director</span>
            </div>
            <div class="col-md-5">
                <div class="person-image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/kirby-portrait.png" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="our-team-section">
    <div class="container">
        <div class="row gx-5">
            <div class="col-12">
                <h3 class="text-center">Our Executive Team</h3>
            </div>
            <?php
            $teamarr = array(
                array(
                    "name" => "Kirby Hibbins",
                    "title" => "Director / Digital Marketing Specialist"
                ),
                array(
                    "name" => "Reggie Spelman",
                    "title" => "Project Manager"
                ),
                array(
                    "name" => "Chendra Cahyadi",
                    "title" => "Dev Team Manager"
                ),
                array(
                    "name" => "Reggie Spelman",
                    "title" => "Project Manager"
                ),
            );
            ?>
            <?php foreach ($teamarr as $team): ?>
                <div class="col-md-3">
                    <img src="https://dummyimage.com/350x350/cccccc/000.png" class="w-100" />
                    <p class="text-center">
                        <?php echo $team['name']; ?>
                    </p>
                    <span class="text-center">
                        <?php echo $team['title']; ?>
                    </span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>