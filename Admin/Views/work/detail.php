<main id="main">
<div class="container">
    <div class="row mb-4">
        <div class="col col-lg-4">
            <div class="product-detail-left">
                <div id="product-detail-left__thumbnail">
                    <img src="../Publics/images/<?php echo $data_work[0]['tenHinh']; ?>" alt="" class="product-detail-left__image-main">
                </div>
                <div class="product-detail-left__list-thumb">
                    <ul>
                        <?php for ($i=0; $i < count($data_work) ; $i++) { ?>
                            <li class=""><img src="../Publics/images/<?php echo $data_work[$i]['tenHinh'] ?>" alt=""></li>
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
                <h2 class="tilte-name-product-detail-detail">Khu vực: <?php echo $data_work[0]['tenQuan']; ?></h2>
                <h2 class="tilte-name-product-detail-detail">Số lương: <?php echo $data_work[0]['soLuong']; ?></h2>
                <h2 class="tilte-name-product-detail-detail">Trình độ học vấn: <?php echo $data_work[0]['trinhDoHV']; ?></h2>
                <h2 class="tilte-name-product-detail-detail">Giới tính yêu cầu: <?php echo $data_work[0]['gioiTinhYC']; ?></h2>
                <h2 class="tilte-name-product-detail-detail">Chức vụ: <?php echo $data_work[0]['chucVu']; ?></h2>
                <h2 class="tilte-name-product-detail-detail">Lương: <?php echo $data_work[0]['luong']; ?></h2>
                <h2 class="tilte-name-product-detail-detail">Địa chỉ: <?php echo $data_work[0]['diaChi']; ?></h2>
                <h2 class="tilte-name-product-detail-detail">Thời gian: <?php echo $data_work[0]['time']; ?></h2>
                <h2 class="tilte-name-product-detail-detail">Mô tả: <?php echo $data_work[0]['moTa']; ?></h2>
                <?php
                    if(isset($_SESSION['isLogin_Giupviec'])){ ?>
                    <form id ="table" action="?act=detailwork&xuli=store" method="POST" enctype="multipart/form-data">
                        <h2 class="tilte-name-product-detail" style="text-align: center;margin-top: 20px;">ĐĂNG KÝ ỨNG TUYỂN</h2>
                        <input style="display: none;" type="text" name="maCV" class="form-control form-control-lg" value="<?= $data_work[0]['maCV']?>"/>
                        <div class="btn-recruiter">
                            <button class="btn-confirm" type="submit" form="table" style="margin-left: 30px;">Đăng ký</button>
                        </div>
                    </form>
                <?php } ?>
               
            </div>
        </div>
    </div>
    
</div>
</main>