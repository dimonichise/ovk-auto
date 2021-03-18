<!--Header PHP -->
<?php 
require 'db.php';
$name_page = $pagen['name_page'];
require 'template/header.php'; ?>

<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcam_text text-center">
                 <h3> <?php echo $pagen['name_page']; ?></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bradcam_area_end -->

<!-- Start Left Aligned -->
<div class="container box_1170">
    <div class="section-top-border">
        <h3 class="mb-30"><?php echo $pagen['name']; ?></h3>
        <div class="row">
            <div class="col-md-3">
                <img src="<?php echo $pagen['img']; ?>" alt="" class="img-fluid">
            </div>
            <div class="col-md-9 mt-sm-20">
                <?php echo $pagen['text']; ?>
                
            </div>
        </div>


    </div>
</div>
<!-- Finish Left Aligned -->

<!-- Contact_anipad -->
<?php require 'template/contact_anipat.php'; ?>

<!--Footer PHP -->
<?php require 'template/footer.php'; ?>