<?php
add_action('wp_enqueue_scripts', 'enqueue_scripts_styles');

function enqueue_scripts_styles()
{
	wp_enqueue_style(
		'main-css',
		get_stylesheet_directory_uri() . '/assets/stylesheets/index.min.css',
		[],
		'1.0',
		'all'
	);

	wp_enqueue_script(
		'fontawesome-js',
		'https://kit.fontawesome.com/c3d51ca1da.js'
	);

	wp_enqueue_script(
		'main-js',
		get_stylesheet_directory_uri() . '/assets/js/custom.js'
	);

	wp_enqueue_script(
		'slider-js',
		get_stylesheet_directory_uri() . '/assets/js/slider.js'
	);
}

function defer_scripts($tag, $handle, $src)
{
	$defer = array(
		'fontawesome-js',
		'main-js',
		'slider-js'
	);
	if (in_array($handle, $defer)) {
		return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n";
	}

	return $tag;
}

add_filter('script_loader_tag', 'defer_scripts', 10, 3);

// SVG Support
function cc_mime_types($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


function reading_time()
{
	$content = get_post_field('post_content', get_the_ID());
	$word_count = str_word_count(strip_tags($content));
	$readingtime = ceil($word_count / 200);

	if ($readingtime == 1) {
		$timer = "min";
	} else {
		$timer = "mins";
	}
	$totalreadingtime = $readingtime . $timer;

	return $totalreadingtime;
}