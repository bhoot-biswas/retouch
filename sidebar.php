<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Retouch_Lite
 */

if (! is_active_sidebar('sidebar-1') || ('1c' == hybrid_get_theme_layout())) {
    return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar('sidebar-1'); ?>
</aside><!-- #secondary -->
