<?php

function subscribe_widget_shortcode($args = [])
{
    ob_start();
    get_template_part('_shortcode/subscribe-widget', null, $args);
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

function client_results_shortcode()
{
    ob_start();
    get_template_part('_shortcode/client-results');
    return ob_get_clean();
}

add_shortcode('client_results', 'client_results_shortcode');