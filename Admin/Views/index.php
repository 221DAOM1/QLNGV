<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruity Fresh</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="./Publics/css/responsive.css">
    <link rel="stylesheet" href="./Publics/css/style.css">
    <link rel="stylesheet" href="./Publics/css/reset.css">
    <link rel="stylesheet" href="./Publics/css/admin.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./public/js/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Data table -->
    <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
</head>
<body>
    <?php require_once("menu/menu.php"); ?>
    <section class="main_content dashboard_part large_header_bg">
        <?php require_once("header_footer/header.php"); ?>
            <div class="container-fluid">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <?php
                                if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) {
                                $mod = isset($_GET['mod']) ? $_GET['mod'] : "login";
                                $act = isset($_GET['act']) ? $_GET['act'] : "admin"; 
                                switch ($mod) {
                                    case 'nguoidung':
                                        switch ($act) {
                                          case 'list':         
                                            require_once('user/list.php');
                                            break;
                                          case 'add':
                                            require_once('user/add.php');
                                            break;
                                          case 'detail':
                                            require_once('user/detail.php');
                                            break;
                                          case 'edit':
                                            require_once('user/edit.php');
                                            break;
                                          default:
                                            require_once('user/list.php');
                                            break;
                                        }
                                        break;
                                    case 'login':
                                        switch ($act) {
                                            case 'admin':
                                            require_once('Views/login/admin.php');
                                            break;
                                            default:
                                            require_once('Views/login/admin.php');
                                            break;
                                        }
                                    break;
                                }
                                }
                                else {
                                    if (isset($_SESSION['isLogin_Nhanvien']) && $_SESSION['isLogin_Nhanvien'] == true) {
                                        $mod = isset($_GET['mod']) ? $_GET['mod'] : "login";
                                        $act = isset($_GET['act']) ? $_GET['act'] : "admin";
                                        switch ($mod) {

                                        }
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</body>
</html>