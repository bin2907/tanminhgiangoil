<div class="container-fluid footer">
    <div class="container footerTop">
        <div class="row">
            <div class=" col-md-3 pdtb30">
                <a class="block" href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo/tan-minh-giang-oil-logo-2.png"
                         width="150px" class="imgbackground">
                </a>
                <a class="block pdt30" href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=43403" rel="nofollow"
                   target="_blank" title="Tân Minh Giang Oil đã thông báo với Bộ Công Thương">
                    <img alt="Tân Minh Giang Oil đã thông báo với Bộ Công Thương"
                         src="http://online.gov.vn/PublicImages/2015/08/27/11/20150827110756-dathongbao.png" style="height:75px">
                </a>
            </div>
            <div class="col-md-2 pdtb30">
                <h4 class="footerHeader">SITE MAPS</h4>
                <?php wp_nav_menu( 
        array( 
              'theme_location' => 'primary-menu-vi', 
              'container' => 'true', 
              'menu_id' => 'primary-menu-footer', 
              'menu_class' => 'footerListItem'
            ) 
            ); ?>
            </div>
            <div class="col-md-2 pdtb30">
                <h4 class="footerHeader">SẢN PHẨM</h4>
                <ul class="footerListItem">
                    <li>
                        <a class="footerLink" href="<?php echo get_home_url(); ?>/linh-vuc-tu-dong-hoa">Lĩnh vực tự động</a>
                    </li>
                    <li>
                        <a class="footerLink" href="<?php echo get_home_url(); ?>/linh-vuc-cong-nghiep">Lĩnh vực công nghiệp</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-5 pdtb30">
                <h4 class="footerHeader">THÔNG TIN LIÊN HỆ</h4>
                <h6>
                    CÔNG TY CỔ PHẦN DỊCH VỤ DẦU NHỚT TÂN MINH GIANG
                </h6>
                <div>
                    Add: <a class="footerLink" href="https://www.google.com/maps/place/C%C3%B4ng+Ty+CP+Thi%E1%BA%BFt+B%E1%BB%8B+T%C3%A2n+Minh+Giang/@10.8022892,106.6524534,19.75z/data=!4m13!1m7!3m6!1s0x3175293093be89e7:0x644023188aa7f7c7!2zMjAgQ-G7mW5nIEjDsmEsIFBoxrDhu51uZyA0LCBUw6JuIELDrG5oLCBI4buTIENow60gTWluaA!3b1!8m2!3d10.8010975!4d106.6605627!3m4!1s0x317529476335892b:0x94735560b935388d!8m2!3d10.8026808!4d106.6524243" target="_blank">
                        20 Cộng Hòa, P.12, Q.Tân Bình, <br />TP. Hồ Chí Minh, Việt Nam
                    </a>
                </div>
                <div>
                    Tel: <a class="footerLink" href="tel:02838118248">(028) 38 118 248</a> / <a class="footerLink" href="tel:02838118248">(028) 39 481 782</a>
                </div>
                <div>
                    Fax: <a class="footerLink" href="#">(028) 39 481 676</a>
                </div>
                <div>
                    Email: <a class="footerLink" href="mailto:oil@tanminhgiang.com"  target="_top">oil@tanminhgiang.com</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container footerSeparation footerBottom">
        Copyright ©2019 <a href="<?php echo get_home_url(); ?>" class="highlightLink">TAN MINH GIANG OIL</a>. All Rights Reserved
    </div>
</div>
