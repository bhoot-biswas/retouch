<?php
/**
 * Displays footer widgets if assigned
 *
 * @package Retouch_Lite
 * @since 1.0
 * @version 1.0
 */

?>

<?php
if (
    is_active_sidebar('sidebar-2') ||
    is_active_sidebar('sidebar-3') ||
    is_active_sidebar('sidebar-4') ||
    is_active_sidebar('sidebar-5')
) :
?>

	<aside class="widget-area" role="complementary">
		<div class="container">
            <div class="wrap">
                <?php
                if (is_active_sidebar('sidebar-2')) {
                    ?>
        			<div class="widget-column footer-widget-1">
        				<?php dynamic_sidebar('sidebar-2'); ?>
        			</div>
        		<?php

                }
                if (is_active_sidebar('sidebar-3')) {
                    ?>
        			<div class="widget-column footer-widget-2">
        				<?php dynamic_sidebar('sidebar-3'); ?>
        			</div>
        		<?php

                }
                if (is_active_sidebar('sidebar-4')) {
                    ?>
        			<div class="widget-column footer-widget-3">
        				<?php dynamic_sidebar('sidebar-4'); ?>
        			</div>
        		<?php

                }
                if (is_active_sidebar('sidebar-5')) {
                    ?>
        			<div class="widget-column footer-widget-4">
        				<?php dynamic_sidebar('sidebar-5'); ?>
        			</div>
        		<?php

                } ?>
            </div>
        </div>
	</aside><!-- .widget-area -->

<?php endif; ?>
