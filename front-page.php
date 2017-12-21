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
						<?php while (have_posts()) : 
							the_post(); ?>
							<div class="introduction"><?php the_content(); ?> </div>
						<?php endwhile;  ?>

						<h2>Recent space news</h2>
						<div class="flexbox-wrapper">

							<?php $query = new WP_Query( array('posts_per_page' => 3, 
															   'post_type' => 'post') );

							//Run function for looping out the 3 thumbnails and titles
							thumbnail_loop($query); ?>
							
						</div><!-- flexbox-wrapper -->
						<div class="border"></div>

						<h2>The great mysteries of the universe</h2>
						<div class="flexbox-wrapper">
							
							<?php $mystery_query = new WP_Query( array('posts_per_page' => 3, 
															   'post_type' => 'mysteries') );
							
							//Run function for looping out the 3 thumbnails and titles
							thumbnail_loop($mystery_query); ?>
							
						</div><!-- flexbox-wrapper -->
						<div class="border"></div>

						<h2>The best space documentaries</h2>
						<div class="flexbox-wrapper">
							
							<?php $doco_query = new WP_Query( array('posts_per_page' => 3, 
															'post_type' => 'documentaries') );
							
							//Run function for looping out the 3 thumbnails and titles
							thumbnail_loop($doco_query); ?>
							
						</div><!-- flexbox-wrapper -->
						<div class="border"></div>
				 	</div><!-- wrapper -->
				</main>
			</div><!-- #primary -->
		</div><!--row-->
	</div><!--.container-->
	<?php get_footer(); ?>
