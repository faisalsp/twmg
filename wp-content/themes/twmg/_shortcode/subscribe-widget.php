<?php
$title = !empty($args['title']) ? $args['title'] : "";
$button_text = !empty($args['button_text']) ? $args['button_text'] : "";
?>
<div class="card subscribe-widget-shortcode">
    <div class="card-body">
        <div class="icon">
            <i class="fa-solid fa-chess-queen"></i>
        </div>
        <h4>
            <?php echo $title; ?>
        </h4>
        <?php echo get_cta_button(array("button_text" => $button_text)); ?>
    </div>
</div>