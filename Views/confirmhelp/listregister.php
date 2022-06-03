<section class="main">
    <div class="container">
        <div class="break-crumb">
            <div class="break-crumb__head">
                <div class="home">
                    <a href="#">
                        <span>Trang chủ</span>
                    </a>
                        <span class="mr_lr">&nbsp;/ Cho người giúp việc&nbsp;</span>
                </div>
                <div>
                    <strong>
                        <span id="danhmuc">/ Công việc đăng ký</span>
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
                                <a href="?act=confirmhelp&xuli=detailwork&id=<?= $data[$i]['maCV'] ?>" style="display: block;">
                                    <div style="display: flex;">
                                        <div class="work_new_content_img">
                                            <img style="width:150px;height:150px;" src="./Publics/images/<?php echo $data[$i]['tenHinh'] ?>" alt="">
                                        </div>
                                        <div class="work_new_content_right">
                                            <p class="work_new_name" style="margin-top: 0;margin-bottom: 9px;"><?= $data[$i]['tenCV'] ?></p>
                                            <p class="work_new_detail">Khu vực làm việc: <?= $data[$i]['tenQuan'] ?></p>
                                            <p class="work_new_detail">Mô tả: <?= $data[$i]['moTa'] ?></p>
                                            <p class="work_new_detail">Địa chỉ: <?= $data[$i]['diaChi'] ?></p>
                                            <p class="work_new_detail" style="color: red;">Tình trạng ứng tuyển: 
                                            <?php if($data[$i]['tinhTrangUngTuyen']==1){
                                                echo 'Đã duyệt đơn ứng tuyển của bạn';
                                            } else {
                                                echo 'Chờ xử lý';
                                            }?></p>
                                            <p class="work_new_detail" style="color: red;">Khách hàng: 
                                            <?php if($data[$i]['khXacNhan']==1){
                                                echo 'Khách hàng đã nhận bạn làm việc';
                                            } else {
                                                echo 'Chờ xử lý';
                                            }?></p>
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