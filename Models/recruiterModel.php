<?php
require_once("model.php");
class recruiterModel extends model
{
    var $table = "congviec";
    var $contens = "maCV";
    var $table1 = "danhsachungvien";
    function danhmuc()
    {
        $query = "select * from danhmuccv";
        require("result.php");
        return $data;
    }
    function congviec($idCV)
    {
        $query = "SELECT tenCV,tenHinh,hoTen,SDT,tenQuan,soLuong,trinhDoHV,gioiTinhYC,chucVu,luong,time,moTa,congviec.diaChi,congviec.maCV,taikhoan.maTK from congviec,hinhanhcv,danhmuccv,quanhuyen,taikhoan WHERE taikhoan.maTK=congviec.maTK and quanhuyen.idQuan=congviec.khuVuc AND congviec.maCV=hinhanhcv.maCV AND danhmuccv.maDMCV = congviec.maDMCV AND congviec.maCV=$idCV;";
        require("result.php");
        return $data;
    }
    
    function searchData($key) {
        $query = "SELECT * from congviec,hinhanhcv,danhmuccv,quanhuyen,taikhoan WHERE taikhoan.maTK=congviec.maTK and quanhuyen.idQuan=congviec.khuVuc AND congviec.maCV=hinhanhcv.maCV AND danhmuccv.maDMCV = congviec.maDMCV and tenCV LIKE '$key%' GROUP by congviec.maCV;";
        require("result.php");
        // echo $query;
        return $data;
    }
    function congvieccg($idCV)
    {
        $query = "SELECT * from congviec,hinhanhcv,danhmuccv,quanhuyen,taikhoan WHERE taikhoan.maTK=congviec.maTK and quanhuyen.idQuan=congviec.khuVuc AND congviec.maCV=hinhanhcv.maCV AND danhmuccv.maDMCV = congviec.maDMCV AND congviec.maDMCV=$idCV AND tinhTrang=1 GROUP BY congviec.maCV;";
        require("result.php");
        return $data;
    }
    function district()
    {
        $query = "select * from quanhuyen";
        require("result.php");
        return $data;
    }
    function getImgById($idcv)
    {
        $query = "select *from hinhanhcv where maCV = $idcv";
        require("result.php");
        return $data;
    }

    function getIdWorknew()
    {
        $query = "select maCV from congviec
            ORDER BY thoiGianDang DESC limit 1";
        $result = $this->conn->query($query);
        $row = mysqli_fetch_assoc($result);

        $id = $row['maCV'];

        return $id;
    }

    function issetImgName($idcv, $imgName)
    {
        $query = "select *from hinhanhcv where maCV = $idcv and tenHinh ='$imgName'";
        $result = $this->conn->query($query);
        $row = mysqli_fetch_assoc($result);
        if ($row != null) {
            return true;
        } else return false;
    }
    function updateImg($data_img, $idsp)
    {
        $query = "";
        $result = "";
        foreach ($data_img as $key => $value) {
            if ($this->issetImgName($idsp, $key)) {
                $query = "UPDATE hinhanhcv set hinhanhcv = '$value' where maCV = $idcv and tenHinh = '$key';";
                $result = $this->conn->query($query);
            } else {
                $query = "INSERT into  hinhanhcv values ('null',  '$idsp' ,'$value' ,'$key')";
                $result = $this->conn->query($query);
            }
        }
        if ($result == true) {
            setcookie('msg2', 'C???p nh???t th??nh c??ng', time() + 2);
            header('Location:?act=work&xuli=add');
        } else {
            setcookie('msg2', $query, time() + 2);
        }
    }

    function insertImg($data_img)
    {
        $dat = "";
        $i = 0;
        foreach ($data_img as $key => $value) {
            $i += 1;
            $key = rtrim($key, " " . $i);
            $dat .= "('null','$key','$value','hinhanh$i'),";
        }
        $dat = trim($dat, ",");
        $query = "INSERT INTO hinhanhcv VALUES $dat;";
        $result = $this->conn->query($query);
        if ($result == true) {
            setcookie('msg2', 'G???i y??u c???u th??nh c??ng', time() + 2);
        } else {
            setcookie('msg2', $query, time() + 2);
        }
        header('Location:?act=work&xuli=add');
    }
    function deleteImg($id)
    {
        $query = "DELETE from hinhanhcv where maCV=$id";
        $status = $this->conn->query($query);
        if ($status == true) {
            setcookie('msg2', 'X??a th??nh c??ng', time() + 2);
        } else {
            setcookie('msg2', 'X??a kh??ng th??nh c??ng', time() + 2);
        }
        header('Location:?act=work&xuli=add');
    }
    function store1($data)
    {
        $f = "";
        $v = "";
        foreach ($data as $key => $value) {
            $f .= $key . ",";
            $v .= "'" . $value . "',";
        }
        $f = trim($f, ",");
        $v = trim($v, ",");
        $query = "INSERT INTO $this->table1($f) VALUES ($v);";

        $status = $this->conn->query($query);

        if ($status == true) {
            setcookie('msg2', 'G???i y??u c???u th??nh c??ng', time() + 2);
        } else {
            setcookie('msg2', 'G???i y??u c???u th???t b???i', time() + 2);
        }
        header('Location:?act=home');
    }
    function store2($data)
        {
            $f = "";
            $v = "";
            foreach ($data as $key => $value) {
                $f .= $key . ",";
                $v .= "'" . $value . "',";
            }
            $f = trim($f, ",");
            $v = trim($v, ",");
            $query = "INSERT INTO $this->table($f) VALUES ($v);";

            $status = $this->conn->query($query);

            if ($status == true) {
                setcookie('msg', 'Th??m m???i th??nh c??ng', time() + 2);
                header('Location:?act=home');
            } else {
                setcookie('msg', $query, time() + 2);
                header('Location: ?act=work&xuli=add');
            }
        }
}
