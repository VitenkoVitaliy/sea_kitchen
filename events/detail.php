<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
?>


    <!-- Start Align Area -->
        <div class="about_area">
            <div class="icon_1 d-none d-md-block">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/icon/1.png" alt="">
            </div>
            <div class="icon_2 d-none d-md-block">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/icon/2.png" alt="">
            </div>
            <div class="icon_3 d-none d-md-block">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/icon/3.png" alt="">
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about_info_wrap">
                                <h3>Греческий вечер</h3>
                                <span class="long_dash"></span>
                            <p>Omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi. Exercitation photo booth stumptown tote bag todo Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation photo booth et 8-bit kale chips proident chillwave deep vow laborum. Aliquip veniam delectus, marfa eiusmod pinterest.</p>
                            <ul class="food_list">
                                <li>
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/svg_icon/salad.svg" alt="">
                                    <span>12.08.2022</span>
                                </li>
                                <li>
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/svg_icon/tray.svg" alt="">
                                    <span>Участие бесплатно</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about_img">
                            <div class="img_1">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/about/big.png" alt="">
                            </div>
                            <div class="small_img">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/about/small.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- gallery_start -->
    <div class="gallery_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-75">
                        <h3>Фото с прошлых мероприятий</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_gallery big_img">
            <a class="popup-image" href="<?=SITE_TEMPLATE_PATH?>/img/gallery/1.png"></a>
            <img src="<?=SITE_TEMPLATE_PATH?>/img/gallery/1.png" alt="">
        </div>
        <div class="single_gallery small_img">
            <a class="popup-image" href="<?=SITE_TEMPLATE_PATH?>/img/gallery/2.png"></a>
            <img src="<?=SITE_TEMPLATE_PATH?>/img/gallery/2.png" alt="">
        </div>
        <div class="single_gallery small_img">
            <a class="popup-image" href="<?=SITE_TEMPLATE_PATH?>/img/gallery/3.png"></a>
            <img src="../img/gallery/3.png" alt="">
        </div>

        <div class="single_gallery small_img">
            <a class="popup-image" href="<?=SITE_TEMPLATE_PATH?>/img/gallery/4.png"></a>
            <img src="<?=SITE_TEMPLATE_PATH?>/img/gallery/4.png" alt="">
        </div>
        <div class="single_gallery small_img">
            <a class="popup-image" href="<?=SITE_TEMPLATE_PATH?>/img/gallery/5.png"></a>
            <img src="<?=SITE_TEMPLATE_PATH?>/img/gallery/5.png" alt="">
        </div>
        <div class="single_gallery big_img">
            <a class="popup-image" href="<?=SITE_TEMPLATE_PATH?>/img/gallery/6.png"></a>
            <img src="<?=SITE_TEMPLATE_PATH?>/img/gallery/6.png" alt="">
        </div>
    </div>
    
    <!-- gallery end -->
    <!-- about_area_end -->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>