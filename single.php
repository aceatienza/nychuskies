<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

This is single.php

		<div id="primary" class="site-content article-color-template3">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

	</div><!-- #main .wrapper -->

<!-- TODO: split spans into divs; 50% inline-block; text align right -->

	
	<nav class="footer-nav" role="navigation">
		<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
		<div class="nav-previous alignleft"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></div>
		<div class="nav-next alignright"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></div>
	</nav>
	

<?php get_footer(); ?>