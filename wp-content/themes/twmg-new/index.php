<?php
get_header(); ?>
	<div id="primary" class="site-content">
		<div id="content" role="main">
		<?php 
		if ( have_posts() ) : 

			while ( have_posts() ) :
				the_post();
			endwhile;
			
		else : ?>

			<article id="post-0" class="post no-results not-found">

			</article>

		<?php endif; ?>

		</div>
	</div>

<?php get_footer(); ?>
