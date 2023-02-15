<?php
/**
 * Genesis Sample.
 *
 * This file adds functions to the Genesis Sample Theme.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

// Starts the engine.
require_once get_template_directory() . '/lib/init.php';

// Sets up the Theme.
require_once get_stylesheet_directory() . '/lib/theme-defaults.php';

add_action('after_setup_theme', 'genesis_sample_localization_setup');
/**
 * Sets localization (do not remove).
 *
 * @since 1.0.0
 */
function genesis_sample_localization_setup()
{

	load_child_theme_textdomain(genesis_get_theme_handle(), get_stylesheet_directory() . '/languages');

}

// Adds helper functions.
require_once get_stylesheet_directory() . '/lib/helper-functions.php';

// Adds custom shortcode
require_once get_stylesheet_directory() . '/lib/shortcode.php';

// Adds image upload and color select to Customizer.
require_once get_stylesheet_directory() . '/lib/customize.php';

// Includes Customizer CSS.
require_once get_stylesheet_directory() . '/lib/output.php';

// Adds WooCommerce support.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-setup.php';

// Adds the required WooCommerce styles and Customizer CSS.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-output.php';

// Adds the Genesis Connect WooCommerce notice.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-notice.php';

add_action('after_setup_theme', 'genesis_child_gutenberg_support');
/**
 * Adds Gutenberg opt-in features and styling.
 *
 * @since 2.7.0
 */
function genesis_child_gutenberg_support()
{ // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedFunctionFound -- using same in all child themes to allow action to be unhooked.
	require_once get_stylesheet_directory() . '/lib/gutenberg/init.php';
}

// Registers the responsive menus.
if (function_exists('genesis_register_responsive_menus')) {
	genesis_register_responsive_menus(genesis_get_config('responsive-menus'));
}

add_action('wp_enqueue_scripts', 'genesis_sample_enqueue_scripts_styles');
/**
 * Enqueues scripts and styles.
 *
 * @since 1.0.0
 */
function genesis_sample_enqueue_scripts_styles()
{

	$appearance = genesis_get_config('appearance');

	wp_enqueue_style(
		// phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion -- see https://core.trac.wordpress.org/ticket/49742
		genesis_get_theme_handle() . '-fonts',
		$appearance['fonts-url'],
		[],
		null
	);

	wp_enqueue_style(
		genesis_get_theme_handle() . '-bootstrap',
		get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css',
		[],
		genesis_get_theme_version(),
		'all'
	);

	wp_enqueue_style(
		genesis_get_theme_handle() . '-custom',
		get_stylesheet_directory_uri() . '/assets/css/custom.css',
		[],
		genesis_get_theme_version(),
		'all'
	);

	wp_enqueue_style(
		genesis_get_theme_handle() . '-responsive',
		get_stylesheet_directory_uri() . '/assets/css/responsive.css',
		[],
		genesis_get_theme_version(),
		'all'
	);

	if (is_single()) {
		wp_enqueue_script(
			genesis_get_theme_handle() . '-popper',
			"https://unpkg.com/@popperjs/core@2.11.6/dist/umd/popper.min.js",
			[],
			genesis_get_theme_version(),
			true
		);
	}

	wp_enqueue_script(
		genesis_get_theme_handle() . '-bootstrap',
		get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js',
		[],
		genesis_get_theme_version(),
		true
	);

	wp_enqueue_script(
		genesis_get_theme_handle() . '-custom',
		get_stylesheet_directory_uri() . '/assets/js/custom.js',
		[],
		genesis_get_theme_version(),
		true
	);

	wp_enqueue_script(
		genesis_get_theme_handle() . '-fontawesome',
		'https://kit.fontawesome.com/c3d51ca1da.js',
		[],
		genesis_get_theme_version(),
		true
	);

	wp_enqueue_style(
		genesis_get_theme_handle() . '-custom-fonts',
		get_stylesheet_directory_uri() . '/assets/css/fonts.css',
		[],
		genesis_get_theme_version(),
		'all'
	);

	if (is_page('blog')) {
		wp_enqueue_style(
			genesis_get_theme_handle() . '-slick',
			'//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css',
			[],
			genesis_get_theme_version(),
			'all'
		);

		wp_enqueue_script(
			genesis_get_theme_handle() . '-slick',
			'//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
			[],
			genesis_get_theme_version(),
			true
		);
	}

	if (genesis_is_amp()) {
		wp_enqueue_style(
			genesis_get_theme_handle() . '-amp',
			get_stylesheet_directory_uri() . '/lib/amp/amp.css',
			[genesis_get_theme_handle()],
			genesis_get_theme_version()
		);
	}

}

