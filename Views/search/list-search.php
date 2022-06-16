<div id="main">
    <div class="container">
        <div class="break-crumb">
            <div class="break-crumb__head">
                <div class="home">
                    <a href="#">
                        <span>Trang chủ</span>
                    </a>
                    <span class="mr_lr">&nbsp;/ &nbsp;</span>
                    <span>Tìm kiếm</span>
                    <h2 style="padding: 20px 0; font-size: 30px;">TRANG TÌM KIẾM</h2>
                    <p>Đã tìm thấy <?php echo count($data)?> kết quả phù hợp</p>
                </div>
            </div>
        </div>

        <div class="product-list col-lg-12" >
                        
            <div class="container">
                
                <?php 
                for ($i = 0; $i < (count($data)); $i++) {
                ?> 
                <div class="work_new_content">    
                    <a href="?act=detailwork&cv=<?=$data[$i]['maCV']?>" style="display: block;">
                        <div style="display: flex;">
                            <div class="work_new_content_img">
                                <img style="width:150px;height:150px;" src="./Publics/images/<?php echo $data[$i]['tenHinh'] ?>" alt="">
                            </div>
                            <div class="work_new_content_right">
                                <p class="work_new_name"><?= $data[$i]['tenCV'] ?></p>
                                <p class="work_new_detail">Khu vực làm việc: <?= $data[$i]['tenQuan'] ?></p>
                                <p class="work_new_detail">Mô tả: <?= $data[$i]['moTa'] ?></p>
                                <p class="work_new_detail">Người tuyển dụng: <?= $data[$i]['hoTen'] ?></p>
                                <p class="work_new_detail">Số lượng người làm: <?= $data[$i]['soLuong'] ?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php } ?>
            
            </div>
        </div>
    </div>
</div>