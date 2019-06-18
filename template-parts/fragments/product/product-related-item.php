<?php
/**
 * Template part for displaying product item.
 *
 * User: Binh Nguyen
 * Date: 4/14/2019
 * Time: 12:19 PM
 */
?>

<div class="col-md-3 postItem">
    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
        <img title="<?php the_title_attribute(); ?>" alt="thumb image" class="wp-post-image"
             src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:auto;">
    </a>
    <h5 style="font-size: 1.5em; font-weight: 400; line-height: 1em; padding:  0.4em 0 1em 0;"
        class="text-center">
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
            <?php the_title(); ?>
        </a>
    </h5>
</div>