<?php

/**
*
* Template Name: Contact Us Template
*
*/


add_filter('body_class', 'landing_body_class');

/**
* Adds landing page body class.
*
* @since 1.0.0
*
* @param array $classes Original body classes.
* @return array Modified body classes.
*/

function landing_body_class($classes)
{
    $classes[] = 'contact-us-page';
    return $classes;
}

// Remove title
remove_action('genesis_entry_header', 'genesis_do_post_title');

// Remove post info
remove_action('genesis_entry_header', 'genesis_post_info', 5);

// Remove default content
remove_action('genesis_entry_content', 'genesis_do_post_content');
remove_action('genesis_before_header', 'genesis_skip_links', 5);

// Removes Skip Links.
add_action('wp_enqueue_scripts', 'genesis_sample_dequeue_skip_links');

// Forces full width content layout.
add_filter('genesis_site_layout', '__genesis_return_full_width_content');
add_action('genesis_after_loop', 'custom_template_meta_loop');



/**
* Dequeues Skip Links Script.
*
* @since 1.0.0
*/

function genesis_sample_dequeue_skip_links()
{
    wp_dequeue_script('skip-links');
}


function custom_template_meta_loop()
{
    get_template_part("template-parts/contact");
}



// Runs the Genesis loop.

genesis();