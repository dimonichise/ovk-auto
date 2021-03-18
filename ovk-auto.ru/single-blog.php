<!--Header PHP -->

<?php
require 'db.php';
$name_page = $new["title"];
 require 'template/header.php'; 
 
?>

<?php
   $category_name = get_category_id($new["category_id"]);
?>

  <!-- bradcam_area_start -->
  <div class="bradcam_area breadcam_bg">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="bradcam_text text-center">
                      <h3><?php echo $new["title"]; ?></h3>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- bradcam_area_end -->

   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src= <?php echo $new["img"]; ?>alt="">
                  </div>
                  <div class="blog_details">
                     <h2>
                     <?php echo $new["title"]; ?>
                     </h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="fa fa-archive"></i><?php echo $category_name; ?></a></li>
                        <li><a href="#"><i class="fa fa-calendar"></i><?php echo date("d.m.Y", strtotime($new["date"])); ?></a></li>
                     </ul>
                     <p class="excert">
                        <?php echo $new["full_text"]; ?>
                     </p>
                    
                     <!-- Рамка справочной информации -->
                     <!--<div class="quote-wrapper">
                        <div class="quotes">
                           MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                           should have to spend money on boot camp when you can get the MCSE study materials yourself at
                           a fraction of the camp price. However, who has the willpower to actually sit through a
                           self-imposed MCSE training.
                        </div>
                     </div>-->
                    
                  </div>
               </div>
               <hr>
              <!-- <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                     <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                        people like this</p>
                     <div class="col-sm-4 text-center my-2 my-sm-0">-->
                        <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p>
                    </div>
                     <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                     </ul>
                  </div>
                  <div class="navigation-area">
                     <div class="row">
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="img/post/preview.png" alt="">
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p>Prev Post</p>
                              <a href="#">
                                 <h4>Space The Final Frontier</h4>
                              </a>
                           </div>
                        </div>
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">
                              <p>Next Post</p>
                              <a href="#">
                                 <h4>Telescopes 101</h4>
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="img/post/next.png" alt="">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>-->
               <div class="blog-author">
                  <div class="media align-items-center">
                     <img src="img/blog/author.png" alt="">
                     <div class="media-body">
                        <a href="#">
                           <h4>Администрация</h4>
                        </a>
                        <p>Если у Вас отались вопросы по данной теме, задайте их пожалуйста
                        через форму обратной связи. Мы обязательно ответим на  них в ближайшее время.</p>
                     </div>
                  </div>
               </div>
              
            <div class="row">
             <div class="col-12">
                 <h2 class="contact-title">Задайте вопрос</h2>
             </div>
             <div class="col-lg-12">
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
                         <div class="col-12">
                             <div class="form-group">
                                 <input class="form-control" name="subject" id="subject" type="text"
                                     onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                     placeholder="Тема письма">
                             </div>
                         </div>
                     </div>
                     <div class="form-group mt-3">
                         <button type="submit" class="button button-contactForm boxed-btn submit-btn g-recaptcha"
                          data-sitekey="6LfwT6wZAAAAALPlwydnZOMTAZ49q-ankwazkv5L" 
                           data-callback='onSubmit' 
                           data-action='submit'>Отправить</button>
                     </div>
                 </form>
             </div>
             </div>  
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  
                  <?php require "template/category_list.php" ?>

                  
                 
                  
                  <!-- Инстаграмный блок -->
                  
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->

    <!--Footer PHP -->
    <?php require 'template/footer.php'; ?>