add_filter('body_class', 'genesis_sample_body_classes');
/**
 * Add additional classes to the body element.
 *
 * @since 3.4.1
 *
 * @param array $classes Classes array.
 * @return array $classes Updated class array.
 */
function genesis_sample_body_classes($classes)
{

	if (!genesis_is_amp()) {
		// Add 'no-js' class to the body class values.
		$classes[] = 'no-js';
	}
	return $classes;
}

add_action('genesis_before', 'genesis_sample_js_nojs_script', 1);
/**
 * Echo the script that changes 'no-js' class to 'js'.
 *
 * @since 3.4.1
 */
function genesis_sample_js_nojs_script()
{

	if (genesis_is_amp()) {
		return;
	}

	?>
	<script>
		//<![CDATA[
		(function () {
			var c = document.body.classList;
			c.remove('no-js');
			c.add('js');
		})();
					//]]></script>
<?php
}

add_filter('wp_resource_hints', 'genesis_sample_resource_hints', 10, 2);
/**
 * Add preconnect for Google Fonts.
 *
 * @since 3.4.1
 *
 * @param array  $urls          URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed.
 * @return array URLs to print for resource hints.
 */
function genesis_sample_resource_hints($urls, $relation_type)
{

	if (wp_style_is(genesis_get_theme_handle() . '-fonts', 'queue') && 'preconnect' === $relation_type) {
		$urls[] = [
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		];
	}

	return $urls;
}

add_action('after_setup_theme', 'genesis_sample_theme_support', 9);
/**
 * Add desired theme supports.
 *
 * See config file at `config/theme-supports.php`.
 *
 * @since 3.0.0
 */
function genesis_sample_theme_support()
{

	$theme_supports = genesis_get_config('theme-supports');

	foreach ($theme_supports as $feature => $args) {
		add_theme_support($feature, $args);
	}

}

add_action('after_setup_theme', 'genesis_sample_post_type_support', 9);
/**
 * Add desired post type supports.
 *
 * See config file at `config/post-type-supports.php`.
 *
 * @since 3.0.0
 */
function genesis_sample_post_type_support()
{

	$post_type_supports = genesis_get_config('post-type-supports');

	foreach ($post_type_supports as $post_type => $args) {
		add_post_type_support($post_type, $args);
	}

}

// Adds image sizes.
add_image_size('sidebar-featured', 75, 75, true);
add_image_size('genesis-singular-images', 702, 526, true);

// Removes header right widget area.
unregister_sidebar('header-right');

// Removes secondary sidebar.
unregister_sidebar('sidebar-alt');

// Removes site layouts.
genesis_unregister_layout('content-sidebar-sidebar');
genesis_unregister_layout('sidebar-content-sidebar');
genesis_unregister_layout('sidebar-sidebar-content');

// Repositions primary navigation menu.
remove_action('genesis_after_header', 'genesis_do_nav');
add_action('genesis_header', 'genesis_do_nav', 12);

// Repositions the secondary navigation menu.
remove_action('genesis_after_header', 'genesis_do_subnav');
add_action('genesis_footer', 'genesis_do_subnav', 10);
remove_action('genesis_after_endwhile', 'genesis_posts_nav');

add_filter('wp_nav_menu_args', 'genesis_sample_secondary_menu_args');
/**
 * Reduces secondary navigation menu to one level depth.
 *
 * @since 2.2.3
 *
 * @param array $args Original menu options.
 * @return array Menu options with depth set to 1.
 */
function genesis_sample_secondary_menu_args($args)
{

	if ('secondary' === $args['theme_location']) {
		$args['depth'] = 1;
	}

	return $args;

}

