<?php
/**
 * Template Name: About us
 *
 * User: Binh Nguyen
 * Date: 4/14/2019
 * Time: 12:19 PM
 */

get_header();

if (get_locale() == "vi") {
    get_template_part( 'template-parts/vi/about-us');
} else {

    ?>

    <div class="container-fluid" style="color: #fff; background-image: url('<?php echo get_template_directory_uri(); ?>/img/misc/about-us.jpg'); background-size: cover; padding: 3rem 0">
        <h1 style="font-size: 3rem;" class="text-center">
            About us
        </h1>
        <div class="text-center">
            <a style="color: #f9520b" href="#">Home</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;About us
        </div>
    </div>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <img width="100%" src="<?php echo get_template_directory_uri(); ?>/img/misc/tmg.jpg" style="margin-top: 5rem" />
                </div>
                <div class="col-md-8">
                    <div style="margin-top: 5rem">
                        <h2><span style="color: #75c6e6;">The leading</span> automotive equipment supplier in Vietnam </h2>
                        <div style="border-left: 3px solid #f9520b; margin: 1rem 0 1rem 1rem; padding-left: 1rem; color: #f9520b; font-style: italic;">
                            All for Customers – Customers give all
                        </div>
                        <p>
                            Located in Tan Binh District, one of the most developed district in Ho Chi Minh City. The position
                            is very convenient with the area of Tan Minh Giang is about 10000 m2.
                        </p>
                        <p class="secondTextColor">
                            With the about 100 employees, almost are automobile and electrical engineer, we can guarantee about
                            the quality and the rate of progress on time.
                        </p>
                        <p class="secondTextColor">
                            Tan Minh Giang equipment J.S.C is one of the leading companies in Viet Nam, specializes in providing
                            commercial service, the distributor of automobile equipment, technical implementation, service at
                            the request of each work customers from consultancy, design, equipment supply, technology transfer
                            to warranty service
                        </p>
                    </div>

                    <div style="margin-bottom: 5rem">
                        <a href="<?php echo get_home_url(); ?>/services" class="forthBtn" style="margin-top: 3rem">SERVICES</a>
                        <a href="<?php echo get_home_url(); ?>/products" class="forthBtn"  style="margin-top: 3rem">PRODUCTS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="color: #fff; background-image: url('<?php echo get_template_directory_uri(); ?>/img/misc/iso.jpg'); background-size: cover;">
        <h2 style="padding: 4rem 0" class="text-center">The International Organization for Standardization ISO 9001:2015</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/misc/iso-1.jpg" style="border: 1px solid #f9520b; box-shadow: 0 0 15px 0 #f9520b; margin-bottom: 4rem">
                </div>
                <div class="col-md-6 text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/misc/iso-1.jpg" style="border: 1px solid #f9520b; box-shadow: 0 0 15px 0 #f9520b; margin-bottom: 4rem">
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div style="color: #75c6e6; font-size: 2rem; padding: 1rem 0">
                        Have you any question or need any help for work consultantion?
                    </div>
                </div>
                <div class="col-md-2 text-right">
                    <a href="<?php echo get_home_url(); ?>/contact-us" class='mainBtn' style="margin: 1rem 0">Contact Us</a>
                </div>
            </div>
        </div>
    </div>

    <?php
}

get_footer();
?>
