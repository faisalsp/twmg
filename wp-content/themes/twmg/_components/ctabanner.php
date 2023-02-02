<?php
$title = !empty($args['title']) ? $args['title'] : 'Unlock Your Business Potential with a Tailored Digital Marketing Strategy and deliver <span class="underscore position-relative">skyhigh roi</span>';
$desc = !empty($args['desc']) ? $args['desc'] : "Our team of experts will work with you to create a strategy that is tailored to your unique business goals. From SEO to social media marketing, our solutions will help you reach your target audience and drive conversions. Don't let your competition get ahead. Let us help you succeed today.";
$style = !empty($args['style']) ? $args['style'] : "";
?>
<div class="container">
    <div class="outer-border mx-auto">
        <div class="cta-banner text-center">
            <div class="title">
                <h4>
                    <?php echo $title; ?>
                </h4>
            </div>
            <p>
                <?php echo $desc; ?>
            </p>
            <?php
            if ($style === "subscribe") { ?>
                <form class="w-75 mx-auto">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Email Address" />
                        <button class="btn" type="submit">Subscribe for 1 month</button>
                    </div>
                </form>
            <?php } else {
                echo get_cta_button($args);
            } ?>
        </div>
    </div>
</div>