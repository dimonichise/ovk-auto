<!--Header PHP -->
<?php 
$name_page = 'Новости'; require 'template/header.php';
 ?>

<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcam_text text-center">
                    <h3>Новости</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bradcam_area_end -->


<!--================Blog Area =================-->
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">

                    <?php 
                       $news = get_news_all();
                       foreach ($news as $new): ?>

                    <?php $category_name = get_category_id($new["category_id"]); ?>

                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0" src=<?php echo $new["img"]; ?> alt="">
                            <!-- Дата на цветном фоне -->
                            <!-- <a href="#" class="blog_item_date"> //
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a> -->
                        </div>

                        <div class="blog_details">
                            <a class="d-inline-block" href="single-blog.php?id=<?php echo $new["id"]; ?>">
                                <h2><?php echo $new["title"]; ?></h2>
                            </a>
                            <p><?php echo $new["intro_text"]; ?></p>
                            <ul class="blog-info-link">
                                <li><a href="#"><i class="fa fa-archive"></i> <?php echo $category_name; ?></a></li>
                                <li><a href="#"><i
                                            class="fa fa-calendar"></i><?php echo date("d.m.Y", strtotime($new["date"])); ?></a>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <?php endforeach; ?>



                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous">
                                    <i class="ti-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Next">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">

                    <?php require "template/category_list.php" ?>

                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Recent Post</h3>
                        <div class="media post_item">
                            <img src="img/post/post_1.png" alt="post">
                            <div class="media-body">
                                <a href="single-blog.html">
                                    <h3>From life was you fish...</h3>
                                </a>
                                <p>January 12, 2019</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="img/post/post_2.png" alt="post">
                            <div class="media-body">
                                <a href="single-blog.html">
                                    <h3>The Amazing Hubble</h3>
                                </a>
                                <p>02 Hours ago</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="img/post/post_3.png" alt="post">
                            <div class="media-body">
                                <a href="single-blog.html">
                                    <h3>Astronomy Or Astrology</h3>
                                </a>
                                <p>03 Hours ago</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="img/post/post_4.png" alt="post">
                            <div class="media-body">
                                <a href="single-blog.html">
                                    <h3>Asteroids telescope</h3>
                                </a>
                                <p>01 Hours ago</p>
                            </div>
                        </div>
                    </aside>
                    


                    <!--Инстаграмный блок -->

                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->

<!--Footer PHP -->
<?php require 'template/footer.php'; ?>