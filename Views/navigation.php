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
                        require_once("login.php");
                        break;
                    case 'account':
                        require_once("infoedit.php");
                        break;
                    default:
                        require_once("login.php");
                        break;
                }
            } else {
                if ((isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) || (isset($_SESSION['isLogin_Nhanvien']) && $_SESSION['isLogin_Nhanvien'] == true) || (isset($_SESSION['isLogin_GiupViec']) && $_SESSION['isLogin_GiupViec'] == true)) {
                    switch ($act) {
                        case 'login':
                            require_once("login.php");
                            break;
                        case 'account':
                            require_once("infoedit.php");
                            break;
                        default:
                            require_once("login.php");
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
        default:
        require_once("error-404.php");
        break;
    }