<?php
/**
 * User: Binh Nguyen
 * Date: 4/14/2019
 * Time: 12:19 PM
 */

get_header();

$categories = get_the_category();
$cat_links = "";
foreach ($categories as $cat) {
    $cat_links = empty($cat_links)? "" : ($cat_links . ", ");
    $cat_links = $cat_links . "<a href='" . get_category_link($cat->cat_ID) . "'>". $cat->cat_name . "</a>";
}


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
                <a href="<?php echo get_home_url(); ?>"><?php echo $homeText; ?></a> &gt;
                <?php echo $cat_links ?>
            </div>
            <div class="col-md-2 text-right">
                <i class="shareSocialIcon fab fa-facebook"></i>
                <i class="shareSocialIcon fas fa-share-alt"></i>
            </div>
        </div>
    </div>
</div>

<?php while ( have_posts() ) : the_post();
    get_template_part( $langFolder , 'detail' );
endwhile; ?>

<?php get_template_part( $langFolder, 'related'); ?>

<?php get_template_part( $langFolder, 'category-menu-mobile'); ?>

<?php
get_footer();


?>
