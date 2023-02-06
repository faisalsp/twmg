<?php
$style = !empty($args['style']) ? $args['style'] : "";
$direction = !empty($args['direction']) ? $args['direction'] : "";
$permalink = strpos(get_site_url(), "twmgdevs") === false ? get_permalink(34) : get_permalink(33);
?>

<?php if ($style != "slider") { ?>
    <?php if ($direction != "column") { ?>
        <div class="card-article">
            <div class="row">
                <?php for ($i = 0; $i < 3; $i++): ?>
                    <div class="col-md-4">
                        <a href="<?php echo $permalink; ?>">
                            <div class="card">
                                <div class="card-head position-relative">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog-image.jpg"
                                        class="w-100" />
                                    <span>Business Growth</span>
                                </div>
                                <div class="card-body">
                                    <h5>10 ways to reduce the cost of your ads that you can do right now</h5>
                                </div>
                                <div class="card-footer">
                                    <div class="author-image">
                                        <img src="https://dummyimage.com/30x30/cccccc/000.png" class="w-100" />
                                    </div>
                                    <div class="author-name">
                                        By Kirby Hibbins
                                    </div>
                                    <div class="date-published">
                                        22 June 2022
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    <?php } else { ?>
        <?php for ($i = 0; $i < 5; $i++): ?>
            <a href="<?php echo $permalink; ?>">
                <div class="card card-column mb-5">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <div class="blog-image h-100">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog-image.jpg"
                                    class="w-100 h-100 img-fluid" />
                                <span>Business Growth</span>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="main-card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">10 ways to reduce the cost of your ads that you can do
                                        right now
                                    </h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                        sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                        erat, sed diam voluptua...</p>
                                </div>
                                <div class="card-footer">
                                    <div class="author-image">
                                        <img src="https://dummyimage.com/30x30/cccccc/000.png" class="w-100" />
                                    </div>
                                    <div class="author-name">
                                        By Kirby Hibbins
                                    </div>
                                    <div class="date-published">
                                        22 June 2022
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        <?php endfor; ?>
    <?php } ?>
<?php } else { ?>
    <div class="card-article">
        <div class="row slider">
            <?php for ($i = 0; $i < 8; $i++): ?>
                <div class="col-md-4">
                    <a href="<?php echo $permalink; ?>">
                        <div class="card">
                            <div class="card-head position-relative">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog-image.jpg"
                                    class="w-100" />
                                <span>Business Growth</span>
                            </div>
                            <div class="card-body">
                                <h5>10 ways to reduce the cost of your ads that you can do right now</h5>
                            </div>
                            <div class="card-footer">
                                <div class="author-image">
                                    <img src="https://dummyimage.com/30x30/cccccc/000.png" class="w-100" />
                                </div>
                                <div class="author-name">
                                    By Kirby Hibbins
                                </div>
                                <div class="date-published">
                                    22 June 2022
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endfor; ?>
        </div>
    </div>
<?php } ?>