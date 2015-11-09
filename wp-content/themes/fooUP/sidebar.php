<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */
?>


<?
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>

<p><i class="fa fa-phone"></i>(555)343-4567891 </p>

<p><i class="fa fa-envelope"></i>info@leredbread.com</p>

<p><i class="fa fa-map-marker"> </i> 123 Hastings Street
Vancouver, BC V61 2T9, CA</p>
</div><!-- #secondary -->
