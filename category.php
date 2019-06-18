<?php
/**
 * User: Binh Nguyen
 * Date: 4/14/2019
 * Time: 12:19 PM
 */

get_header();

$queried_object = get_queried_object();
$category_name = $queried_object->cat_name;

//$query = new WP_Query( array( 'category__in' => get_queried_object_id() ) );

?>

<div class="container-fluid breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <a href="<?php echo get_home_url(); ?>">Tân Minh Giang Oil</a>
                &gt;
                <?php echo $category_name; ?>
            </div>
            <div class="col-md-2 text-right">
                <i class="shareSocialIcon fab fa-facebook"></i>
                <i class="shareSocialIcon fas fa-share-alt"></i>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid postList">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?php get_template_part( 'template-parts/fragments/product/product', 'category-menu'); ?>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <?php /*while ( $query->have_posts() ) : $query->the_post();*/
                        while ( have_posts() ) : the_post();
                     ?>
                        <?php get_template_part( 'template-parts/fragments/product/product', 'item'); ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part( 'template-parts/fragments/product/product', 'category-menu-mobile'); ?>

<?php
get_footer();

wp_reset_postdata();
?>
