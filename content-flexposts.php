<?php
/**
 * Template part for displaying the 3 latest posts on the front page
 *
 * @package Nisarg
 */

if ( is_sticky() && is_home() && ! is_paged() ) {
    printf( '<span class="sticky-post">%s</span>', __( 'Featured', 'nisarg' ) );
} ?>

<div class="entry-content">
   <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>  
    
    <?php wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nisarg' ),
        'after'  => '</div>',
    ) );
    ?>
</div><!-- .entry-content -->

<header class="entry-header">
    <h2 class="entry-title">
        <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
    </h2>
    <span class="screen-reader-text"><?php the_title();?></span>

</header><!-- .entry-header -->
