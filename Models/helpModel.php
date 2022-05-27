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
        function congviec_moi() {
            $query = "SELECT * FROM taikhoan,congviec,hinhanhcv,quanhuyen,danhmuccv WHERE taikhoan.maTK = congviec.maTK AND congviec.maDMCV = danhmuccv.maDMCV AND hinhanhcv.maCV = congviec.maCV AND quanhuyen.idQuan = congviec.khuVuc
            GROUP by congviec.maCV;";
            // echo $query;
            require("result.php");
            return $data;
        }
        function danhmuccv() {
            $query = "SELECT * FROM taikhoan,congviec,hinhanhcv,quanhuyen,danhmuccv WHERE taikhoan.maTK = congviec.maTK AND congviec.maDMCV = danhmuccv.maDMCV AND hinhanhcv.maCV = congviec.maCV AND quanhuyen.idQuan = congviec.khuVuc
            GROUP by congviec.maCV;";
            // echo $query;
            require("result.php");
            return $data;
        }
        function taikhoangv($idTK){
            $query = "SELECT * from taikhoan,thongtinungvien WHERE taikhoan.maTK = thongtinungvien.maTK AND taikhoan.maTK=$idTK;";
            require("result.php");
            return $data;
        }
        function danhmuc(){
            $query = "select * from danhmuccv";
            require("result.php");
            return $data;
        }
    }
?>