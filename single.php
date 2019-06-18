<?php
/**
 * User: Binh Nguyen
 * Date: 4/14/2019
 * Time: 12:19 PM
 */

get_header();

$categories = get_the_category();
$cat_name = $categories[0]->cat_name;

?>

<div class="container-fluid breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <a href="<?php echo get_home_url(); ?>">Tân Minh Giang Oil</a> &gt;  <?php echo $cat_name; ?>
            </div>
            <div class="col-md-2 text-right">
                <i class="shareSocialIcon fab fa-facebook"></i>
                <i class="shareSocialIcon fas fa-share-alt"></i>
            </div>
        </div>
    </div>
</div>

<?php while ( have_posts() ) : the_post();
    get_template_part( 'template-parts/content/content', 'single' );
endwhile; ?>

<?php get_template_part( 'template-parts/fragments/product/product', 'related'); ?>

<?php get_template_part( 'template-parts/fragments/product/product', 'category-menu-mobile'); ?>

<?php
get_footer();
?>
