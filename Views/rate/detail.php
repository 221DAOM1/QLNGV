<div class="main">
    <div class="container">
        <div class="work_new_left_work" style="width: 100%; margin-left: 160px;">
            <div class="content_home_top" >
                <div class="big-hotline  wow fadeInDown animated">
                    Danh sách người làm
                </div>
            </div>
            <?php 
                for ($i = 0; $i < (count($data)); $i++) {
            ?> 
            <div class="work_new_content" >    
                <a style="display: flex;" href="?act=ratehelp&xuli=chitiethelp&id=<?=$data[$i]['maCV']?>&tk=<?=$data[$i]['maTK']?>">
                    <div class="work_new_content_img">
                        <img src="./Publics/images/<?php echo $data[$i]['hinhAnh'] ?>" alt="">
                    </div>
                    <div class="work_new_content_right" style="text-align: left;">
                        <p class="work_new_name"><?= $data[$i]['hoTen'] ?></p>
                        <p class="work_new_detail"><?= $data[$i]['ngaySinh'] ?></p>
                        <p class="work_new_detail">0<?= $data[$i]['SDT'] ?></p>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>