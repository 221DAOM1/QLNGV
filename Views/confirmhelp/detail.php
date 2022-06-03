<div class="main">
    <div class="container">
        <div class="break-crumb">
            <div class="break-crumb__head">
                <div class="home">
                    <a href="#">
                        <span>Trang chủ</span>
                    </a>
                        <span class="mr_lr">&nbsp;/ Công việc/ Ứng viên giới thiệu&nbsp;</span>
                </div>
                <div>
                    <strong>
                        <span id="danhmuc">/ Ứng viên</span>
                    </strong>
                </div>
            </div>
        </div>
        <div class="product__content">
            <div class="container">
                <div class="row">
                    <div class="product-list col-lg-9" >
                        <?php 
                            for ($i = 0; $i < (count($data)); $i++) { ?>
                            <div class="col-product__itemm col col-6 col-md-4 col-lg-4 col-sm-6">
                                <form action="" >
                                    
                                    <div class="product-imgg">
                                        <a href="?act=confirmhelp&xuli=chitiethelp&id=<?=$data[$i]['maCV']?>&tk=<?=$data[$i]['maTK']?>" style="display: block;">
                                            <img src="./Publics/images/<?php echo $data[$i]['hinhAnh'] ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="product-fruits__infos">
                                        <h2 class="tilte-name-product-t"><?= $data[$i]['hoTen']?></h2>
                                        <div style="margin-top: 10px;">
                                            <span class="price-new"><?= $data[$i]['ngaySinh'] ?></span>
                                        </div>
                                        <div style="margin-bottom: 10px;">
                                            <span class="price-new">Làm việc tại: <?= $data[$i]['tenQuan'] ?></span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        <?php } ?>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>