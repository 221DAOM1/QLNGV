
    <nav class="sidebar vertical-scroll ps-container ps-theme-default ps-active-y">
        <div class="logo d-flex justify-content-between">
            <a href="#">
                <img src="./Publics/images/logo.png" alt=""> 
            </a>
        </div>
        <ul id="sidebar_menu" class="metismenu">          
            <li>
                <a class="has-arrow" href="../index.php" aria-expanded="true">
                    <div class="icon_menu">
                        <i class="fas fa-home"></i>
                        <span>Trang chủ</span>
                    </div>
                </a>
            </li>
            <?php
                if(isset($_SESSION['isLogin_Admin'])){ ?>
                <li>
                    <a class="has-arrow" href="?mod=nguoidung" aria-expanded="true">
                        <div class="icon_menu">
                            <i class="fas fa-user" aria-expanded="true"></i>
                            <span>Quản lý tài khoản</span>
                        </div>
                    </a>
                </li>
            <?php } ?>
            <?php
                if(isset($_SESSION['isLogin_Admin']) || isset($_SESSION['isLogin_Nhanvien'])){ ?>
                <li>
                    <a class="has-arrow" href="?mod=category" aria-expanded="true">
                        <div class="icon_menu">
                            <i class="fa-solid fa-align-justify"></i>
                            <span>Quản lý danh mục</span>
                        </div>
                    </a>
                </li>
            <?php } ?>
            <?php
                if(isset($_SESSION['isLogin_Admin']) || isset($_SESSION['isLogin_Nhanvien'])){ ?>
                <li>
                    <a class="has-arrow" href="?mod=congviec" aria-expanded="true">
                        <div class="icon_menu">
                            <i class="fa-solid fa-briefcase"></i>
                            <span>Quản lý bài đăng</span>
                        </div>
                    </a>
                </li>
            <?php } ?>
            <?php
                if(isset($_SESSION['isLogin_Admin'])){ ?>
                <li>
                    <a class="has-arrow" href="?mod=banner" aria-expanded="true">
                        <div class="icon_menu">
                            <i class="far fa-image"></i>
                            <span>Quản lý banner</span>
                        </div>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </nav>