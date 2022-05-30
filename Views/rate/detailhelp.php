
<main class="main">
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
                <h2 class="tilte-name-product-detail">Tên công việc: <?php echo $data_user[0]['tenCV']; ?></h2>
                <h2 class="tilte-name-product-detail">Họ và tên: <?php echo $data_user[0]['hoTen']; ?></h2>
                <h2 class="tilte-name-product-detail-detail">Ngày sinh: <?php echo $data_user[0]['ngaySinh']; ?></h2>
                <h2 class="tilte-name-product-detail-detail">Giới tính: <?php echo $data_user[0]['gioiTinh']; ?></h2>
                <h2 class="tilte-name-product-detail-detail">Địa chỉ: <?php echo $data_user[0]['diaChi']; ?></h2>
                <?php if (isset($_COOKIE['msg2'])) { ?>
                <div class="alert alert-success">
                    <strong>Thông báo</strong> <?= $_COOKIE['msg2'] ?>
                </div>
                <?php } ?>
                <form id ="table" action="?act=ratehelp&xuli=store" method="POST" enctype="multipart/form-data">
                    <h2 class="tilte-name-product-detail">ĐÁNH GIÁ GIÚP VIỆC</h2>
                    <fieldset class="form-group">
                        <label>Số sao</label>
                        <select class="form-control" name="soSao">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </fieldset>
                    <h2 class="tilte-name-product-detail-detail">Bình luận</h2>
                    <fieldset class="form-group">
                        <input type="text" name="binhLuan" class="form-control form-control-lg" placeholder="Bình luận"/>
                    </fieldset>
                    <input style="display: none;" type="text" name="maTK" class="form-control form-control-lg" value="<?= $data_user[0]['maTK']?>"/>
                    <input style="display: none;" type="text" name="maCV" class="form-control form-control-lg" value="<?= $data_user[0]['maCV']?>"/>
                    <div class="btn-recruiter">
                        <button class="btn-confirm" type="submit" form="table">Đánh giá</button>
                    </div>
                </form>
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
        </div>
    </div>
    
</div>
</main>