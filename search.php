<?php
get_header(); ?>
    <div id="single-kt-header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4" id="kt-logo-area">
                    <div id="kt-logo-container">
                        <?php echo italian_restaurant_get_logo2(); ?>
                    </div>
                </div>
                <div class="col-md-8">
                    <nav role="navigation" class="clearfix"
                         id="kt-main-navigation">

                        <?php
                        
                        wp_nav_menu(array(
                            'theme_location' => 'main',
                            'fallback_cb' => 'italian_restaurant_fallback_menu',
                            'container' => false,
                            'menu_id' => 'kt-navigation',
                            'menu_class'=>'fixed-nav',
                            'echo' => true));
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <header id="kt-page-header-simple"   class="text-center">


    <h1 class="kt-post-entry-title kt-search-title">
        <?php echo esc_html( wp_sprintf( __( 'Search results for the term: %s', 'italian-restaurant' ), get_search_query( false ) ) ); ?>
        <?php if($paged > 1):
            echo
                '<small>'.__('   Page: ','italian-restaurant').$paged
                .'</small>'; endif; ?>
    </h1><!-- .entry-title -->
    </header>

<div class="container">
    <div class="row">
        <div class="col-md-8">
        

            <section id="kt-primary">

                <div id="kt-content" class="clearfix">

                    <?php get_template_part('framework/templates/content-search'); ?>

                </div>

            </section>
        </div>
            <div class="col-md-3 col-md-offset-1">
                <aside id="kt-sidebar" style="margin-top:47px">
                    <?php if (!dynamic_sidebar('sidebar')): ?>
                        <div class="pre-widget">

                        </div>
                    <?php endif; ?>
                </aside>
            </div>
    
    </div>
    <!-- primary-page content ends here -->
</div>
<?php
get_footer();