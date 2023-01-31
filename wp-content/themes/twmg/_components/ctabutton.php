<?php
$title = !empty($args['button_text']) ? $args['button_text'] : "";
$class = !empty($args['class']) ? $args['class'] : "";
$icon = !empty($args['icon']) ? $args['icon'] : "";
?>

<a href="#" class="cta-button d-inline-block">
    <?php echo $icon; ?>
    <?php echo $title; ?>
</a>