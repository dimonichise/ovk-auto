<!--Header PHP -->
<?php 
require 'db.php';
$name_page = 'Новости'; 
require 'template/header.php';
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
                     // Текущая страница
                        if (isset($_GET['page'])){
                            $page = $_GET['page'];
                        }else $page = 1;
                        $kol = 3;  //количество записей для вывода
                        $art = ($page * $kol) - $kol; // определяем, с какой записи нам выводить
                        // Определяем все количество записей в таблице
                        
                        $total=$db->query("SELECT COUNT(*) as count FROM news")->fetchColumn();
                        // Количество страниц для пагинации
                        $str_pag = ceil($total / $kol);

                         $news = get_news_all($art, $kol);
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


                    <!--Паджинация -->                 
                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                        <!-- Стрелка назад --> 
                            <li class="page-item">
                                <a href="blog.php?page=<?php if($page!=1) {
                                    echo $page-1;
                                } else{
                                    echo $page=1;
                                }
                                    ?>" class="page-link" aria-label="Previous">
                                    <i class="ti-angle-left"></i>
                                </a>
                            </li>
                         <!--Кнопки страниц и класс актив -->        
                    <?php for ($i = 1; $i <= $str_pag; $i++){
                        if($page == $i)                
                        echo '<li class="page-item active">
                        <a href=blog.php?page='.$i.' class="page-link">'.$i.'</a>
                    </li>';
                        else {
                            echo '<li class="page-item">
                            <a href=blog.php?page='.$i.' class="page-link">'.$i.'</a>
                        </li>';  
                        }
                    }?>
                       <!--Стрелка назад -->   
                            <li class="page-item">
                            <a href="blog.php?page=<?php if($page<$str_pag) {
                                echo $page+1;
                            }else {
                                echo $page;
                            }
                                    ?>" class="page-link" aria-label="Next">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <!--Конец поджинации -->

                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">

                    <?php require "template/category_list.php" ?>

                   

                    <!--Инстаграмный блок -->

                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->

<!--Footer PHP -->
<?php require 'template/footer.php'; ?>