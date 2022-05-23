<?php
require_once("model.php");
class Login extends Model
{
    var $conn;
    function __construct()
    {
        $conn_obj = new connection();
        $this->conn = $conn_obj->conn;
    }
    public function infor($maND){
        $query = "SELECT *from taikhoan where maTK = $maTK";
        require("result.php");
        return $data;
    }
   
    function login_action($data)
    {
        $query = "SELECT * from taikhoan  WHERE taiKhoan = '" . $data['taiKhoan'] . "' AND matKhau = '" . $data['matKhau'] . "' AND trangthai = 1";
        echo $query;
        $login = $this->conn->query($query)->fetch_assoc();
        if ($login !== NULL) {
            if($login['maQuyen'] == 1){
                $_SESSION['isLogin_Admin'] = true;
                $_SESSION['login'] = $login;    
            }else{  
                if($login['maQuyen'] == 4){
                $_SESSION['isLogin_Nhanvien'] = true;
                $_SESSION['login'] = $login;
                }
                else{
                    if($login['maQuyen'] == 3){
                    $_SESSION['isLogin_GiupViec'] = true;
                    $_SESSION['login'] = $login;
                    }
                    else{
                        $_SESSION['isLogin'] = true;
                        $_SESSION['login'] = $login;
                    }
                }
            } 
            header('Location: ?mod=abcS');
        } else {
            setcookie('msg1', 'Đăng nhập không thành công', time() + 5);
            header('Location: ?act=taikhoan#dangnhap');
        }
        
    }
    function logout()
    {
        if(isset($_SESSION['isLogin_Admin'])){
            unset($_SESSION['isLogin_Admin']);
            unset($_SESSION['login']);
        }
        if(isset($_SESSION['isLogin_Nhanvien'])){
            unset($_SESSION['isLogin_Nhanvien']);
            unset($_SESSION['login']);
        }
        if(isset($_SESSION['isLogin_GiupViec'])){
            unset($_SESSION['isLogin_GiupViec']);
            unset($_SESSION['login']);
        }
        if(isset($_SESSION['isLogin'])){
            unset($_SESSION['isLogin']);
            unset($_SESSION['login']);
        }
        header('location: ?act=home');
    }
    function check_account()
    {
        $query =  "SELECT * from taikhoan";

        require("result.php");

        return $data;
    }
    
    function dangky_action($data, $check1, $check2)
    {
        if ($check1 == 0) {
            if ($check2 == 0) {
                $f = "";
                $v = "";
                foreach ($data as $key => $value) {
                    $f .= $key . ",";
                    $v .= "'" . $value . "',";
                }
                $f = trim($f, ",");
                $v = trim($v, ",");
                $query = "INSERT INTO taikhoan($f) VALUES ($v);";

                $status = $this->conn->query($query);
                if ($status == true) {
                    setcookie('msg', 'Đăng ký thành công', time() + 2);
                } else {
                    setcookie('msg', 'Đăng ký không thành công', time() + 2);
                }
            } else {
                setcookie('msg', 'Mật khẩu không trùng nhau', time() + 2);
            }
        } else {
            setcookie('msg', 'Tên tài khoản hoặc Email  đã tồn tại', time() + 2);
        }
        header('Location:?act=taikhoan#dangky_action');
    }
    function account()
    {
        $id = $_SESSION['login']['maTK'];
        return $this->conn->query("SELECT * from taikhoan where maTK = $id")->fetch_assoc();
        
    }
    function updateInfor($data,$passOrinfo){
        $v = "";
        foreach ($data as $key => $value) {
            $v .= $key . "='" . $value . "',";
        }
        $v = trim($v, ",");
       
        $query = "UPDATE taikhoan SET $v  WHERE taiKhoan = ". $_SESSION['login']['maTK'];
        echo $query;
        $result = $this->conn->query($query);
        
        if($passOrinfo=="pass")
        {
            if ($result == true) {
                setcookie('doimk', 'Cập nhật mật khẩu thành công', time() + 2);
                 header('Location: ?act=taikhoan&xuli=account#doitk');
             }else {
                 setcookie('doimk', 'Mật khẩu xác nhận không đúng', time() + 2);
                 header('Location: ?act=taikhoan&xuli=account#doitk');
             }
        }
    }
    
    function error()
    {
        header('location: ?act=errors');
    }
}
