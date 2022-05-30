<script src="https://www.gstatic.com/firebasejs/8.4.2/firebase-app.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.16.1/firebase-messaging.js"></script>
<script>
    // TODO: Replace firebaseConfig you get from Firebase Console
    var firebaseConfig = {
        apiKey: "AIzaSyDl06JoZavgolR96a7o7vKYpgrg16iBUGg",
        authDomain: "dapm-212f9.firebaseapp.com",
        projectId: "dapm-212f9",
        storageBucket: "dapm-212f9.appspot.com",
        messagingSenderId: "225147019126",
        appId: "1:225147019126:web:9dd2e59139797eb522e457"
    };
    firebase.initializeApp(firebaseConfig);

    const messaging = firebase.messaging();

    messaging.requestPermission().then(() => {
        if (tokenToSever()) {
            console.log("token is saved")
        } else {
            getToken();
        }
    })

    function getToken() {
        messaging.getToken(messaging, {
            vapidKey: 'BP5GVQkxyTDhtPw24zr3jH2p-jUlM5kKukbVtNNTWjZ8xyT529Eluj7-tlERzdaeCpJbR4lPcmaFQWU1ly1P7Ck'
        }).then((currentToken) => {
            if (currentToken) {
                console.log(currentToken)
            } else {
                // Show permission request UI
                console.log('No registration token available. Request permission to generate one.');
            }
        }).catch((err) => {
            console.log('An error occurred while retrieving token. ', err);
        });
    }

    function tokenToSever() {
        return false;
    }
</script>

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
            if ((isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) || (isset($_SESSION['isLogin_Nhanvien']) && $_SESSION['isLogin_Nhanvien'] == true) || (isset($_SESSION['isLogin_Khachhang']) && $_SESSION['isLogin_Khachhang'] == true) || (isset($_SESSION['isLogin_Giupviec']) && $_SESSION['isLogin_Giupviec'] == true)) {
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
        $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
        require_once('./Controllers/HelpController.php');
        $controller_obj = new helpController();
        switch ($act) {
            case 'account':
                $controller_obj->account();
                break;
            case 'updateinfo':
                $controller_obj->updateinfo();
                break;
            default:
                $controller_obj->account();
                break;
        }
        break;
    case "detailhelp":
        require_once('./Controllers/DetailHelpController.php');
        $objCate = new DetailController();
        $objCate->list();
        break;
    default:
        require_once('home/home.php');
}
