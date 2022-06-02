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
        case "ratehelp":
            $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
            switch ($act) {
                case 'list':
                    require_once('rate/rate.php');
                    break;
                    case 'chitiet':
                    require_once('rate/detail.php');
                    break;
                    case 'chitiethelp':
                    require_once('rate/detailhelp.php');
                    break;
                    default:
                    require_once('rate/rate.php');
                    break;
            }
            break;
        case "confirmhelp":
            $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
            switch ($act) {
                case 'list':
                    require_once('confirmhelp/confirm.php');
                    break;
                case 'chitietuv':
                    require_once('confirmhelp/detail.php');
                    break;
                case 'chitiethelp':
                    require_once('confirmhelp/detailhelp.php');
                    break;
                default:
                require_once('confirmhelp/confirm.php');
                break;
            }
            break;
        case "detailwork":
            $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
            switch ($act) {
                case 'list':
                    require_once('detailwork/work.php');
                    break;
                default:
                    require_once('detailwork/work.php');
                    break;
                }
            break;
        default:
        require_once("error-404.php");
        break;
    }