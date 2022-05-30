<?php
    require_once("./Models/recruiterModel.php");
    class DetailWorkController{
        var $work_model;
        public function __construct()
        {
             $this->work_model = new recruiterModel();  
        }
        public function list()
        {
            $data_work = $this->work_model->congviec($_GET['cv']);
            require_once("Views/index.php");
        }
        public function store()
        {
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $ThoiGian =  date('Y-m-d H:i:s');
            $data_work = array(
                'maCV' =>  $_POST['maCV'],
                'maTK' =>  $_SESSION['login']['maTK'],
                'thoiGianUT'  => $ThoiGian,
                'tinhTrangUngTuyen' => 0,
                'khXacNhan' => 0
            );
            $this->work_model->store1($data_work);
           
        }
    }
    
?>
