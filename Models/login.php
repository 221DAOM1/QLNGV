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
    public function infor($maND)
    {
        $query = "SELECT *from taikhoan where maTK = $maTK";
        require("result.php");
        return $data;
    }

    function getIdHelpnew()
    {
        $query = "select maTK from taikhoan
        ORDER BY thoiGian DESC limit 1";
        $result = $this->conn->query($query);
        $row = mysqli_fetch_assoc($result);

        $id = $row['maTK'];

        return $id;
    }

    function login_action($data)
    {
        $query = "SELECT * from taikhoan  WHERE taiKhoan = '" . $data['taiKhoan'] . "' AND matKhau = '" . $data['matKhau'] . "' AND trangthai = 1";
        // echo $query;
        $login = $this->conn->query($query)->fetch_assoc();
        if ($login !== NULL) {
            if ($login['maQuyen'] == 1) {
                $_SESSION['isLogin_Admin'] = true;
                $_SESSION['login'] = $login;
                require_once("./Notification/addToken.php");
                // echo ($_SESSION['login']['maTK']);
                return;
            } else {
                if ($login['maQuyen'] == 4) {
                    $_SESSION['isLogin_Nhanvien'] = true;
                    $_SESSION['login'] = $login;
                    require_once("./Notification/addToken.php");
                    return;
                } else {
                    if ($login['maQuyen'] == 3) {
                        $_SESSION['isLogin_Giupviec'] = true;
                        $_SESSION['login'] = $login;
                        require_once("./Notification/addToken.php");
                        return;
                    } else {
                        if ($login['maQuyen'] == 2) {
                            $_SESSION['isLogin_Khachhang'] = true;
                            $_SESSION['login'] = $login;
                            require_once("./Notification/addToken.php");
                            return;
                        } else {
                            $_SESSION['isLogin'] = true;
                            $_SESSION['login'] = $login;
                        }
                    }
                }
            }
            header('Location: ?mod=abcS');
        } else {
            setcookie('msg1', '????ng nh???p kh??ng th??nh c??ng', time() + 5);
            header('Location: ?act=taikhoan&xuli=login');
        }
    }
    function logout()
    {
        require_once('./Models/token.php');
        $TokenModel = new TokenModel();
        $maTK = $_SESSION['login']['maTK'];

        if (isset($_SESSION['isLogin_Admin'])) {
            unset($_SESSION['isLogin_Admin']);
            unset($_SESSION['login']);
            $tokens = $TokenModel->deleteToken($maTK);
        }
        if (isset($_SESSION['isLogin_Nhanvien'])) {
            unset($_SESSION['isLogin_Nhanvien']);
            unset($_SESSION['login']);
            $tokens = $TokenModel->deleteToken($maTK);
        }
        if (isset($_SESSION['isLogin_Giupviec'])) {
            unset($_SESSION['isLogin_Giupviec']);
            unset($_SESSION['login']);
            $tokens = $TokenModel->deleteToken($maTK);
        }
        if (isset($_SESSION['isLogin_Khachhang'])) {
            unset($_SESSION['isLogin_Khachhang']);
            unset($_SESSION['login']);
            $tokens = $TokenModel->deleteToken($maTK);
        }
        if (isset($_SESSION['isLogin'])) {
            unset($_SESSION['isLogin']);
            unset($_SESSION['login']);
            $tokens = $TokenModel->deleteToken($maTK);
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
                    setcookie('msg', '????ng k?? th??nh c??ng', time() + 2);
                } else {
                    setcookie('msg', '????ng k?? kh??ng th??nh c??ng', time() + 2);
                }
            } else {
                setcookie('msg', 'M???t kh???u kh??ng tr??ng nhau', time() + 2);
            }
        } else {
            setcookie('msg', 'T??n t??i kho???n ho???c Email  ???? t???n t???i', time() + 2);
        }
        header('Location:?act=taikhoan&xuli=dangky');
    }

    function dangky_action_help($data, $check1, $check2)
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
                    setcookie('msg', '????ng k?? th??nh c??ng', time() + 2);
                } else {
                    setcookie('msg', '????ng k?? kh??ng th??nh c??ng', time() + 2);
                }
            } else {
                setcookie('msg', 'M???t kh???u kh??ng tr??ng nhau', time() + 2);
            }
        } else {
            setcookie('msg', 'T??n t??i kho???n ho???c Email  ???? t???n t???i', time() + 2);
        }
    }

    function insert_info($data)
    {

        $query = "INSERT INTO thongtinungvien(maTK) VALUES('$idtk')";
        $result = $this->conn->query($query);

        header('Location:?act=taikhoan&xuli=dangkygv');
    }

    function account()
    {
        $id = $_SESSION['login']['maTK'];
        return $this->conn->query("SELECT * from taikhoan where maTK = $id")->fetch_assoc();
    }

    function updateInfor($data, $passOrinfo)
    {
        $v = "";
        foreach ($data as $key => $value) {
            $v .= $key . "='" . $value . "',";
        }
        $v = trim($v, ",");

        $query = "UPDATE taikhoan SET $v  WHERE maTK = " . $_SESSION['login']['maTK'];
        $result = $this->conn->query($query);

        if ($passOrinfo == "pass") {
            if ($result == true) {
                setcookie('doimk', 'C???p nh???t m???t kh???u th??nh c??ng', time() + 2);
                header('Location: ?act=taikhoan&xuli=account#doitk');
            } else {
                setcookie('doimk', 'M???t kh???u x??c nh???n kh??ng ????ng', time() + 2);
                header('Location: ?act=taikhoan&xuli=account#doitk');
            }
        }
    }

    function error()
    {
        header('location: ?act=errors');
    }
}
