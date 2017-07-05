<div class="site-info">
    <a href="<?php echo esc_url(__('https://wordpress.org/', 'retouch-lite')); ?>"><?php
        /* translators: %s: CMS name, i.e. WordPress. */
        printf(esc_html__('Proudly powered by %s', 'retouch-lite'), 'WordPress');
    ?></a>
    <span class="sep"> | </span>
    <?php
        /* translators: 1: Theme name, 2: Theme author. */
        printf(esc_html__('Theme: %1$s by %2$s.', 'retouch-lite'), 'retouch-lite', '<a href="https://automattic.com/">Automattic</a>');
    ?>
</div><!-- .site-info -->
