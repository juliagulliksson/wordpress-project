<?php
/**
 * The main template file.

 * @package Nisarg
 */

get_header(); ?>

	<div class="container-fluid">
    
		<div class="row frontpage">
			<div id="primary" class="col-md-12 content-area">
				<main id="main" class="site-main" role="main">
					<div class="wrapper">
						<h1>Latest Discoveries</h1>
						<div class="flexbox-wrapper">
							
							<?php $query = new WP_Query( array('posts_per_page' => 3) );
							
							if( $query->have_posts() ):
								while ( $query->have_posts() ) :
								?>
									
									<div class="frontpage-posts">

									<?php $query->the_post();

									
										get_template_part( 'content','flexposts' );
										?>
										</div>
										
								<?php endwhile;
								nisarg_posts_navigation(); 
							else : 
								get_template_part( 'template-parts/content', 'none' ); 
							endif; ?>
								
						</div><!-- flexbox-wrapper -->
				 	</div><!-- wrapper -->
						
					
				</main><!-- #main -->
			</div><!-- #primary -->
			
		</div><!--row-->
	</div><!--.container-->
	<?php get_footer(); ?>
