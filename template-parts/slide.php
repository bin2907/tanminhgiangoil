<?php
/**
 * Template part for displaying image slide.
 *
 * User: Binh Nguyen
 * Date: 4/14/2019
 * Time: 12:19 PM
 */
?>
<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="view">
                <img class="d-none d-sm-block d-md-block d-lg-block w-100"
                     src="<?php echo get_template_directory_uri(); ?>/img/slide/tan-minh-giang-oil-slide-1.jpg"
                     alt="Tân Minh Giang Oil">
                <img class="d-block d-sm-none w-100"
                     src="<?php echo get_template_directory_uri(); ?>/img/slide/tan-minh-giang-oil-slide-1-m.jpg"
                     alt="Tân Minh Giang Oil">
                <div class="mask rgba-black-light"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive"></h3>
                <p></p>
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                <img class="d-none d-sm-block d-md-block d-lg-block w-100"
                     src="<?php echo get_template_directory_uri(); ?>/img/slide/tan-minh-giang-oil-slide-2.jpg"
                     alt="Tân Minh Giang Oil">
                <img class="d-block d-sm-none w-100"
                     src="<?php echo get_template_directory_uri(); ?>/img/slide/tan-minh-giang-oil-slide-2-m.jpg"
                     alt="Tân Minh Giang Oil">
                <div class="mask rgba-black-strong"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive"></h3>
                <p></p>
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                <img class="d-none d-sm-block d-md-block d-lg-block w-100"
                     src="<?php echo get_template_directory_uri(); ?>/img/slide/tan-minh-giang-oil-slide-3.jpg"
                     alt="Tân Minh Giang Oil">
                <img class="d-block d-sm-none w-100"
                     src="<?php echo get_template_directory_uri(); ?>/img/slide/tan-minh-giang-oil-slide-3-m.jpg"
                     alt="Tân Minh Giang Oil">
                <div class="mask rgba-black-slight"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive"></h3>
                <p></p>
            </div>
        </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
