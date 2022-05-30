<?php 
    require_once("model.php");
    class rate extends model{
        var $table = "danhgiagv";
        function congviec($maTK){
            $query = "SELECT * FROM congviec as cv, danhsachungvien as dsuv,hinhanhcv as ha
            WHERE cv.maCV=dsuv.maCV and ha.maCV=cv.maCV and dsuv.khXacNhan=1 and cv.maTK = $maTK GROUP BY cv.maCV;";
            require("result.php");
            return $data;
        }

        function chitietcongviec($id){
            $query = "SELECT * FROM taikhoan,congviec,danhsachungvien WHERE taikhoan.maTK = danhsachungvien.maTK AND congviec.maCV = danhsachungvien.maCV
            AND congviec.maCV=$id;";
            require("result.php");
            return $data;
        }

        function taikhoangv($id,$idTK){
            $query = "SELECT taikhoan.maTK,hinhAnh,taikhoan.diaChi,hoTen,ngaySinh,gioiTinh,congviec.maCV,tenCV FROM taikhoan,congviec,danhsachungvien WHERE taikhoan.maTK = danhsachungvien.maTK AND congviec.maCV = danhsachungvien.maCV
            AND danhsachungvien.maTK=$idTK AND danhsachungvien.maCV=$id;";
            require("result.php");
            return $data;
        }

        function store($data)
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
                setcookie('msg2', 'ĐÁNH GIÁ THÀNH CÔNG', time() + 2);
                header('Location: ?mod=' . "home");
            } else {
                
            }
        }
    }
?>