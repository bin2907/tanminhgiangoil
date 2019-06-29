<?php
/**
 * Template Name: Giới Thiệu
 *
 * User: Binh Nguyen
 * Date: 4/14/2019
 * Time: 12:19 PM
 */

get_header();

?>

<div class="container-fluid" style="color: #fff; background-image: url('<?php echo get_template_directory_uri(); ?>/img/misc/about-us.jpg'); background-size: cover; padding: 3rem 0">
    <h1 style="font-size: 3rem;" class="text-center">
        About us
    </h1>
    <div class="text-center">
        <a style="color: #f9520b" href="#">Trang chủ</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;Giới thiệu
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
                    <h3>Nhà cung cấp thiết bị và dịch vụ <span style="color: #75c6e6;">hàng đầu Việt Nam.</span></h3>
                    <div style="border-left: 3px solid #f9520b; margin: 1rem 0 1rem 1rem; padding-left: 1rem; color: #f9520b; font-style: italic;">
                        Tất cả vì khách hàng - Khách hàng cho tất cả
                    </div>
                    <p>
                        Công ty cổ phần dịch vụ dầu nhớt Tân Minh Giang là một thành viên trực thuộc công ty Cổ phần Thiết bị <a href="tanminhgiang.com" target="_blank" class="highlightColor">Tân Minh Giang</a>.
                    </p>
                    <p>
                        Tọa lạc tại số 20 đường Cộng Hòa, gần sân bay Quốc tế Tân Sơn Nhất Tp Hồ Chí Minh, trung tâm thương mại và Công nghiệp lớn nhất Việt Nam, với diện tích khuôn viên 10.000 m2, bao gồm: Khu trụ sở làm việc (1.000 m2), showroom (1.000 m2), nhà kho (2.000 m2), nhà chuyên giao công nghệ, xưởng sản xuất, khu căn tin giải trí.

                    </p>
                    <p class="secondTextColor">
                        Trải qua hành trình hơn 15 năm xây dựng và phát triển. Công ty Cổ phần Thiết bị Tân Minh Giang là một trong những Công ty hàng đầu Việt Nam, chuyên cung cấp dịch vụ thương mại và kỹ thuật, thực hiện trọn gói, các gói thầu EPC (Tư vấn, Thiết kế - Cung cấp thiết bị - Lắp đặt - Vận hành chuyển giao công nghệ - Bảo hành bảo trì), là Nhà Phân Phối Chiến Lược của <b>Công ty TNHH TOTAL</b> chuyên các sản phẩm dầu nhờn động cơ (AO) và dầu nhờn Công nghiệp (IO)
                    </p>
                    <p class="secondTextColor">
                        Hiện nay trong khu vực, chúng tôi hoạt động ở hơn 20 quốc gia với đội ngũ nhân viên trên 3.000 người thuộc 50 Công ty trực thuộc.
                        Mục tiêu của chúng tôi là trở thành công ty hàng đầu ở khu vực Châu Á - Thái Bình Dương về tăng trưởng, lợi nhuận cũng như là mẫu mực trong việc vận hành theo các chuẩn mực quốc tế cao nhất.
                    </p>
                </div>

                <div style="margin-bottom: 5rem">
                    <a href="<?php echo get_home_url(); ?>/products" class="forthBtn" style="margin-top: 3rem">DỊCH VỤ</a>
                    <a href="<?php echo get_home_url(); ?>/products" class="forthBtn"  style="margin-top: 3rem">SẢN PHẨM</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="color: #fff; background-image: url('<?php echo get_template_directory_uri(); ?>/img/misc/iso.jpg'); background-size: cover;">
    <div class="container">
        <h2 style="padding-top: 4rem" class="text-center">Hệ thống quản lý ISO</h2>
        <p style="padding-bottom: 4rem" class="text-center">Hệ thống quản lý chất lượng theo tiêu chuẩn quốc tế ISO 9001:2015 và hệ thống quản lý môi trường theo tiêu chuẩn quốc tế ISO 14001:2015 do tổ chức TQCSI cấp chứng nhận.</p>
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
                    Bạn cần bất kỳ câu hỏi hay cần bất kỳ giúp đỡ tư vấn?
                </div>
            </div>
            <div class="col-md-2 text-right">
                <a href="<?php echo get_home_url(); ?>/contact-us" class='mainBtn' style="margin: 1rem 0">Liên Hệ</a>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
