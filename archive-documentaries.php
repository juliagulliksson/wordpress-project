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
								while ( have_posts() ) : the_post();
									/*
									* If you want to disaplay only excerpt, file content-excerpt.php will be used.
									* Include the Post-Format-specific template for the content.
									* If you want to override this in a child theme, then include a file
									* called content-___.php (where ___ is the Post Format name) and that will be used instead.
									*/
									$post_display_option = get_theme_mod( 'post_display_option', 'post-excerpt' );

									if ( 'post-excerpt' === $post_display_option ) {
										get_template_part( 'content', 'excerpt' );
									} else {
										get_template_part( 'content', 'posts' );
									}
								endwhile;
								nisarg_posts_navigation(); 
							else : 
								get_template_part( 'template-parts/content', 'none' ); 
							endif; ?>
						</div><!--.wrapper-home-->
				</main><!-- #main -->
			</div><!-- #primary -->
			<?php get_sidebar( 'sidebar-1' ); ?>	
		</div> <!--.row-->
	</div><!--.container-->
<?php get_footer(); ?>
