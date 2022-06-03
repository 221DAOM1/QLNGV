<section class="main">
    <div class="container">
        <div class="break-crumb">
            <div class="break-crumb__head">
                <div class="home">
                    <a href="#">
                        <span>Trang chủ</span>
                    </a>
                        <span class="mr_lr">&nbsp;/ Cho người tuyển dụng&nbsp;</span>
                </div>
                <div>
                    <strong>
                        <span id="danhmuc">/ Đánh giá giúp việc</span>
                    </strong>
                </div>
            </div>
        </div>
        <div class="product__content">
            <div class="container">
                <div class="row">
                    <div class="product-list col-lg-9" >
                        <?php 
                        for ($i = 0; $i < (count($data)); $i++) {?> 
                            <div class="work_new_content">    
                                <a href="?act=ratehelp&xuli=chitiet&id=<?= $data[$i]['maCV'] ?>" style="display: block;">
                                    <div style="display: flex;">
                                        <div class="work_new_content_img">
                                            <img style="width:150px;height:150px;" src="./Publics/images/<?php echo $data[$i]['tenHinh'] ?>" alt="">
                                        </div>
                                        <div class="work_new_content_right">
                                            <p class="work_new_name"><?= $data[$i]['tenCV'] ?></p>
                                            <p class="work_new_detail">Khu vực làm việc: <?= $data[$i]['tenQuan'] ?></p>
                                            <p class="work_new_detail">Mô tả: <?= $data[$i]['moTa'] ?></p>
                                            <p class="work_new_detail">Địa chỉ làm việc: <?= $data[$i]['diaChi'] ?></p>
                                            <p class="work_new_detail">Số lượng người làm: <?= $data[$i]['soLuong'] ?></p>
                                        </div>
                                    </div>
                                </a>
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
</section>