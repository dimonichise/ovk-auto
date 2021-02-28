 <!--Header PHP -->
 <?php $name_page = 'Контакты'; require 'template/header.php'; ?>

 <!-- bradcam_area_start -->
 <div class="bradcam_area breadcam_bg">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="bradcam_text text-center">
                     <h3>Контакты</h3>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- bradcam_area_end -->

 <!-- ================ contact section start ================= -->
 <section class="contact-section">
     <div class="container">
         <div class="d-none d-sm-block mb-5 pb-4">
             <iframe src="https://yandex.ru/map-widget/v1/?z=12&ol=biz&oid=159310856336" width="100%" height="400"
                 frameborder="0"></iframe>
         </div>
         <div class="row">
             <div class="col-12">
                 <h2 class="contact-title">Напишите нам</h2>
             </div>
             <div class="col-lg-8">
                 <form  class="form-contact contact_form" action="contact_process.php" method="post"
                     id="contactForm" novalidate="novalidate">
                     <div class="row">
                         <div class="col-12">
                             <div class="form-group">
                                 <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                     onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
                                     placeholder=" Ваше сообщение"></textarea>
                             </div>
                         </div>
                         <div class="col-sm-6">
                             <div class="form-group">
                                 <input class="form-control valid" name="name" id="name" type="text"
                                     onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
                                     placeholder="Ваше имя">
                             </div>
                         </div>
                         <div class="col-sm-6">
                             <div class="form-group">
                                 <input class="form-control valid" name="email" id="email" type="email"
                                     onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                                     placeholder="Email">
                             </div>
                         </div>
                         <div class="col-sm-6">
                             <div class="form-group">
                                 <input class="form-control valid" name="number" id="number" type="tel"
                                     onfocus="this.placeholder = ''" onblur="this.placeholder = 'Телефон'"
                                     placeholder="Телефон">
                             </div>
                         </div>
                         <div class="col-6">
                             <div class="form-group">
                                 <input class="form-control" name="subject" id="subject" type="text"
                                     onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                     placeholder="Тема письма">
                             </div>
                         </div>
                     </div>
                     <div class="form-group mt-3">
                         <button type="submit" class="button button-contactForm boxed-btn submit-btn">Отправить</button>
                     </div>
                 </form>
             </div>
             <div class="col-lg-3 offset-lg-1">
                 <div class="media contact-info">
                     <span class="contact-info__icon"><i class="ti-home"></i></span>
                     <div class="media-body">
                         <h3>410000, г.Саратов</h3>
                         <p>Волжский р-он. <br>п. Юбилейный <br>Соколовая гора д. 4 <br>+7 (8452) 39-84-75</p>
                     </div>
                 </div>
                 <div class="media contact-info">
                     <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                     <div class="media-body">
                         <h3><strong>Пн - Пт:</strong> с 8:00 до 17:30; <br><strong>Сб:</strong> с 8:00 до 16:00</h3>
                         <p>Вс: выходной</p>
                     </div>
                 </div>
                 <div class="media contact-info">
                     <span class="contact-info__icon"><i class="ti-email"></i></span>
                     <div class="media-body">
                         <h3>dvbochkov@ovk-auto.ru</h3>
                         <p>Если не смогли связаться через форму обратной связи,
                         напишите на данный e-mail.</p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- ================ contact section end ================= -->

 <?php require 'template/footer.php'; ?>