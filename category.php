<?php
/**
 * User: Binh Nguyen
 * Date: 4/14/2019
 * Time: 12:19 PM
 */

get_header();

$queried_object = get_queried_object();
$category_name = $queried_object->cat_name;

$query = new WP_Query( array( 'category__in' => get_queried_object_id() ) );

$langFolder = "template-parts/fragments/product/product";
$homeText = "Tan Minh Giang Oil";
if (get_locale() == "vi") {
    $langFolder = "template-parts/vi/fragments/product/product";
    $homeText = "Tân Minh Giang Oil";
}

?>

<div class="container-fluid breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <a href="<?php echo get_home_url(); ?>"><?php echo $homeText; ?></a>
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
                <?php get_template_part( $langFolder, 'category-menu'); ?>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <?php while ( $query->have_posts() ) : $query->the_post();
                     ?>
                        <?php get_template_part( $langFolder, 'item'); ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part( $langFolder, 'category-menu-mobile'); ?>

<?php
get_footer();

wp_reset_postdata();
?>
