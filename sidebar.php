<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package geen_world_ev
 */

if ( ! is_active_sidebar( 'sidebar-1' ) || ! is_single() ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
