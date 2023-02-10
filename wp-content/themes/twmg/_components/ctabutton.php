<?php
$title = !empty($args['button_text']) ? $args['button_text'] : "";
$class = !empty($args['class']) ? $args['class'] : "";
$icon = !empty($args['icon']) ? $args['icon'] : "";
$style = !empty($args['style']) ? $args['style'] : "";
?>

<?php if ($style == "subscribe"): ?>
    <form class="cta-subscribe-form">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="www.yourwebsite.com.au" />
            <button class="btn" type="submit"><?php echo $title; ?></button>
        </div>
    </form>
<?php else : ?>
    <a href="#" class="cta-button">
        <?php echo $icon; ?>
        <?php echo $title; ?>
    </a>
<?php endif; ?>