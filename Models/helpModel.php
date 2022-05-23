<?php 
    require_once("model.php");
    class helpModel extends model{
        function getBanner() {
            $query = "SELECT * FROM banner";
            require("result.php");
            return $data;
        }
    }
?>