add_filter('genesis_author_box_gravatar_size', 'genesis_sample_author_box_gravatar');
/**
 * Modifies size of the Gravatar in the author box.
 *
 * @since 2.2.3
 *
 * @param int $size Original icon size.
 * @return int Modified icon size.
 */
function genesis_sample_author_box_gravatar($size)
{

	return 90;

}

add_filter('genesis_comment_list_args', 'genesis_sample_comments_gravatar');
/**
 * Modifies size of the Gravatar in the entry comments.
 *
 * @since 2.2.3
 *
 * @param array $args Gravatar settings.
 * @return array Gravatar settings with modified size.
 */
function genesis_sample_comments_gravatar($args)
{

	$args['avatar_size'] = 60;
	return $args;

}

add_filter('genesis_breadcrumb_args', 'genesis_custom_breadcrumb_args');
function genesis_custom_breadcrumb_args($args)
{
	$args['home'] = 'Home'; // Home Page
	$args['sep'] = ''; // Separator
	$args['list_sep'] = ', ';
	$args['prefix'] = '<div class="custom-breadcrumb flex-row">';
	$args['suffix'] = '</div>';
	$args['heirarchial_attachments'] = true;
	$args['heirarchial_categories'] = true;
	$args['display'] = true;
	$args['labels']['prefix'] = '';
	$args['labels']['author'] = '';
	$args['labels']['category'] = '';
	$args['labels']['tag'] = '';
	$args['labels']['date'] = '';
	$args['labels']['search'] = '';
	$args['labels']['tax'] = '';
	$args['labels']['post_type'] = '';
	$args['labels']['404'] = '';
	return $args;
}

add_filter('genesis_markup_site-inner', '__return_null');
add_filter('genesis_markup_content-sidebar-wrap', '__return_null');
add_filter('genesis_markup_content-sidebar-wrap_output', '__return_false');
add_filter('genesis_markup_content', '__return_null');

//Remove site header.

remove_action('genesis_header', 'genesis_header_markup_open', 5);
remove_action('genesis_header', 'genesis_do_header');
remove_action('genesis_header', 'genesis_header_markup_close', 15);
remove_action('genesis_header', 'genesis_do_nav', 12);

// Remove default stylesheet
remove_action('genesis_meta', 'genesis_load_stylesheet');

// Remove Skip Links
remove_action('genesis_before_header', 'genesis_skip_links', 5);

//Custom Header
add_action('genesis_header', 'custom_header_twmg');
function custom_header_twmg()
{
	get_template_part("page-templates/section/header");
}

// Remove meta
remove_action('genesis_entry_header', 'genesis_post_info', 12);

remove_action('genesis_footer', 'genesis_footer_markup_open', 5);
remove_action('genesis_footer', 'genesis_do_footer');
remove_action('genesis_footer', 'genesis_footer_markup_close', 15);
add_action('genesis_footer', 'custom_twmg_footer');

function custom_twmg_footer()
{
	get_template_part("page-templates/section/footer");
}

// SVG Support
function cc_mime_types($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function get_post_primary_category($post_id, $term = 'category', $return_all_categories = false)
{
	$return = array();

	if (class_exists('WPSEO_Primary_Term')) {
		// Show Primary category by Yoast if it is enabled & set
		$wpseo_primary_term = new WPSEO_Primary_Term($term, $post_id);
		$primary_term = get_term($wpseo_primary_term->get_primary_term());

		if (!is_wp_error($primary_term)) {
			$return['primary_category'] = $primary_term;
		}
	}

	if (empty($return['primary_category']) || $return_all_categories) {
		$categories_list = get_the_terms($post_id, $term);

		if (empty($return['primary_category']) && !empty($categories_list)) {
			$return['primary_category'] = $categories_list[0]; //get the first category
		}
		if ($return_all_categories) {
			$return['all_categories'] = array();

			if (!empty($categories_list)) {
				foreach ($categories_list as &$category) {
					$return['all_categories'][] = $category->term_id;
				}
			}
		}
	}

	return $return;
}

// to output void elements without trailing slashes
add_filter( 'autoptimize_html_after_minify', function( $html ) {
    return str_replace( '/>', '>', $html );
} );

remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );