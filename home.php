<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Nisarg
 */

get_header(); ?>

	<div class="container">
    
		<div class="row">
			<div id="primary" class="col-md-9 content-area">
				<main id="main" class="site-main" role="main">
					<div class="wrapper-home">
						<?php 
							if ( have_posts() ) : 
								if ( is_home() && ! is_front_page() ) : ?>
									<header>
										<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
									</header>
								<?php 
								endif; 

								/* Start the Loop */ 
								while ( have_posts() ) : 
										the_post();
										get_template_part( 'content','posts' );
								
								endwhile; 
								nisarg_posts_navigation(); 
								else : 
								get_template_part( 'template-parts/content', 'none' ); 

							endif; ?>
					</div><!-- wrapper-home -->
				</main><!-- #main -->
			</div><!-- #primary -->
			<?php get_sidebar( 'custom' ); ?>	
		</div><!--row-->
	</div><!--.container-->
	<?php get_footer(); ?>
