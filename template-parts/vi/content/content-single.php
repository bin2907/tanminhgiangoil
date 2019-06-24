<?php
/**
 * Template part for displaying post detail
 *
 * User: Binh Nguyen
 * Date: 4/14/2019
 * Time: 12:19 PM
 */

?>
<?php

$technical_datasheet =  get_post_meta($post->ID, 'technical_datasheet', true);
if (empty($technical_datasheet)) {
    $technical_datasheet = "http://www.lubs-products-database.total.com/";
}

$safety_data_sheet =  get_post_meta($post->ID, 'safety_data_sheet', true);
if (empty($safety_data_sheet)) {
    $safety_data_sheet = "https://www.quickfds.com/en/index.html";
}

$classifications =  get_post_meta($post->ID, 'classifications', true);
if (empty($classifications)) {
    $classifications = "";
}

$requirements =  get_post_meta($post->ID, 'requirements', true);
if (empty($requirements)) {
    $requirements = "";
}

$approved =  get_post_meta($post->ID, 'approved', true);
if (empty($approved)) {
    $approved = "";
}

$suitable =  get_post_meta($post->ID, 'suitable', true);
if (empty($suitable)) {
    $suitable = "";
}


?>

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?php get_template_part( 'template-parts/fragments/product/product', 'category-menu'); ?>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="postTitle"><?php the_title(); ?></h2>
                        <div style="padding: 1rem 0">
                            <i class="shareSocialIcon fab fa-facebook"></i>
                            <i class="shareSocialIcon fas fa-share-alt"></i>
                        </div>
                        <?php the_excerpt(); ?>
                        <a  class="block postDetailDownloadText"
                            href="<?php echo $technical_datasheet; ?>"
                            target="_blank">
                            <i class="fas fa-cloud-download-alt postDetailDownloadIcon"></i>
                            Technical datasheet
                        </a>
                        <a class="block postDetailDownloadText"
                           href="<?php echo $safety_data_sheet; ?>"
                           target="_blank">
                            <i class="fas fa-cloud-download-alt postDetailDownloadIcon"></i>
                            Safety Data Sheet
                        </a>
                    </div>
                    <div class="col-md-6 text-center">
                        <div>
                            <img title="<?php the_title_attribute(); ?>" alt="thumb image" class="wp-post-image postDetailFeaturedImg"
                                 src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <hr style="margin: 3rem 0" />
                        <h3 style="font-weight: 300;">Why Choose Us</h3>
                    </div>

                    <div class="col-md-3 text-center pdtb30">
                        <i class="fas fa-globe postDetailIcon"></i>
                    </div>
                    <div class="col-md-9 pdtb30">
                        <b>Phân loại quốc tế</b>
                        <div class="secondTextColor">
                            <?php echo $classifications; ?>
                        </div>
                    </div>

                    <div class="col-md-3 text-center pdtb30">
                        <i class="fas fa-comment-dots postDetailIcon"></i>
                    </div>
                    <div class="col-md-9 pdtb30">
                        <b>Đáp ứng yêu cầu của</b>
                        <div class="secondTextColor">
                            <?php echo $requirements; ?>
                        </div>
                    </div>

                    <div class="col-md-3 text-center pdtb30">
                        <i class="fas fa-check postDetailIcon"></i>
                    </div>
                    <div class="col-md-9 pdtb30">
                        <b>Được chấp nhận bởi </b>
                        <div class="secondTextColor">
                            <?php echo $approved; ?>
                        </div>
                    </div>

                    <div class="col-md-3 text-center pdtb30">
                        <i class="fas fa-thumbs-up postDetailIcon"></i>
                    </div>
                    <div class="col-md-9 pdtb30">
                        <b>Phù hợp với : </b>
                        <div class="secondTextColor">
                            <?php echo $suitable; ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="postDetail">
                            <?php the_content(); ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>