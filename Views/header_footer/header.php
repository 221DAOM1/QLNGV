<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col col-md-4 col-ms-6 col-xs-12 col-logo__header">
                <a href="?act=home" class="header__logo">
                    <img style="width: 187px;height: 53px;" src="./Publics/images/logogv.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-7 col" style="margin-top: 8px;">
                <!-- <p style="color: var(--cl-primary);"><i class="fa-solid fa-location-dot"></i> Trường SPKT - 48 Cao Thắng - Phường Thanh Bình - Hải Châu, Đà Nẵng</p> -->
                <div class="search-box">
                    <div class="header__search">
                        <form action="?act=search" class="search-box-action" method="GET">
                            <input type="hidden" name="act" value="search">
                            <span class="input-group">
                                <button class="search-submit" type="submit" name="" style="background-color: transparent;">
                                    <img src="https://img.icons8.com/material-outlined/24/000000/search--v1.png"/>
                                </button>
                            </span>
                            <input type="text" placeholder="Tìm kiếm công việc..." class="search-text-product" name="keyword" autocomplete="off">
                        </form>
                        <input type="hidden" name="action" value="tim-kiem">
                        <div class="result__box">
                            <div class="search-results">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col" style="margin-top: 8px;">
                <!-- <p style="color: var(--cl-primary);"><i class="fa-solid fa-phone"></i> 0961640909 - 0935778714</p> -->
                
                <div class="group__contact">
                        <div class="contact__phone">
                            <p>Hỗ trợ online</p>
                            <a href="">0961640909</a>
                        </div>
                        <div style="margin-left: 10px;">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                    </div>
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
            if(isset($_SESSION['isLogin_Giupviec'])|| isset($_SESSION['isLogin_Admin']) || isset($_SESSION['isLogin_Nhanvien'])){
        ?>
        <li class="nav-list__item">
            <a href="">
                Công việc tuyển dụng
            </a>
            <i class="fas fa-chevron-down"></i>
            <ul class="nav-item__down">
                <li class="nav-item__down-item">
                    <a href="?act=detailwork&xuli=listcategory&id=1">Chăm sóc trẻ em</a>
                    <i class="fas fa-chevron-right"></i>
                </li>
                <li class="nav-item__down-item"><a href="?act=detailwork&xuli=listcategory&id=2">Dọn dẹp nhà</a><i class="fas fa-chevron-right"></i></li>
                <li class="nav-item__down-item"><a href="?act=detailwork&xuli=listcategory&id=3">Chăm sóc người già</a><i class="fas fa-chevron-right"></i></li>
                <li class="nav-item__down-item"><a href="?act=detailwork&xuli=listcategory&id=4">Giúp việc theo giờ hành chính</a><i class="fas fa-chevron-right"></i></li>
                <li class="nav-item__down-item"><a href="?act=detailwork&xuli=listcategory&id=5">Giúp việc tết nguyên đám</a><i class="fas fa-chevron-right"></i></li>
            </ul>
        </li>
        <?php } ?>
        <?php
            if(isset($_SESSION['isLogin_Khachhang'])|| isset($_SESSION['isLogin_Admin']) || isset($_SESSION['isLogin_Nhanvien'])){
        ?>
        <li class="nav-list__item">
            <a href="">
                Người tuyển dụng
            </a>
            <i class="fas fa-chevron-down"></i>
            <ul class="nav-item__down" style="width: 155px;">
                <li class="nav-item__down-item">
                    <a href="?act=detailhelp&xuli=listcategory&id=1">Hải châu</a><i class="fas fa-chevron-right"></i>
                </li>
                <li class="nav-item__down-item">
                    <a href="?act=detailhelp&xuli=listcategory&id=2">Cẩm lệ</a><i class="fas fa-chevron-right"></i>
                </li>
                <li class="nav-item__down-item"><a href="?act=detailhelp&xuli=listcategory&id=3">Thanh Khê</a><i class="fas fa-chevron-right"></i></li>
                <li class="nav-item__down-item"><a href="?act=detailhelp&xuli=listcategory&id=4">Liên Chiểu</a><i class="fas fa-chevron-right"></i></li>
                <li class="nav-item__down-item"><a href="?act=detailhelp&xuli=listcategory&id=5">Ngũ Hành Sơn</a><i class="fas fa-chevron-right"></i></li>
                <li class="nav-item__down-item"><a href="?act=detailhelp&xuli=listcategory&id=3">Sơn Trà</a><i class="fas fa-chevron-right"></i></li>
                <li class="nav-item__down-item"><a href="?act=detailhelp&xuli=listcategory&id=4">Hòa Vang</a><i class="fas fa-chevron-right"></i></li>
                <li class="nav-item__down-item"><a href="?act=detailhelp&xuli=listcategory&id=5">Hoàng Sa</a><i class="fas fa-chevron-right"></i></li>
            </ul>
        </li>
        <?php } ?>
        <?php
            if(isset($_SESSION['isLogin_Khachhang'])|| isset($_SESSION['isLogin_Admin']) || isset($_SESSION['isLogin_Nhanvien'])){
        ?>
        <li class="nav-list__item">
            <a href="">
                Cho người tuyển dụng
            </a>
            <i class="fas fa-chevron-down"></i>
            <ul class="nav-item__down" style="width: 200px;">
                <li class="nav-item__down-item">
                    <a href="?act=work&xuli=add">Đăng bài tuyển dụng</a><i class="fas fa-chevron-right"></i>
                </li>
                <li class="nav-item__down-item">
                    <a href="?act=confirmhelp&xuli=list">Ứng viên giới thiệu</a><i class="fas fa-chevron-right"></i>
                </li>
                <li class="nav-item__down-item"><a href="?act=ratehelp&xuli=list">Đánh giá giúp việc</a><i class="fas fa-chevron-right"></i></li>
            </ul>
        </li>
        <?php } ?>
        <?php
            if(isset($_SESSION['isLogin_Giupviec'])){
        ?>
        <li class="nav-list__item">
        <a class="nav-list__item-link" href="">Cho người giúp việc</a>
        <i class="fas fa-chevron-down"></i>
        <ul class="nav-item__down" style="width: 200px;">
            <li class="nav-item__down-item">
                <a href="?act=help&xuli=account">Cập nhật hồ sơ</a><i class="fas fa-chevron-right"></i>
                
            </li>
            <li class="nav-item__down-item">
                <a href="?act=confirmhelp&xuli=listregister">Công việc đăng ký</a><i class="fas fa-chevron-right"></i>
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

