<?php
session_start();
$mod = isset($_GET['act']) ? $_GET['act'] : "home";
switch ($mod) {
    case 'home':
        require_once('Controllers/HomeController.php');
        $objCate = new homeController();
        $objCate->list();
        break;
    case 'taikhoan':
        $act = isset($_GET['xuli']) ? $_GET['xuli'] : "taikhoan";
        require_once('Controllers/LoginController.php');
        $controller_obj = new LoginController();
        if ((isset($_SESSION['isLogin']) && $_SESSION['isLogin'] == true)) {
            switch ($act) {
                case 'dangxuat':
                    $controller_obj->dangxuat();
                    break;
                case 'account':
                    $controller_obj->account();
                    break;
                case 'updateinfo':
                    $controller_obj->updateinfo();
                    break;
                default:
                    header('location: ?act=error');
                    break;
            }
            break;
        } else {
            if ((isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) || (isset($_SESSION['isLogin_Nhanvien']) && $_SESSION['isLogin_Nhanvien'] == true) || (isset($_SESSION['isLogin_GiaoHang']) && $_SESSION['isLogin_GiaoHang'] == true) ) {
                switch ($act) {
                    case 'dangxuat':
                        $controller_obj->dangxuat();
                        break;
                    case 'account':
                        $controller_obj->account();
                        break;
                    case 'updateinfo':
                        $controller_obj->updateinfo();
                        break;
                    default:
                        header('location: ?act=error');
                        break;
                }
                break;
            } else {
                switch ($act) {
                    case 'login':
                        $controller_obj->login();
                        break;
                    case 'dangnhap':
                        $controller_obj->login_action();
                        break;
                    case 'dangky':
                        $controller_obj->dangky();
                        break;
                    case 'dangky_action':
                        $controller_obj->dangky_action();
                        break;
                    case 'dangky_action_help':
                            $controller_obj->dangky_action_help();
                            break;
                    default:
                         $controller_obj->login();
                    break; 
                }
                break;
            }
            break;
        }
        break;
    case 'work': 
        $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
        require_once('./Controllers/RecruiterController.php');
        $controller_obj = new recruiterController();
        switch ($act) {
            case 'list':
                $controller_obj->list();
            break;
            case 'add':
                $controller_obj->add();
            break;
            case 'store':
                $controller_obj->store();
            break;
            case 'delete':
                $controller_obj->delete();
            break;
            case 'edit':
                $controller_obj->callUpdate();
                break;
            case 'update':
                $controller_obj->update(); 
                break;
            default:
                $controller_obj->list();
                break;
        }
        break;
    case 'help':
        require_once('./Controllers/HelpController.php');
        $controller_obj = new helpController();
        $controller_obj->list();
        break;
    default : require_once('home/home.php');
}
?>