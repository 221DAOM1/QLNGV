<?php
require_once("./Models/helpModel.php");
    class  DetailController{
        var $help_model;
        public function __construct()
        {
             $this->help_model = new helpModel();
            
        }
        function list()
        {   
            $data_user = $this->help_model->taikhoangv($_GET['tk']);
            $data_newhelp = $this->help_model->giupviec_moi();
            $data_dmcv = $this->help_model->danhmuc();     
            $data_lq = $this->help_model->help_danhmuc($data_user[0]['khuVucLamViec']);
            //lấy đánh giá
            $DataEvalute = $this->help_model->getEvalute($_GET['tk']);
            require_once("Views/index.php");
        }
    }
?>