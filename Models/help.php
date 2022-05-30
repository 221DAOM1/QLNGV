<?php 
    require_once("model.php");
    class help extends model{
        var $table = "thongtinungvien";
        var $contens = "maTK";

        function district(){
            $query = "select * from quanhuyen";
            require("result.php");
            return $data;
        }
        function updateInfor($data){
            $v = "";
            foreach ($data as $key => $value) {
                $v .= $key . "='" . $value . "',";
            }
            $v = trim($v, ",");
           
            $query = "UPDATE thongtinungvien SET $v  WHERE maTK = ". $_SESSION['login']['maTK'];   
            $result = $this->conn->query($query);
            
        }

        function account()
        {
            $id = $_SESSION['login']['maTK'];
            return $this->conn->query("SELECT * from thongtinungvien where maTK = $id")->fetch_assoc();
            
        }
    }
?>