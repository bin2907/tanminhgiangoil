<?php
/**
 * Template Name: Customers
 *
 * User: Binh Nguyen
 * Date: 4/14/2019
 * Time: 12:19 PM
 */

get_header();

?>

<div class="container-fluid">
    <div class="container">
        <div>
            <h2 class="text-header2">OUR CUSTOMERS</h2>
            <p style="color: #767a70; text-align: center; padding-bottom: 2em">
                Our military organizaion was established specifically to help veterans and their families.
                We welcome those who can offer their ideas, thoughts, and service in achievement of our objectives.
                Our military organizaion was established specifically to help veterans and their families.
                We welcome those who can offer their ideas, thoughts, and service in achievement of our objectives.
            </p>
        </div>
        <div class="row">
            <div class="col-md-6 p-tb-15 bg3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service/army-9-6.jpg" width="100%">
                <h5 class="text-header5">ARMY</h5>
                <p style="color: #767a70; padding-bottom: 2em">Our military organizaion was established specifically to help veterans and their families.
                    We welcome those who can offer their ideas, thoughts, and service in achievement of our objectives.</p>
            </div>
            <div class="col-md-6 p-tb-15 bg4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service/police-car-9-6.jpg" width="100%">
                <h5 class="text-header5">POLICE</h5>
                <p style="color: #767a70; padding-bottom: 2em">Our military organizaion was established specifically to help veterans and their families.
                    We welcome those who can offer their ideas, thoughts, and service in achievement of our objectives.</p>
            </div>
        </div>
        <div class="row m-b-50">
            <div class="col-md-6 p-tb-15 bg4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service/oil-and-gas-9-6.jpg" width="100%">
                <h5 class="text-header5">OIL AND GAS</h5>
                <p style="color: #767a70; padding-bottom: 2em">Our military organizaion was established specifically to help veterans and their families.
                    We welcome those who can offer their ideas, thoughts, and service in achievement of our objectives.</p>
            </div>
            <div class="col-md-6 p-tb-15 bg3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service/mining-9-6.jpg" width="100%">
                <h5 class="text-header5">MINING</h5>
                <p style="color: #767a70; padding-bottom: 2em">Our military organizaion was established specifically to help veterans and their families.
                    We welcome those who can offer their ideas, thoughts, and service in achievement of our objectives.</p>
            </div>
        </div>
    </div>
</div>

<?php get_template_part( 'template-parts/fragments/story'); ?>

<?php
get_footer();
?>
