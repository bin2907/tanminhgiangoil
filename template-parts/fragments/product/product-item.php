<?php
/**
 * Template part for displaying product item.
 *
 * User: Binh Nguyen
 * Date: 4/14/2019
 * Time: 12:19 PM
 */
?>

<div class="col-md-4 postItemCol">
    <div class="postItem">
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="imgWrp">
            <img title="<?php the_title_attribute(); ?>" alt="thumb image" class="wp-post-image"
                 src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
        </a>
        <h5 class="postItemTitle">
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                <?php the_title(); ?>
            </a>
        </h5>
        <div class="postItemShortDesc">
            TRANSTEC 5 is a mineral based oil designed for the lubrication of all gear boxes and axles requiring an API GL-5 level and a viscosity of SAE 80W-90.
        </div>
        <div class="postItemReadMore">
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                <i class="shareSocialIcon fas fa-arrow-circle-right"></i> Read more
            </a>

            <div class="postItemSocalIcons">
                <i class="shareSocialIcon fab fa-facebook"></i>
                <i class="shareSocialIcon fas fa-share-alt"></i>
            </div>
        </div>
    </div>
</div>