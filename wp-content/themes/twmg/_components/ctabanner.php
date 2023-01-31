<div class="container">
    <div class="outer-border mx-auto">
        <div class="cta-banner text-center">
            <div class="title">
                <?php
                $title = !empty($args['title']) ? $args['title'] : 'Unlock Your Business Potential with a Tailored Digital Marketing Strategy and deliver <span class="underscore position-relative">skyhigh roi</span>';
                $desc = !empty($args['desc']) ? $args['title'] : "Our team of experts will work with you to create a strategy that is tailored to your unique business goals. From SEO to social media marketing, our solutions will help you reach your target audience and drive conversions. Don't let your competition get ahead. Let us help you succeed today.";
                ?>
                <h4>
                    <?php echo $title; ?>
                </h4>
            </div>
            <p>
                <?php echo $desc; ?>
            </p>
            <?php echo get_cta_button($args); ?>
        </div>
    </div>
</div>