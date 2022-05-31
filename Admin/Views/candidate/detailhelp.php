<?php
 $length = count($DataEvalute);
 $countrating = $length;
 $tbSao = 0;
 foreach($DataEvalute as $row){
    $tbSao += $row['soSao']/$length;
 }
 ?>
<main id="main">
<div class="container">
    
    <div class="row mb-4">
        <div class="col col-lg-4">
            <div class="product-detail-left">
                <div id="product-detail-left__thumbnail" class="<?php if($status == true) echo "product-detail-left__thumbnail--sale "?>">
                    <img src="../Publics/images/<?php echo $data_user[0]['hinhAnh']; ?>" alt="" class="product-detail-left__image-main">
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
        
    </div>
    
</div>
</main>