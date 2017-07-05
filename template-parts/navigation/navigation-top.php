<nav id="site-navigation" class="main-navigation navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <?php esc_html_e('Primary Menu', 'retouch-lite'); ?>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                ));
            ?>
        </div>
    </div>
</nav><!-- #site-navigation -->
