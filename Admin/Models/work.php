<?php
require_once("model.php");
class work extends Model
{
    var $table = "congviec";
    var $contens = "maCV";
    function chitietcongviec($id){
        $query = "SELECT * FROM taikhoan,congviec,hinhanhcv,quanhuyen,danhmuccv WHERE taikhoan.maTK = congviec.maTK AND congviec.maDMCV = danhmuccv.maDMCV AND hinhanhcv.maCV = congviec.maCV AND quanhuyen.idQuan = congviec.khuVuc
        AND congviec.maCV=$id;";

        require("result.php");
        
        return $data;
    }

    function trangthai($id){
        $query = "select * from congviec where tinhTrang = $id  ORDER BY maCV DESC";

        require("result.php");

        return $data;
    }

}