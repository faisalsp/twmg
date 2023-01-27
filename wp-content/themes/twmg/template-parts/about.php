<?php
$subtitle = "HOW DO WE HELP YOU GROW";
$title = "We connect your business with paying customers";
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
                            <div class="row gx-5 align-items-center">
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
            <div class="col-12">
                <div class="about-image">
                    <img src="https://dummyimage.com/1440x435/cccccc/000.png" class="w-100" />
                    <span class="text-center">Image showing whatever the blog is about</span>
                </div>
            </div>
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