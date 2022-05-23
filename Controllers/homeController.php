<?php
    require_once("./Models/helpModel.php");
    class homeController{
        var $help_model;
        public function __construct()
        {
             $this->help_model = new helpModel();  
        }
        function list(){
            $data_banner = $this->help_model->getBanner();
            require_once('./Views/index.php');  
        }
        
    }
    
?>
