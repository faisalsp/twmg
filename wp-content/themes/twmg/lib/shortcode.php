<?php

function subscribe_widget_shortcode()
{
    ob_start();
    get_template_part('_shortcode/subscribe-widget');
    return ob_get_clean();
}

add_shortcode('subscribe_widget', 'subscribe_widget_shortcode');

function testimonials_shortcode()
{
    ob_start();
    get_template_part('_shortcode/testimonials');
    return ob_get_clean();
}

add_shortcode('testimonials', 'testimonials_shortcode');