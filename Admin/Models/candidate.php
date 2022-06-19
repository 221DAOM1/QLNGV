<?php
require_once("model.php");
class candidate extends Model
{
    var $table = "danhsachungvien";
    function chitietungvien($id, $tt)
    {
        $query = "SELECT quanhuyen.tenQuan,danhsachungvien.tinhTrangUngTuyen,taikhoan.maTK,hoTen,gioiTinh,ngaySinh,CMND,SDT,taikhoan.diaChi,thongtinungvien.thoiGian,thongtinungvien.trinhDoHV,thongtinungvien.khuVucLamViec,thongtinungvien.soThich,thongtinungvien.ghiChu,taikhoan.taikhoan,congviec.maCV FROM quanhuyen,thongtinungvien,taikhoan,congviec,danhsachungvien WHERE quanhuyen.idQuan=thongtinungvien.khuVucLamViec and thongtinungvien.maTK=taikhoan.maTK and taikhoan.maTK = danhsachungvien.maTK AND congviec.maCV = danhsachungvien.maCV
        AND trangThai=1 and congviec.maCV=$id and tinhTrangUngTuyen=$tt;";

        require("result.php");

        return $data;
    }

    function chitietgiupviec($id)
    {
        $query = "SELECT * from taikhoan,thongtinungvien,quanhuyen WHERE taikhoan.maTK = thongtinungvien.maTK AND thongtinungvien.khuVucLamViec=quanhuyen.idQuan AND taikhoan.maTK=$id;";
        require("result.php");
        return $data;
    }
    function congviec($id)
    {
        $query = "SELECT * FROM congviec,danhmuccv,quanhuyen WHERE congviec.khuVuc=quanhuyen.idQuan and tinhTrang = 1  and congviec.maDMCV=danhmuccv.maDMCV and tinhTrangDaUT = $id GROUP BY congviec.maCV ORDER by congviec.maCV DESC";

        require("result.php");

        return $data;
    }
    function danhmuccv()
    {
        $query = "SELECT * FROM taikhoan,congviec,hinhanhcv,quanhuyen,danhmuccv WHERE taikhoan.maTK = congviec.maTK AND congviec.maDMCV = danhmuccv.maDMCV AND hinhanhcv.maCV = congviec.maCV AND quanhuyen.idQuan = congviec.khuVuc
        GROUP by congviec.maCV;";
        // echo $query;
        require("result.php");
        return $data;
    }
    function taikhoangv($idTK)
    {
        $query = "SELECT * from taikhoan,thongtinungvien,quanhuyen WHERE taikhoan.maTK = thongtinungvien.maTK AND thongtinungvien.khuVucLamViec=quanhuyen.idQuan AND taikhoan.maTK=$idTK;";
        require("result.php");
        return $data;
    }
    function danhmuc()
    {
        $query = "select * from danhmuccv";
        require("result.php");
        return $data;
    }
    function getEvalute($maTK)
    {
        $query = "SELECT * from taikhoan as tk,danhsachungvien as dsuv,danhgiagv as dg WHERE  
        dsuv.maCV=dg.maCV and tk.maTK=dg.maTK and khXacNhan=1 and tk.maTK = '$maTK' ;";
        require("result.php");
        return $data;
    }

    function updateds($idcv, $idtk)
    {
        $query = "UPDATE danhsachungvien SET tinhTrangUngTuyen=1 WHERE maCV=$idcv and maTK=$idtk";
        $result = $this->conn->query($query);
        $query1 = "UPDATE congviec SET tinhTrangDaUT=1 WHERE maCV=$idcv";
        $result1 = $this->conn->query($query1);
        header('Location: ?mod=candidate');
    }

    function help_danhmuc($danhmuc)
    {
        $query = "SELECT * from taikhoan,thongtinungvien WHERE taikhoan.maTK = thongtinungvien.maTK and khuVucLamViec = $danhmuc GROUP BY taikhoan.maTK;";
        require("result.php");
        return $data;
    }
}
