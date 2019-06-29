<?php
/**
 * Template Name: Navigation
 *
 * User: Binh Nguyen
 * Date: 4/14/2019
 * Time: 12:19 PM
 */

get_header();

?>

<nav class="navbar sticky-top navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo/tan-minh-giang-oil-logo.jpg" width="150px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
                <li class="nav-item <?php if ($slug == 'about-us') { echo 'active'; } ?> ">
                    <a class="nav-link" href="<?php echo get_home_url(); ?>/about-us">ABOUT US</a>
                </li>
                <li class="nav-item <?php if ($slug == 'services') { echo 'active'; } ?> ">
                    <a class="nav-link" href="<?php echo get_home_url(); ?>/services">SERVICES</a>
                </li>
                <li class="nav-item <?php if ($slug == 'products') { echo 'active'; } ?> ">
                    <a class="nav-link" href="<?php echo get_home_url(); ?>/cars">PRODUCTS</a>
                </li>
                <li class="nav-item <?php if ($slug == 'contact-us') { echo 'active'; } ?> ">
                    <a class="nav-link" href="<?php echo get_home_url(); ?>/contact-us">CONTACT US</a>
                </li>
            </ul>
            <div>
                <a href="tel:0919830044" class="mainBtn" style='padding: 10px'>Hotline: 0919 830 044</a>
            </div>
        </div>
    </div>
</nav>
