<?php
$subtitle = "CASE STUDIES";
$title = get_the_title();
$modified_time = get_the_modified_date();
$banner_desc = "Last checked and updated on " . $modified_time;
echo get_top_banner(array("title" => $title, "subtitle" => $subtitle, "banner_desc" => $banner_desc)); ?>
<div class="single-case-studies-section">
    <div class="container">
        <div class="case-studies-detail mx-auto">
            <?php the_content(); ?>
        </div>
    </div>
</div>

<?php echo do_shortcode("[testimonials]"); ?>

<div class="case-studies-extra-section">
    <div class="container">
        <div class="row gx-5">
            <div class="col-md-6">
                <h3>Conclusion</h3>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est <a href="#">Lorem ipsum
                        dolor</a> sit amet.
                </p>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                    dolores.
                </p>
            </div>
            <div class="col-md-6">
                <div class="additional-image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/graph.png" class="w-100" />
                </div>
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