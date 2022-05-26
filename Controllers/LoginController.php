<?php
require_once("Models/login.php");
class LoginController
{
   
    var $login_model;
    public function __construct()
    {
        $this->login_model = new Login();
    }
  
    function list()
        {   
            if(isset($_GET['iduser']))
            {   
               
                $MaND = $_GET['iduser'];
                $data = $this->login_model->infor($MaND);
               
            }
            else {
                echo "Lỗi  từ controler";
            }
            require_once('./Views/index.php');     
        }
    function login()
    {
        require_once('Views/index.php');
    }
    function login_action()
    {

        $taikhoan = $_POST['taiKhoan'];
        $matkhau = md5($_POST['matKhau']);
        if (strpos($taikhoan, "'") != false) {
            $taikhoan = str_replace("'", "\'", $taikhoan);
        }
        $data = array(
            'taiKhoan' => $taikhoan,
            'matKhau' => $matkhau,
        );
        $this->login_model->login_action($data);
    }

    function dangky(){
        require_once("Views/index.php");
    }
    
    function dangky_action()
    {
        $check1 = 0;
        $check2 = 0;
        $data_check = $this->login_model->check_account();
        foreach ($data_check as $value) {
            if ($value['email'] == $_POST['email'] || $value['taiKhoan'] == $_POST['taiKhoan']) {
                $check1 = 1;
            }
        }

        if ($_POST['matKhau'] != $_POST['check_password']) {
            $check2 = 1;
        }

        $data = array(
            'maQuyen' =>  '2',
            'taiKhoan' => $_POST['taiKhoan'],
            'matKhau' => md5($_POST['matKhau']),
            'hoTen' => $_POST['hoTen'],
            'gioiTinh' => "",
            'ngaySinh' => "",
            'CMND' => $_POST['CMND'],
            'SDT' => $_POST['SDT'],
            'email' => $_POST['email'],
            'diaChi'  => "",
            'hinhAnh' => "",
            'TrangThai'  =>  '1',
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }    
        $this->login_model->dangky_action($data, $check1, $check2);
    }

    function dangky_action_help()
    {
        $check1 = 0;
        $check2 = 0;
        $data_check = $this->login_model->check_account();
        foreach ($data_check as $value) {
            if ($value['email'] == $_POST['email'] || $value['taiKhoan'] == $_POST['taiKhoan']) {
                $check1 = 1;
            }
        }

        if ($_POST['matKhau'] != $_POST['check_password']) {
            $check2 = 1;
        }

        $data = array(
            'maQuyen' =>  '3',
            'taiKhoan' => $_POST['taiKhoan'],
            'matKhau' => md5($_POST['matKhau']),
            'hoTen' => $_POST['hoTen'],
            'gioiTinh' => "",
            'ngaySinh' => "",
            'CMND' => $_POST['CMND'],
            'SDT' => $_POST['SDT'],
            'email' => $_POST['email'],
            'diaChi'  => "",
            'hinhAnh' => "",
            'TrangThai'  =>  '1',
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }    
        $this->login_model->dangky_action_help($data, $check1, $check2);
    }

    function dangxuat()
    {
        $this->login_model->logout();
    }
    function account()
    {   
        $data = $this->login_model->account();
        require_once('Views/index.php');
    }

    function updateinfo(){
       
        if(isset($_POST['hoTen']))
        {  
            $target_dir = "./Publics/images/";
            $hinhAnh = "";
            $target_file = $target_dir . basename($_FILES["hinhAnh"]["name"]);
            $status_upload = move_uploaded_file($_FILES["hinhAnh"]["tmp_name"], $target_file);
            if ($status_upload) { 
                $hinhAnh = basename($_FILES['hinhAnh']['name']);
            }
            setcookie( "doimk", "", time()- 60, "/","", 0);
            $data = array(
                'taiKhoan' => $_POST['taiKhoan'],
                'hoTen' => $_POST['hoTen'],
                'gioiTinh' => $_POST['gioiTinh'],
                'ngaySinh' => $_POST['ngaySinh'],
                'CMND' => $_POST['CMND'],
                'SDT' => $_POST['SDT'],
                'email' => $_POST['email'],
                'diaChi'  => $_POST['diaChi'],
                'hinhAnh' => $hinhAnh,
            );
            foreach ($data as $key => $value) {
                if (strpos($value, "'") != false) {
                    $value = str_replace("'", "\'", $value);
                    $data[$key] = $value;
                }
            }
            $passOrinfo = "info";
            $this->login_model->updateInfor($data,$passOrinfo);
          
        }
        else{
            $passOrinfo = "pass";
            if ($_POST['MatKhauMoi'] == $_POST['MatKhauXN']) {
                if (md5($_POST['matKhau']) == $_SESSION['login']['matKhau']) {
                    $data = array(
                        'matKhau' => md5($_POST['MatKhauMoi']),
                    );
                    $this->login_model->updateInfor($data,$passOrinfo);
                } else {
                    setcookie('doimk', 'Mật khẩu không đúng', time() + 2);
                }
            } else {
                setcookie('doimk', 'Mật khẩu mới không trùng nhau', time() + 2);
            }
        }
        
        header('location: ?act=taikhoan&xuli=account#doitk');
    }
}
?>
