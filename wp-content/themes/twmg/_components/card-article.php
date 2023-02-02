<?php $style = !empty($args['style']) ? $args['style'] : ""; ?>

<?php if ($style != "slider") { ?>
    <div class="card-article">
        <div class="row">
            <?php for ($i = 0; $i < 3; $i++): ?>
                <div class="col-md-4">
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
                </div>
            <?php endfor; ?>
        </div>
    </div>
<?php } else { ?>
    <div class="card-article">
        <div class="row slider">
            <?php for ($i = 0; $i < 8; $i++): ?>
                <div class="col-md-4">
                    <a href="#">
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