<?php
 $length = count($DataEvalute);
 $countrating = $length/2;
 $tbSao = 0;
 foreach($DataEvalute as $row){
    $tbSao += $row['soSao']/$length;
 }
 ?>
<main id="main">
<div class="container">
    <div class="break-crumb">
        <div class="break-crumb__head">
            <div class="home">
                <a href="#">
                    <span>Trang chủ</span>
                </a>
                <span class="mr_lr">&nbsp;/ &nbsp;</span>
                <a href="#">
                    <span>Chi tiết người giúp việc</span>
                </a>
                <span class="mr_lr">&nbsp;/ &nbsp;</span>
            </div>
            <div>
                <strong>
                    <span><?php echo $data_user[0]['hoTen']; ?></span>
                </strong>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col col-lg-4">
            <div class="product-detail-left">
                <div id="product-detail-left__thumbnail" class="<?php if($status == true) echo "product-detail-left__thumbnail--sale "?>">
                    <img src="./Publics/images/<?php echo $data_user[0]['hinhAnh']; ?>" alt="" class="product-detail-left__image-main">
                </div>
            </div>
        </div>
        <div class="col col-lg-5">
            <div class="product-detail-main">
                <h2 class="tilte-name-product-detail">Họ và tên: <?php echo $data_user[0]['hoTen']; ?></h2>
                <h2 class="tilte-name-product-detail-detail">Ngày sinh: <?php echo $data_user[0]['ngaySinh']; ?></h2>
                <h2 class="tilte-name-product-detail-detail">Giới tính: <?php echo $data_user[0]['gioiTinh']; ?></h2>
                <h2 class="tilte-name-product-detail-detail">Địa chỉ: <?php echo $data_user[0]['diaChi']; ?></h2>
                <h2 class="tilte-name-product-detail-detail">Thời gian muốn làm: <?php echo $data_user[0]['thoiGian']; ?></h2>
                <h2 class="tilte-name-product-detail-detail">Trình độ học vấn: <?php echo $data_user[0]['trinhDoHV']; ?></h2>
                <h2 class="tilte-name-product-detail-detail">Khu vực làm việc: <?php echo $data_user[0]['tenQuan']; ?></h2>
                <h2 class="tilte-name-product-detail-detail">Sở thích: <?php echo $data_user[0]['soThich']; ?></h2>
                <h2 class="tilte-name-product-detail-detail">Ghi chú: <?php echo $data_user[0]['ghiChu']; ?></h2>
                <div class="product-detail-main__flex">
                    <ul class="product-detail-main__vote">
                        <span><?= $tbSao ?></span>
                        <?php
                            for ($i = 1; $i <= floor($tbSao); $i++){ 
                            ?>
                                <li><i class="fas fa-star active"></i></li>
                            <?php } 
                            if($tbSao > floor($tbSao)) {
                                echo ' <li><i class="fas fa-star-half-alt active"></i></li>';
                                for ($i = 1; $i < (5-floor($tbSao)); $i++)
                                    echo '<li><i class="fas fa-star"></i></li>';
                            }
                            else {
                                for ($i = 1; $i <= (5-floor($tbSao)); $i++)
                                    echo '<li><i class="fas fa-star"></i></li>';
                            }
                        ?>
                    </ul>
                    <div class="count-vote">
                        <span><?= $countrating ?></span>
                        <div>Đánh giá</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-lg-3" style="visibility: visible; -webkit-animation-name: fadeInDown; animation-name: fadeInDown;">
        <p class="link-btn big-a">
            <a href="" class="btn btn-success">Đăng tin tuyển dụng
                <i class="fa fa-chevron-circle-right"></i>
            </a>
        </p>
        <p class="link-btn big-a">
            <a href="" class="btn btn-success">Đăng tin tìm việc
                <i class="fa fa-chevron-circle-right"></i>
            </a>
        </p>
        <div class="delivery-method">
            <h5>CHO NHÀ TUYỂN DỤNG</h5>
            <ul>
                <?php 
                    for ($i = 0; $i < (count($data_dmcv)); $i++) { ?>
                    <li><ahref=""><?php echo $data_dmcv[$i]['tenDM']; ?></ahref=></li>
                <?php } ?>
            </ul>
        </div>
        </div>
        <section id="product-dry" class="product-related" style="width: 100%;">
            <div class="container">
                <div class="populator__head">
                    <div>
                        <h2 class="populator__head-title">
                            <a href="">Người giúp việc liên quan</a>
                        </h2>
                    </div>
                </div>
                <div class="list-product-sale owl-carousel owl-theme" id="help-slider">
                    <?php 
                        for ($i = 0; $i < (count($data_lq)); $i++) {
                    ?>
                    <div class="col-product__item sale-home" style="margin-right: 20px;">
                        <form action="" >
                            <div>
                                <a href="">
                                    <i data-heart="<?php echo $data_lq[$i]['maTK'] ?>"  class="icon-heart-element product-item-icon far fa-heart"></i>
                                </a>
                            </div>
                            <div class="product-imgg">
                                <a href="?act=detailhelp&tk=<?=$data_lq[$i]['maTK']?>" style="display: block;">
                                    <span class ="img--hover"></span> 
                                    <img src="./Publics/images/<?php echo $data_lq[$i]['hinhAnh'] ?>" alt="">
                                </a>
                                
                            </div>
                            <div class="product-fruits__infos">
                                <h2 class="tilte-name-product-t"><?= $data_lq[$i]['hoTen']?></h2>
                                <div>
                                    <span class="price-new"><?= $data_lq[$i]['ngaySinh'] ?></span>
                                    <span class="price-old"><?php $data_lq[$i]['diaChi'] ?></span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </div>
    
</div>
</main>