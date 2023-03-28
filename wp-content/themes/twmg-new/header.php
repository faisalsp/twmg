<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head itemscope itemtype="https://schema.org/WebSite">
    <meta charset="<?php bloginfo('charset'); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TWMG</title>
    <link rel="profile" href="https://gmpg.org/xfn/11" />
	<meta name='robots' content='noindex, nofollow'>
    <link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="twmg-site">
        <header class="container-fluid bg-primary">
			<a class="navbar-brand" href="">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/white-logo.svg" alt="white logo" width="130"
					class="white-logo">
			</a>
			<button class="navbar-toggler" type="button"><span class="navbar-toggler-icon"></span></button>
			<nav>
				<ul class="d-flex fw-bold align-center">
					<li><a href="">Who is TWMG?</a></li>
					<li><a href="">Who we have helped</a></li>
					<li><a href="">How we grow businesses</a></li>
					<li><a href="">Guides & Insights</a></li>
					<li><a href="">Contact Us</a></li>
					<li><a href="" class="highlight-button">Free Marketing Review</a></li>
				</ul>
			</nav>
		</header>

        <main>