<?php
/**
 * Template part for displaying the 3 latest posts on the front page
 *
 * @package Nisarg
 */

if ( is_sticky() && is_home() && ! is_paged() ) :
    printf( '<span class="sticky-post">%s</span>', __( 'Featured', 'nisarg' ) );
endif; ?>

<div class="entry-content">
    <?php 
    if( has_post_thumbnail() ) :
        $attributes = array('title' => 'Feature image'); ?>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', $attributes); ?></a>  
    <?php endif; ?>

</div><!-- .entry-content -->

<header class="entry-header">
    <h3 class="entry-title">
        <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
    </h3>
    <span class="screen-reader-text"><?php the_title();?></span>

</header><!-- .entry-header -->
