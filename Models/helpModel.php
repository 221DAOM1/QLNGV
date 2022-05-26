<?php 
    require_once("model.php");
    class helpModel extends model{
        function getBanner() {
            $query = "SELECT * FROM banner";
            require("result.php");
            return $data;
        }
        function giupviec_moi() {
            $query = "SELECT * FROM taikhoan,thongtinungvien WHERE taikhoan.maTK = thongtinungvien.maTK
            GROUP by taikhoan.maTK;";
            // echo $query;
            require("result.php");
            return $data;
        }
    }
?>