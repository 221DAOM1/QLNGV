<section id="main">
    <div class="container">
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
                        <span>Đăng nhập tài khoản</span>
                    </strong>
                </div>
            </div>
        </div>
        <div class="page-content-account-help">
            <div class="d-group">
                <div class="left-col-help">
                    <div class="d-group__login">
                        <h1>Đăng nhập tài khoản</h1>
                        <?php if (isset($_COOKIE['msg1'])) { ?>
                        <div class="alert alert-success">
                            <strong>Thông báo</strong> <?= $_COOKIE['msg1'] ?>
                        </div>
                        <?php } ?>
                        <form action="?act=taikhoan&xuli=dangnhap" method="post" id="form1">
                            <fieldset class="form-group">
                                <label>Tài khoản</label>
                                <span class="required">*</span>
                                <input type="text" name="taiKhoan" class="form-control form-control-lg" placeholder="Tài khoản"/>
                            </fieldset>
                            <fieldset class="form-group">
                                <label>Mật khẩu</label>
                                <span class="required">*</span>
                                <input type="password" name="matKhau" class="form-control form-control-lg" placeholder="Password"/>
                            </fieldset>
                            
                            <button class="btn-login" name="submit" type="submit" form="form1" >Đăng nhập</button>
                        </form> 
                    </div>      
                    <div class="social-login">
                        <p class="social-login-center">
                            <span>Hoặc đăng nhập bằng</span>
                        </p>
                        <div class="social-login-account">
                            <a class="social-login-fb" href="#">
                                <i class="fab fa-facebook"></i>
                                <label>&nbsp;Facebook</label>
                            </a> 
                            <a href="#" class="social-login-gg">
                                <i class="fab fa-google-plus"></i>
                                <label>&nbsp;Google</label>
                            </a> 
                        </div> 
                        <div class="title-forgetpass">
                            <p>Bạn quên mật khẩu bấm <a href="#">
                                Vào đây
                            </a></p>
                        </div>   
                    </div>
                </div>
                <div class="right-col-help">
                    <div class="d-group__login">
                        <h1>Đăng ký tài khoản giúp việc</h1>
                        <?php if (isset($_COOKIE['msg'])) { ?>
                            <div class="alert alert-success">
                                <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
                            </div>
                        <?php } ?>
                        <form action="?act=taikhoan&xuli=dangky_action_help" method="post" id="form2">
                            <fieldset class="form-group">
                                <label>Họ tên</label>
                                <span class="required">*</span>
                                <input type="text" name="hoTen" class="form-control form-control-lg" placeholder="Họ Tên"/>
                            </fieldset>
                            <fieldset class="form-group">
                                <label>CMND</label>
                                <span class="required">*</span>
                                <input type="text" name="CMND" class="form-control form-control-lg" placeholder="CMND"/>
                            </fieldset>
                            <fieldset class="form-group">
                                <label>Số điện thoại</label>
                                <span class="required">*</span>
                                <input type="text" name="SDT" class="form-control form-control-lg" placeholder="Số điện thoại"/>
                            </fieldset>
                            <fieldset class="form-group">
                                <label>Email</label>
                                <span class="required">*</span>
                                <input type="email" name="email" class="form-control form-control-lg" placeholder="Email"/>
                            </fieldset>
                            <fieldset class="form-group">
                                <label>Tài khoản</label>
                                <span class="required">*</span>
                                <input type="text" name="taiKhoan" class="form-control form-control-lg" placeholder="Tài khoản"/>
                            </fieldset>
                            <fieldset class="form-group">
                                <label>Mật khẩu</label>
                                <span class="required">*</span>
                                <input type="password" name="matKhau" class="form-control form-control-lg" placeholder="Password"/>
                            </fieldset>
                            <fieldset class="form-group">
                                <label>Nhập lại mật khẩu</label>
                                <span class="required">*</span>
                                <input type="password" name="check_password" class="form-control form-control-lg" placeholder="Password"/>
                            </fieldset>
                        <button class="btn-login" type="submit" form="form2">Đăng ký</button>
                        </form>
                    </div>      
                    <div class="social-login">
                        <p class="social-login-center">
                            <span>Hoặc đăng nhập bằng</span>
                        </p>
                        <div class="social-login-account">
                            <a class="social-login-fb" href="#">
                                <i class="fab fa-facebook"></i>
                                <label>&nbsp;Facebook</label>
                            </a> 
                            <a href="#" class="social-login-gg">
                                <i class="fab fa-google-plus"></i>
                                <label>&nbsp;Google</label>
                            </a> 
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>