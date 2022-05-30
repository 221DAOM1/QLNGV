<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col">
                <p style="color: var(--cl-primary);"><i class="fa-solid fa-location-dot"></i> Trường SPKT - 48 Cao Thắng - Phường Thanh Bình - Hải Châu, Đà Nẵng</p>
            </div>
            <div class="col-lg-4 col">
                <p style="color: var(--cl-primary);"><i class="fa-solid fa-phone"></i> 0961640909 - 0935778714</p>
            </div>
        </div>
    </div>
</header>
<nav id="nav">
    <ul class="nav-list">
        <a href="" class="header__logo">
            <!-- <img src="./Publics/images/logo1.png" alt=""> -->
        </a>
        <li class="nav-list__item"><a href="?act=home" class="nav-list__item-link">Trang chủ</a></li>
        <li class="nav-list__item"><a class="nav-list__item-link" href="">Giới thiệu</a></li>
        <?php
            if(isset($_SESSION['isLogin_Khachhang'])|| isset($_SESSION['isLogin_Admin']) || isset($_SESSION['isLogin_Nhanvien'])){
        ?>
        <li class="nav-list__item">
            <a href="">
                Cho người tuyển dụng
            </a>
            <i class="fas fa-chevron-down"></i>
            <ul class="nav-item__down">
                <li class="nav-item__down-item">
                    <a href="?act=work&xuli=add">Đăng bài tuyển dụng</a>
                </li>
            </ul>
        </li>
        <?php } ?>
        <?php
            if(isset($_SESSION['isLogin_Giupviec'])){
        ?>
        <li class="nav-list__item">
        <a class="nav-list__item-link" href="">Cho người giúp việc</a>
        <i class="fas fa-chevron-down"></i>
        <ul class="nav-item__down">
            <li class="nav-item__down-item">
                <a href="?act=help&xuli=account">Cập nhật hồ sơ</a>
            </li>
        </ul>
        <?php } ?>
        </li>
        <li class="nav-list__item"><a class="nav-list__item-link" href="">Liên hệ</a></li>
        <li class="nav-list__item"><a class="nav-list__item-link" href="">Tin tức</a></li>
        <li class="nav-list__item">
            <div class="user">
                <a href="">
                    <i class="fas fa-user"></i>
                </a>
                <div class="group-login">
                    <ul class="group-login__list">
                        <?php
                        if(isset($_SESSION['login'])){
                        ?>
                            <li class="group-login__list-item"><b><?=$_SESSION['login']['hoTen']?></b></li>
                            <li class="group-login__list-item"><a href="?act=taikhoan&xuli=account">Tài khoản</a></li>
                            <?php
                            if(isset($_SESSION['isLogin_Admin']) || isset($_SESSION['isLogin_Nhanvien']) || isset($_SESSION['isLogin_Khachhang'])){ ?>
                            <li class="group-login__list-item"><a href="?act=ratehelp&xuli=list">Đánh giá</a></li>
                            <?php } ?>
                            <li class="group-login__list-item"><a href="?act=taikhoan&xuli=dangxuat">Đăng xuất</a></li>
                            <?php
                            if(isset($_SESSION['isLogin_Admin']) || isset($_SESSION['isLogin_Nhanvien'])){ ?>
                            <li class="group-login__list-item"><a href="admin/?mod=login">Trang quản lý</a></li>
                            <?php }}else{ ?>
                            <li class="group-login__list-item"><b>Khách hàng</b></li>
                            <li class="group-login__list-item">
                                <a href="?act=taikhoan&xuli=login">Đăng nhập</a>
                            </li>
                            <?php } ?>
                            
                    </ul>
                </div>
            </div>
        </li>
    </ul>
</nav>

