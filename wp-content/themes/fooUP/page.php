<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="blog-page-container">
				<div class="blog-page-stuff">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php endwhile; // End of the loop. ?>

				
				</div>
			<!-- #primary -->
				<div class="sidebar-div">

					<?php get_sidebar(); ?>

				</div>

			</div>

		</main><!-- #main -->
		
	</div>
<?php get_footer(); ?>
