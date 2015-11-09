
</div>


<?php

/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="blog-page-container">
				<div class="blog-page-stuff">

					<?php if ( have_posts() ) : ?>

						<?php if ( is_home() && ! is_front_page() ) : ?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						
							</header>
						<?php endif; ?>
				
						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'template-parts/content' ); ?>
							
						<?php endwhile; ?>
					
						<?php the_posts_navigation(); ?>

					<?php else : ?>
						
						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>
				</div>
				
				<!-- #primary -->
				<div class="sidebar-div">
					
					<?php get_sidebar(); ?>
					
				</div>
				</div> 
				</main><!-- #main -->

			</div> 
			

			
	<?php get_footer(); ?>
