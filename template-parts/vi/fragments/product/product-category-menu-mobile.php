<?php
/**
 * Template part for displaying category menu on mobile.
 *
 * User: Binh Nguyen
 * Date: 4/14/2019
 * Time: 12:19 PM
 */
?>
<div class="container-fluid p-tb-30 d-block d-sm-none">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <form id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <input type="text" class="search-field" name="s" placeholder="Tìm kiếm" value="<?php echo get_search_query(); ?>">
                    <input type="submit" value="Tìm">
               </form>
                 <?php wp_nav_menu( 
        array( 
              'theme_location' => 'right-menu-vi', 
              'container' => 'true', 
              'menu_id' => 'right-menu-vi', 
              'menu_class' => 'nav flex-column product-category'
            ) 
            ); ?>
            </div>
        </div>
    </div>
</div>
