<?php
    require_once("./Models/user.php");
class UserController
{
    var $user_model;
    public function __construct()
    {
        $this->user_model = new user();
    }
    public function list()
    {
        $data = $this->user_model->all();
        require_once("./Views/index.php");
    }
    public function detail()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->user_model->find($id);
        require_once("./Views/index.php");
    }
    public function add()
    {
        require_once("./Views/index.php");
    }
    public function store()
    {
        $data = array(
            'maQuyen' =>  $_POST['maQuyen'],
            'taiKhoan' => $_POST['taiKhoan'],
            'matKhau' => md5($_POST['matKhau']),
            'hoTen' => $_POST['hoTen'],
            'gioiTinh' => $_POST['gioiTinh'],
            'ngaySinh' => $_POST['ngaySinh'],
            'CMND' => $_POST['CMND'],
            'SDT' => $_POST['SDT'],
            'email' => $_POST['email'],
            'diaChi'  => $_POST['diaChi'],
            'hinhAnh' => "",
            'trangThai'  =>  '1',
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        $this->user_model->store($data);
    }
    public function delete()
    {
        $id = $_GET['id'];
        $this->user_model->delete($id);
    }
    public function edit()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->user_model->find($id);
        require_once("./Views/index.php");
    }
    public function update()
    {
        $data = array(
            
            'maTK' => $_POST['maTK'],
            'maQuyen' =>  $_POST['maQuyen'],
            'taiKhoan' => $_POST['taiKhoan'],
            'hoTen' => $_POST['hoTen'],
            'gioiTinh' => $_POST['gioiTinh'],
            'ngaySinh' => $_POST['ngaySinh'],
            'CMND' => $_POST['CMND'],
            'email' => $_POST['email'],
            'SDT' => $_POST['SDT'],
            'diaChi'  => $_POST['diaChi'],
            'hinhAnh' => "",
            'trangThai'  =>  '1',
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        $this->user_model->update($data);
    }
}
