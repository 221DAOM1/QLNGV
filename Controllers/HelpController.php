<?php
    require_once("./Models/help.php");
    class helpController{
        var $help_model;
        public function __construct()
        {
             $this->help_model = new help();  
        }
        function list()
        {  
            require_once('./Views/index.php');  
        }
    }
?>