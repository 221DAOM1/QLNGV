<?php 
    require_once("model.php");
    class helpModel extends model{
        function getBanner() {
            $query = "SELECT * FROM banner";
            require("result.php");
            return $data;
        }
        function giupviec_moi() {
            $query = "SELECT * FROM taikhoan,thongtinungvien,quanhuyen WHERE taikhoan.maTK = thongtinungvien.maTK and quanhuyen.idQuan=thongtinungvien.khuVucLamViec
            GROUP by taikhoan.maTK;";
            // echo $query;
            require("result.php");
            return $data;
        }
        function giupviec($id) {
            $query = "SELECT * FROM taikhoan,thongtinungvien,quanhuyen WHERE taikhoan.maTK = thongtinungvien.maTK AND thongtinungvien.khuVucLamViec = quanhuyen.idQuan 
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
            $query = "SELECT * from taikhoan,thongtinungvien,quanhuyen WHERE taikhoan.maTK = thongtinungvien.maTK AND thongtinungvien.khuVucLamViec=quanhuyen.idQuan AND taikhoan.maTK=$idTK;";
            require("result.php");
            return $data;
        }
        function danhmuc(){
            $query = "select * from danhmuccv";
            require("result.php");
            return $data;
        }
        function getEvalute($maTK){
            $query = "SELECT * from taikhoan as tk,danhsachungvien as dsuv,danhgiagv as dg WHERE  
            dsuv.maCV=dg.maCV and tk.maTK=dg.maTK and khXacNhan=1 and tk.maTK = '$maTK' ;";
           require("result.php");
           return $data;
        }

        function help_danhmuc($danhmuc)
        {  
            $query ="SELECT * from taikhoan,thongtinungvien,quanhuyen WHERE taikhoan.maTK = thongtinungvien.maTK and khuVucLamViec = $danhmuc and quanhuyen.idQuan=thongtinungvien.khuVucLamViec GROUP BY taikhoan.maTK;";
            require("result.php");
            return $data;  
        }
    }
?>