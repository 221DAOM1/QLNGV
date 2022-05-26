
      
<section id ="main">
    <div class="container ">
        <div class="break-crumb">
            <div class="break-crumb__head">
                <div class="home">
                    <a href="#">
                        <span>Trang chủ</span>
                    </a>
                        <span class="mr_lr">&nbsp;/ &nbsp;</span>
                </div>
                <div>
                    <strong>
                        <span>Thông tin cá nhân</span>
                    </strong>
                </div>
            </div>
        </div>
        <div class="container-infor">
            <?php if(isset($data)) {    
                ?>
                <label class="container-infor__title">Thông Tin Tài Khoản</label>
                <h2 class ="container-infor__name">Khách hàng: <span><?= $data['hoTen'] ?></span></h2>
                <input checked="true" class= "infoChange-type" type="radio" name="radio-changeInfor" id="radio-changeInfor">
                <label for="radio-changeInfor">
                    <span>Thông tin cá nhân </span>
                </label>
                <input class= "infoChange-type" type="radio" name="radio-changeInfor" id="radio-changePass"  <?php if (isset($_COOKIE['doimk'])) { echo 'checked="true"';}?>>
                <label for="radio-changePass">
                    <span> Đổi mật khẩu </span>
                </label>
                <div class="div"></div>
                <form  action="?act=taikhoan&xuli=updateinfo" class="container-inforChange  container-inforp" method="POST" enctype="multipart/form-data">
                    <fieldset class="container-infor__item name-login">
                        <label>Tên Đăng nhập</label>
                        <span class="required">*</span>
                        <input id="nameLogin" name = "taiKhoan" type="text" value="<?= $data['taiKhoan']?>" class="form-control form-control-lg edit  " placeholder=""/>
                        <div class="search-result"></div>
                    </fieldset>
                    </fieldset>
                    <fieldset class="container-infor__item">
                        <label>Họ tên</label>
                        <span class="required">*</span>
                        <input type="text" name ="hoTen" value ="<?= $data['hoTen'] ?>"class="form-control form-control-lg edit" placeholder=""/>
                    </fieldset>
                    <fieldset class="container-infor__item">
                        <label>Giới tính</label>
                        <select class="form-control" name ="gioiTinh" value ="<?= $data['gioiTinh'] ?>">
                            <option>Nam</option>
                            <option>Nữ</option>
                        </select>
                    </fieldset>
                    <fieldset class="container-infor__item">
                        <label>Ngày sinh</label>
                        <span class="required">*</span>
                        <input type="text" name ="ngaySinh" value ="<?= $data['ngaySinh'] ?>"class="form-control form-control-lg edit" placeholder=""/>
                    </fieldset>
                    <fieldset class="container-infor__item">
                        <label>Chứng minh nhân dân / Căng cước công dân</label>
                        <span class="required">*</span>
                        <input type="text" name ="CMND" value ="<?= $data['CMND'] ?>"class="form-control form-control-lg edit" placeholder=""/>
                    </fieldset>
                    <fieldset class="container-infor__item">
                        <label>Số điện thoại </label>
                        <span class="required">*</span>
                        <input type="tel" name ="SDT" value="<?= $data['SDT']?>" class="form-control form-control-lg edit" placeholder=""/>
                    </fieldset>
                    <fieldset class="container-infor__item">
                        <label>Email </label>
                        <span class="required">*</span>
                        <input type="email" name ="email" value="<?= $data['email']?>" class="form-control form-control-lg edit" placeholder=""/>
                    </fieldset>
                    <fieldset class="container-infor__item">
                        <label>Địa chỉ </label>
                        <span class="required">*</span>
                        <input type="text" name = "diaChi" value="<?= $data['diaChi']?>" class="form-control form-control-lg edit" placeholder=""/>
                    </fieldset>
                    <fieldset class="container-infor__item">
                        <label>Hình ảnh cá nhân </label>
                        <span class="required">*</span>
                        <input type="file" name = "hinhAnh" class="form-control form-control-lg edit" placeholder=""/>
                    </fieldset>
                    <div class="container-infor__item">
                        <input class="btn-edit" type="submit" value="Cập Nhật" name="submit">
                    </div>
            </form>
                <!-- Đổi mật khẩu -->
                
                <div class="div"></div>
                <?php if (isset($_COOKIE['doimk'])) { ?>
                            <div class="alert alert-success">
                                <strong>Thông báo</strong> <?= $_COOKIE['doimk'] ?>
                            </div>
                            <?php }?>
                <form action="?act=taikhoan&xuli=updateinfo" class="container-inforChange container-pass" method="POST">
                            <fieldset class="container-infor__item">
                            <label>Mật khẩu củ</label>
                            
                            <input type="password" name="MatKhau" class="form-control form-control-lg edit" placeholder="Password" required/>
                        </fieldset>
                        <fieldset class="container-infor__item">
                            <label>Mật khẩu mới</label>
                            
                            <input type="password" name="MatKhauMoi" class="form-control form-control-lg edit" placeholder="Password"/>
                        </fieldset>
                        <fieldset class="container-infor__item">
                            <label>Nhập lại mật khẩu</label>
                            
                            <input type="password" name="MatKhauXN" class="form-control form-control-lg edit" placeholder="Password"/>
                        </fieldset>
                        <div class="container-infor__item">
                                <input class="btn-edit" type="submit" value="Cập Nhật">
                        </div>
                </form>
                
            
            <?php } 
            else {
                echo "khong lay dc ";
            }
            ?>
        </div>
        
    </div>
</section>
    <script>
        document.ready(function(){
     $('#nameLogin input[type="text"]').on("keyup input", function(){
        alert("abcjakd");
        console.log("ngu ngo");
    })
})
    </script>
