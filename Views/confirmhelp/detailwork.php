<main id="main">
<div class="container">
    <div class="break-crumb">
        <div class="break-crumb__head">
            <div class="home">
                <a href="#">
                    <span>Cho người giúp việc</span>
                </a>
                <span class="mr_lr">&nbsp;/ &nbsp;</span>
                <a href="#">
                    <span>Chi tiết công việc đăng ký</span>
                </a>
                <span class="mr_lr">&nbsp;/ &nbsp;</span>
            </div>
            <div>
                <strong>
                    <span><?php echo $data_work[0]['tenCV']; ?></span>
                </strong>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col col-lg-4">
            <div class="product-detail-left">
                <div id="product-detail-left__thumbnail">
                    <img src="./Publics/images/<?php echo $data_work[0]['tenHinh']; ?>" alt="" class="product-detail-left__image-main">
                </div>
                <div class="product-detail-left__list-thumb">
                    <ul>
                        <?php for ($i=0; $i < count($data_work) ; $i++) { ?>
                            <li class=""><img src="./Publics/images/<?php echo $data_work[$i]['tenHinh'] ?>" alt=""></li>
                        <?php } ?>
                    <div class="product-detail-left__control">
                        <span class="product-detail-left__control-left">
                            <i class="fas fa-chevron-left"></i>
                        </span>
                        <span class="product-detail-left__control-right">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-lg-5">
            <div class="product-detail-main">
                <h2 class="tilte-name-product-detail">Tên công việc: <?php echo $data_work[0]['tenCV']; ?></h2>
                <h2 class="tilte-name-product-detail-detail">Người đăng: <?php echo $data_work[0]['hoTen']; ?></h2>
                <h2 class="tilte-name-product-detail-detail">Liên hệ: 0<?php echo $data_work[0]['SDT']; ?></h2>
                <h2 class="tilte-name-product-detail-detail">Khu vực làm việc: <?php echo $data_work[0]['tenQuan']; ?></h2>
                <h2 class="tilte-name-product-detail-detail">Số lượng người làm: <?php echo $data_work[0]['soLuong']; ?> người</h2>
                <h2 class="tilte-name-product-detail-detail">Trình độ học vấn: <?php echo $data_work[0]['trinhDoHV']; ?></h2>
                <h2 class="tilte-name-product-detail-detail">Giới tính yêu cầu: <?php echo $data_work[0]['gioiTinhYC']; ?></h2>
                <h2 class="tilte-name-product-detail-detail">Chức vụ: <?php echo $data_work[0]['chucVu']; ?></h2>
                <h2 class="tilte-name-product-detail-detail">Lương: <?php echo $data_work[0]['luong']; ?></h2>
                <h2 class="tilte-name-product-detail-detail">Địa chỉ: <?php echo $data_work[0]['diaChi']; ?></h2>
                <h2 class="tilte-name-product-detail-detail">Thời gian: <?php echo $data_work[0]['time']; ?></h2>
                <h2 class="tilte-name-product-detail-detail">Mô tả: <?php echo $data_work[0]['moTa']; ?></h2>
            </div>
        </div>
        <div class="col col-lg-2" style="visibility: visible; -webkit-animation-name: fadeInDown; animation-name: fadeInDown;">
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
</main>