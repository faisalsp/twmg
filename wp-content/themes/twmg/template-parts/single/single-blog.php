<?php
$subtitle = "SOCIAL MEDIA MARKETING";
$title = "10 Ways To Grow Your Audience on Youtube";
$banner_desc = "Last checked and updated on 26 October 2022";
echo get_top_banner(array("title" => $title, "subtitle" => $subtitle, "banner_desc" => $banner_desc, "style" => "box")); ?>
<div class="single-blog-section">
    <div class="container">
        <div class="blog-detail mx-auto">
            <?php $fimage = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
            <figure class="featured-image">
                <img src="<?php echo $fimage; ?>" alt="">
            </figure>
            <?php the_content(); ?>
            <div class="additional-wrapper d-flex flex-row">
                <div class="share-wrapper d-flex flex-row">
                    <p>Share on:</p>
                    <ul class="nav flex-row">
                        <li><a href="#"><i class="fa-brands fa-square-facebook"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-square-facebook"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-square-facebook"></i></a></li>
                    </ul>
                </div>
                <div class="actions-wrapper d-flex flex-row ms-auto">
                    <p>Other actions:</p>
                    <ul class="nav flex-row">
                        <li>
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Download as PDF">
                                <i class="fa-solid fa-download"></i>
                            </a>
                        </li>
                        <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Print Page">
                                <i class="fa-solid fa-print"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="related-posts-section">
                <h3 class="text-center">Related Posts</h3>
                <?php for ($i = 0; $i < 3; $i++): ?>
                    <div class="related-item">
                        <h5>Business Growth</h5>
                        <h4>10 ways to reduce the cost of your ads that you can do right now reduce the cost of your ads
                            that you</h4>
                    </div>
                <?php endfor; ?>
            </div>
            <div class="related-categories-section">
                <h3 class="text-center">Related Categories</h3>
                <ul class="nav flex-row">
                    <?php for ($i = 0; $i < 8; $i++): ?>
                        <li><a href="#">Business Growth</a></li>
                    <?php endfor; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="cta-section">
    <?php
    $title = "Don't Miss Out on the Latest Business Growth Strategies - Sign Up for Our Monthly Email Tips Today!";
    $desc = "Our Digital Marketing experts are ready to analyze your business and suggest the best path forward. Our research can even identify potential markets to expand into.";
    ?>
    <?php echo get_cta_banner(array("title" => $title, "desc" => $desc, "style" => "subscribe")); ?>
</div>