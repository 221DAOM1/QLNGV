<?php
    require_once("./Models/help.php");
    class helpController{
        var $help_model;
        public function __construct()
        {
             $this->help_model = new help();  
        }
        public function list()
        {
            $data_help = $this->help_model->all();
            require_once("Views/index.php");
        }
        public function add()
        {
            $data_help = $this->help_model->all();
            require_once("Views/index.php");
        }
        public function store()
        {
            $data_help = array(
                'maUV' => 'null',
                'maTK' => $_SESSION['login']['maTK'],
                'thoiGian' => $_POST['thoiGian'],
                'trinhDoHV'  => $_POST['trinhDoHV'],
                'khuVucLamViec' => $_POST['khuVucLamViec'],
                'soThich' => $_POST['soThich'],
                'ghiChu' =>  $_POST['ghiChu'],
                'tinhTrangHD'  => 1,
            );
            $this->help_model->store($data_help);
        }
    }
?>