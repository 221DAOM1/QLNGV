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
        function account()
        {   
            $data = $this->help_model->account();
            require_once('Views/index.php');
        }
        function updateinfo(){
            $data = array(
                'thoiGian' => $_POST['thoiGian'],
                'trinhDoHV'=>$_POST['trinhDoHV'],
                'khuVucLamViec'=> $_POST['khuVucLamViec'],
                'soThich'=> $_POST['soThich'],
                'ghiChu'=> $_POST['ghiChu'],
                'tinhTrangHD'=> 1,
            );
            foreach ($data as $key => $value) {
                if (strpos($value, "'") != false) {
                    $value = str_replace("'", "\'", $value);
                    $data[$key] = $value;
                }
            }
            $this->help_model->updateInfor($data);
            
            header('location: ?act=help&xuli=account');
        }          
    }
?>