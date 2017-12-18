<?php
/**
 * The file for displaying archives page for mysteries
 *
 *
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
							/* Start the Loop */
								while ( have_posts() ) : 
									the_post();
									get_template_part( 'content', 'posts' );
									
								endwhile;
								nisarg_posts_navigation(); 
							else : 
								get_template_part( 'template-parts/content', 'none' ); 
							endif; ?>
						</div><!--.wrapper-home-->
				</main><!-- #main -->
			</div><!-- #primary -->
			<?php get_sidebar( 'custom' ); ?>	
		</div> <!--.row-->
	</div><!--.container-->
<?php get_footer(); ?>
