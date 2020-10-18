<?php
/**
 * Template part for displaying navigation.
 *
 * User: Binh Nguyen
 * Date: 4/14/2019
 * Time: 12:19 PM
 */

get_header();
?>
<nav class="navbar sticky-top navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
             <?php if ( has_custom_logo() ) : ?>
        <div class="site-logo"><?php the_custom_logo(); ?></div>
    <?php endif; ?>
                
               </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php wp_nav_menu( 
        array( 
              'theme_location' => 'primary-menu', 
              'container' => 'true', 
              'menu_id' => 'primary-menu', 
              'menu_class' => 'navbar-nav m-auto'
            ) 
            ); ?>
            <div>
                <a href="tel:0919830044" class="mainBtn" style='padding: 10px'>Hotline: 0919 830 044</a>
            </div>
        </div>
    </div>
</nav>
