<?php
    require_once("./Models/recruiterModel.php");
    class recruiterController{
        var $recruiter_model;
        public function __construct()
        {
             $this->recruiter_model = new recruiterModel();  
        }
        public function list()
        {
            $data_work = $this->recruiter_model->all();
            require_once("Views/index.php");
        }
        public function add()
        {
            $data_work = $this->recruiter_model->all();
            $data_category = $this->recruiter_model->danhmuc();
            require_once("Views/index.php");
        }
        public function delete()
        {
            $id = $_GET['maCV'];
            $this->recruiter_model->deleteImg($id);
            $this->recruiter_model->delete($id);
        }
        public function store()
        {
            $target_dir = "./Publics/images/";
            $hinhAnhChinh = "";
            $target_file = $target_dir . basename($_FILES["hinhAnhChinh"]["name"]);
            $status_upload = move_uploaded_file($_FILES["hinhAnhChinh"]["tmp_name"], $target_file);
            if ($status_upload) { 
                $hinhAnhChinh = basename($_FILES['hinhAnhChinh']['name']);
            }

            $hinhAnh1 = "";
            $target_file = $target_dir . basename($_FILES['hinhAnh1']["name"]);
            $status_upload = move_uploaded_file($_FILES['hinhAnh1']['tmp_name'], $target_file);
            if ($status_upload) { 
                $hinhAnh1 = basename($_FILES['hinhAnh1']['name']);
            }

            $hinhAnh2 = "";
            $target_file = $target_dir . basename($_FILES['hinhAnh2']["name"]);
            $status_upload = move_uploaded_file($_FILES['hinhAnh2']['tmp_name'], $target_file);
            if ($status_upload) { 
                $hinhAnh2 = basename($_FILES['hinhAnh2']['name']);
            }
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $ThoiGian =  date('Y-m-d H:i:s');
            $data_work = array(
                'maCV' => 'null',
                'maTK' => $_SESSION['login']['maTK'],
                'maDMCV'  =>   $_POST['maDMCV'],
                'tenCV' => $_POST['tenCV'],
                'soLuong' => $_POST['soLuong'],
                'trinhDoHV' =>  $_POST['trinhDoHV'],
                'gioiTinhYC'  => $_POST['gioiTinhYC'],
                'chucVu' => $_POST['chucVu'],
                'luong' => $_POST['luong'],
                'diaChi' =>  $_POST['diaChi'],
                'time' =>  $_POST['time'],
                'moTa' => $_POST['moTa'],
                'tinhTrang' => 1,
                'thoiGianDang' => $ThoiGian,
            );
            $this->recruiter_model->store($data_work);
            $idcv = $this->recruiter_model->getIdWorknew();
            $data_img = array(
                $idcv . " 1" => $hinhAnhChinh,
                $idcv . " 2"  => $hinhAnh1,
                $idcv . " 3"  => $hinhAnh2
            );

            $this->recruiter_model->insertImg($data_img);
        }
    }
    
?>
