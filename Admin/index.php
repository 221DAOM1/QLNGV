<script src="https://www.gstatic.com/firebasejs/8.4.2/firebase-app.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.16.1/firebase-messaging.js"></script>
<script>
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

    messaging.onMessage(function(payload) {
        // console.log("Message received. ", payload);
        notificationTitle = payload.data.title;
        notificationOptions = {
            body: payload.data.body,
            icon: payload.data.icon,
            image: payload.data.image
        };
        var notification = new Notification(notificationTitle, notificationOptions);
    });
</script>

<?php
session_start();
$mod = isset($_GET['mod']) ? $_GET['mod'] : "login";
$act = isset($_GET['act']) ? $_GET['act'] : "admin";
switch ($mod) {
    case 'nguoidung':
        require_once('Controllers/UserController.php');
        $controller_obj = new UserController();
        switch ($act) {
            case 'list':
                $controller_obj->list();
                break;
            case 'detail':
                $controller_obj->detail();
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
                $controller_obj->edit();
                break;
            case 'update':
                $controller_obj->update();
                break;
            default:
                $controller_obj->list();
                break;
        }
        break;
    case 'congviec':
        require_once('Controllers/WorkController.php');
        $controller_obj = new WorkController();
        switch ($act) {
            case 'list':
                $controller_obj->list();
                break;
            case 'chitiet':
                $controller_obj->chitiet();
                break;
            case 'delete':
                $controller_obj->delete();
                break;
            case 'xetduyet':
                $controller_obj->xetduyet();
                break;
            default:
                $controller_obj->list();
                break;
        }
        break;
    case 'candidate':
        require_once('Controllers/CandidateController.php');
        $controller_obj = new CandidateController();
        switch ($act) {
            case 'list':
                $controller_obj->list();
                break;
            case 'chitiet':
                $controller_obj->chitiet();
                break;
            case 'chitiethelp':
                $controller_obj->chitiethelp();
                break;
            case 'xetduyet':
                $controller_obj->xetduyet();
                break;
            default:
                $controller_obj->list();
                break;
        }
        break;
    case 'category':
        require_once('Controllers/CategoryController.php');
        $controller_obj = new CategoryController();
        switch ($act) {
            case 'list':
                $controller_obj->list();
                break;
            case 'detail':
                $controller_obj->detail();
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
                $controller_obj->edit();
                break;
            case 'update':
                $controller_obj->update();
                break;
            default:
                $controller_obj->list();
                break;
        }
        break;
    default:
        header('location: ?mod=nguoidung');
}
?>