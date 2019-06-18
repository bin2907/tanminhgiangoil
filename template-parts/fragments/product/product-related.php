<?php
/**
 * Template part for displaying related products.
 *
 * User: Binh Nguyen
 * Date: 4/14/2019
 * Time: 12:19 PM
 */
?>

<div class="container-fluid relatedPosts">
    <div class="container">
        <div class="relatedPostsText">
            Related Products
        </div>
        <div class="row">
            <?php
            // Default arguments
            $args = array(
                'posts_per_page' => 6, // How many items to display
                'post__not_in'   => array( get_the_ID() ), // Exclude current post
                'no_found_rows'  => true, // We don't need pagination so this speeds up the query
            );

            // Check for current post category and add tax_query to the query arguments
            $cats = wp_get_post_terms( get_the_ID(), 'category' );
            $cats_ids = array();
            foreach( $cats as $wpex_related_cat ) {
                $cats_ids[] = $wpex_related_cat->term_id;
            }
            if ( ! empty( $cats_ids ) ) {
                $args['category__in'] = $cats_ids;
            }

            // Query posts
            $wpex_query = new wp_query( $args );

            // Loop through posts
            foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>
                <?php get_template_part( 'template-parts/fragments/product/product', 'related-item'); ?>
            <?php
            // End loop
            endforeach;

            // Reset post data
            wp_reset_postdata(); ?>
        </div>
    </div>
</div>