<?php
    require_once("./Models/rateModel.php");
    class RateController{
        var $rate_model;
        public function __construct()
        {
             $this->rate_model = new rate();  
        }
        public function list()
        {
            $data = $this->rate_model->congviec($_SESSION['login']['maTK']);
            
            require_once("./Views/index.php");
        }
        function chitiet()
        {
            $id = isset($_GET['id']) ? $_GET['id'] : 1;
            $data = $this->rate_model->chitietcongviec($id);
            require_once("./Views/index.php");
        }
        function chitietuv()
        {
            $id = isset($_GET['id']) ? $_GET['id'] : 1;
            $data = $this->rate_model->chitietuv($id);
            require_once("./Views/index.php");
        }
        function detailhelp()
        {
            //lấy đánh giá
            $DataEvalute = $this->rate_model->getEvalute($_GET['tk']);
            $id = isset($_GET['id']) ? $_GET['id'] : 1;
            $data_user = $this->rate_model->taikhoangv1($id,$_GET['tk']);
            require_once("./Views/index.php");
        }
        public function store()
        {
            $id = isset($_GET['id']) ? $_GET['id'] : 1;
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $ThoiGian =  date('Y-m-d H:i:s');
            $data_work = array(
                'maCV' =>  $_POST['maCV'],
                'maTK' =>  $_POST['maTK'],
                'soSao'  => $_POST['soSao'],
                'binhLuan'  => $_POST['binhLuan'],
                'ngayDanhGia' => $ThoiGian
            );
            $this->rate_model->store($data_work);
           
        }
        public function confirm()
        {
            $this->rate_model->updateds($_POST['maCV'],$_POST['maTK']);
           
        }
        
    }
?>