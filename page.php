<?
/**
 * The template for displaying all pages
**/

get_header(); ?>

<div class="wrap Page">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				/* Removed. _vp_ 2022-08-13 */
				// // If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;

			endwhile;
			?>

		</main>
	</div>
</div>

<?
get_footer();
