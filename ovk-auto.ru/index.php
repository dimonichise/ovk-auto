<!--Header PHP -->
<?php $name_page = 'OVK-AUTO'; require 'template/header.php'; ?>

<!-- slider_area_start -->
<div class="slider_area">
    <div class="single_slider slider_bg_1 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="slider_text">
                        <h3> <br> <span>Давай знакомиться</span></h3>
                        <p>Акция для тех кто у нас впервые <br>сумашедшая скидка до 30%</p>
                        <a href="#"><button type="button" class="btn boxed-btn3">
                            Записаться на сервис
                        </button></a>

                    </div>
                </div>
            </div>
        </div>
        
        <div class="dog_thumb d-none d-lg-block">
            <!-- <img src="img/banner/hello.svg" height= 550px; alt=""> -->
        </div>
    </div>

</div>
<!-- slider_area_end -->

<?php require 'template/service_area.php'; ?>

<!-- pet_care_area_start  -->
<div class="pet_care_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="pet_thumb">
                    <img src="img/about/fon.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 col-md-6">
                <div class="pet_info">
                    <div class="section_title">
                        <h3><span>Для наших друзей</span> <br>
                            "Клубная карта"</h3>
                        <p>Программа лояльности <strong>"Клубная карта"</strong> предоставляет<br>комплекс привелегий
                            для наших постоянных клиентов.<br>Бонусы, скидки, розыгрыши, тех. поддержка - вот только
                            <br>
                            небольшая часть того что получают держатели клубной карты компании OVK-OUTO.</p>
                        <a href="club_card.php" class="boxed-btn3">Подробнее...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- pet_care_area_end  -->

<!-- adapt_area_start  -->
<div class="adapt_area">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5">
                <div class="adapt_help">
                    <div class="section_title">
                        <h3><span>Мы гордимся</span>
                            своей историей</h3>
                        <p>Официальную деятельность наша компания ведет с далекого 1995 года.
                            За это продолжительное время мы получили огромный опыт в сфере ремонта
                            и технического обслуживания автомобилей и общения с людьми...</p>
                        <a href="about.php" class="boxed-btn3">Подробнее...</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="adapt_about">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="single_adapt text-center">
                                <img src="img/adapt_icon/4.png" alt="">
                                <div class="adapt_content">
                                    <h3><span class="counter">3000</span>+</h3>
                                    <p>Благодарных клиентов</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single_adapt text-center">
                                <img src="img/adapt_icon/5.png" alt="">
                                <div class="adapt_content">
                                    <h3><span class="counter">25</span>+</h3>
                                    <p>Лет на рынке</p>
                                </div>
                            </div>
                            <div class="single_adapt text-center">
                                <img src="img/adapt_icon/6.png" alt="">
                                <div class="adapt_content">
                                    <h3><span class="counter">125</span>+</h3>
                                    <p>Видов работ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- adapt_area_end  -->

<?php require 'template/testmonial_area.php'; ?>


<!-- Contact_anipad -->
<?php require 'template/contact_anipat.php'; ?>
<?php require 'template/modal.php'; ?>
<!--Footer PHP -->
<?php require 'template/footer.php'; ?>