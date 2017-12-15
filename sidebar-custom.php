<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Nisarg
 */
?>
<div id="secondary" class="col-md-3 sidebar widget-area" role="complementary">
	<?php do_action( 'before_sidebar' ); ?>
	<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
	<aside>
		<div id="search" class="widget widget_search">
			<?php get_search_form(); ?>
		</div>
		<div id="archives" class="widget">
		    <h3 class="widget-title"><?php _e( 'Archives', 'nisarg' ); ?></h3>
		    <ul>
		        <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
		    </ul>
		</div>
		<div id="meta" class="widget">
		    <h3 class="widget-title"><?php _e( 'Meta', 'nisarg' ); ?></h3>
		    <ul>
		        <?php wp_register(); ?>
		        <li><?php wp_loginout(); ?></li>
		        <?php wp_meta(); ?>
		    </ul>
		</div>
	</aside>
	<?php endif; // end sidebar widget area ?>
</div><!-- #secondary .widget-area -->


