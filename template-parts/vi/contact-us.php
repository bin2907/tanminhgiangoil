<?php
/**
 * Template Name: Liên Hệ
 *
 * User: Binh Nguyen
 * Date: 4/14/2019
 * Time: 12:19 PM
 */

get_header();

?>

<div class="container-fluid"
     style="color: #fff; background-image: url('<?php echo get_template_directory_uri(); ?>/img/misc/total-lubricant.jpg'); background-size: cover; padding: 3rem 0">
    <h1 style="font-size: 3rem;" class="text-center">
        Liên Hệ
    </h1>
    <div class="text-center">
        <a style="color: #f9520b" href="#">Home</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;Liên Hệ
    </div>
</div>

<div class="container-fluid contactUs" style="padding: 3rem 0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="contactHeader">Thông Tin Liên Hệ</h3>
            </div>
            <div class="col-md-12">
                <p>
                    Trong trường hợp khách hàng có nhu cầu. Vui lòng liên hệ thông tin bên dưới.
                    Để chúng tôi nhận thông tin nhanh nhất. Vui lòng gọi điện thoại trực tiếp hay đến để gặp chúng tôi tại địa chỉ bên dưới.
                    Chúng tôi luôn có sẵn để giúp đỡ bạn.
                </p>
            </div>

            <div class="col-md-6">
                <form style="padding-top: 1rem">
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" placeholder="Tên của bạn" name="name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Email của bạn" name="email">
                    </div>
                    <div class="form-group">
                        <textarea name="user-message" id="user-message" class="form-control" rows="6" placeholder="Lời nhắn của bạn"></textarea>
                    </div>

                    <button type="submit" class="mainBtn">Gửi Lời Nhắn</button>
                </form>
            </div>
            <div class="col-md-6">
                <div  style="padding-top: 1rem">
                    <a class="block contactUsLink contactUsLinkTop" href="tel:02838118248"><i class="fas fa-phone contactUsIcon"></i>(028) 39 418 782</a>
                    <a class="block contactUsLink" href="mailto:tmgoil@gmail.com"><i class="far fa-envelope contactUsIcon"></i>tmgoil@gmail.com</a>
                    <a class="block contactUsLink" href="https://www.google.com/maps/place/C%C3%B4ng+Ty+CP+Thi%E1%BA%BFt+B%E1%BB%8B+T%C3%A2n+Minh+Giang/@10.8022892,106.6524534,19.75z/data=!4m13!1m7!3m6!1s0x3175293093be89e7:0x644023188aa7f7c7!2zMjAgQ-G7mW5nIEjDsmEsIFBoxrDhu51uZyA0LCBUw6JuIELDrG5oLCBI4buTIENow60gTWluaA!3b1!8m2!3d10.8010975!4d106.6605627!3m4!1s0x317529476335892b:0x94735560b935388d!8m2!3d10.8026808!4d106.6524243" target="_blank">
                        <i class="fas fa-map-marker-alt contactUsIcon contactUsAddIcon"></i> 20 Cộng Hòa, P.12, Q.Tân Bình, Hồ Chí Minh, Việt Nam
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
