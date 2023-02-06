<?php
$title = "Unlock the Secrets to Business Growth: Sign Up for Our Monthly Email Tips Today!";
echo get_top_banner(array("title" => $title, "style" => "subscribe")); ?>
<div class="blog-featured-section">
    <div class="container">
        <h3>Featured</h3>
        <?php echo get_card_article(array("direction" => "row")); ?>
    </div>
</div>
<div class="latest-article-section">
    <div class="container">
        <h3>Latest</h3>
        <div class="row gx-5">
            <div class="col-md-8">
                <?php echo get_card_article(array("direction" => "column")); ?>
            </div>
            <div class="col-md-4">
                <div class="categories-widget">
                    <div class="search">
                        <input type="text" class="form-control" placeholder="Search">
                        <button class="btn btn-primary">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                    <div class="categories-list">
                        <h5>Categories</h5>
                        <ul>
                            <li>Business Growth</li>
                            <li>Rock and Roll</li>
                            <li>Thrash Metal</li>
                            <li>Pop</li>
                            <li>Electronica</li>
                            <li>Jazz</li>
                            <li>Classic</li>
                        </ul>
                    </div>
                </div>
                <div class="subscribe-widget">
                    <h5 class="text-center">Unlock the Secrets to Business Growth: Sign Up for Our Monthly Email Tips
                        Today!</h5>
                    <input type="email" class="form-control" placeholder="Enter email">
                    <button type="submit" class="text-center d-block w-100">Subscribe for 1 month</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog-featured-section">
    <div class="container">
        <h3>Search Engine Optimisation</h3>
        <?php echo get_card_article(array("style" => "slider")); ?>
    </div>
</div>
<div class="categories-section">
    <div class="container">
        <h3>All Categories</h3>
        <ul class="nav flex-row">
            <?php for ($i = 0; $i < 12; $i++): ?>
                <li><a href="#">Business Growth</a></li>
            <?php endfor; ?>
        </ul>
    </div>
</div>
<div class="blog-featured-section">
    <div class="container">
        <h3>Search Engine Optimisation</h3>
        <?php echo get_card_article(array("style" => "slider")); ?>
    </div>
</div>
<div class="blog-featured-section">
    <div class="container">
        <h3>Search Engine Optimisation</h3>
        <?php echo get_card_article(array("style" => "slider")); ?>
    </div>
</div>
<div class="blog-featured-section">
    <div class="container">
        <h3>Search Engine Optimisation</h3>
        <?php echo get_card_article(array("style" => "slider")); ?>
    </div>
</div>
<div class="cta-section">
    <?php
    $title = "Don't Miss Out on the Latest Business Growth Strategies - Sign Up for Our Monthly Email Tips Today!";
    $desc = "Our Digital Marketing experts are ready to analyze your business and suggest the best path forward. Our research can even identify potential markets to expand into.";
    ?>
    <?php echo get_cta_banner(array("title" => $title, "desc" => $desc, "style" => "subscribe")); ?>
</div>