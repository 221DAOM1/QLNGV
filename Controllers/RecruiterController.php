<?php
    require_once("./Models/recruiterModel.php");
    class recruiterController{
        var $recruiter_model;
        public function __construct()
        {
             $this->recruiter_model = new recruiterModel();  
        }
        function list(){
            require_once('./Views/index.php');  
        }
        
    }
    
?>
