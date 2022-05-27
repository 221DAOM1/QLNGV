<?php
    $act  = isset($_GET['act']) ? $_GET['act'] :"home";
    switch ($act){
        case "home":
            require_once("home/home.php");
            break;
        case "taikhoan":
            $act = isset($_GET['xuli']) ? $_GET['xuli'] : "login";
            if (isset($_SESSION['isLogin']) && $_SESSION['isLogin'] == true) {
                switch ($act) {
                    case 'login':
                        require_once("login/login.php");
                        break;
                    case 'account':
                        require_once("login/infoedit.php");
                        break;
                    default:
                        require_once("login/login.php");
                        break;
                }
            } else {
                if ((isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) || (isset($_SESSION['isLogin_Nhanvien']) && $_SESSION['isLogin_Nhanvien'] == true) || (isset($_SESSION['isLogin_Khachhang']) && $_SESSION['isLogin_Khachhang'] == true) || (isset($_SESSION['isLogin_Giupviec']) && $_SESSION['isLogin_Giupviec'] == true)) {
                    switch ($act) {
                        case 'login':
                            require_once("login.php");
                            break;
                        case 'account':
                            require_once("login/infoedit.php");
                            break;
                        default:
                            require_once("login/login.php");
                            break;
                    }
                } else {
                    switch ($act) {
                        case 'login':
                            require_once("login/login.php");
                            break;
                        case 'dangky':
                            require_once("login/register.php");
                            break;
                        case 'dangkygv':
                            require_once("helpregister/helpregister.php");
                            break;
                        default:
                            require_once("login/login.php");
                            break;
                    }
                }
                break;
            }
            break;
        case "work":
            switch ($act) {
                case 'add':
                  require_once('recruiter/recruiter.php');
                  break;
                default:
                  require_once('recruiter/recruiter.php');
                  break;
                }
            break;
        case "help":
            switch ($act) {
                case 'account':
                    require_once("help/profile.php");
                    break;
                default:
                    require_once("help/profile.php");
                break;
            }
            break;
        case "detailhelp":
            require_once("detailhelp/detailhelp.php");
            break;
        default:
        require_once("error-404.php");
        break;
    }