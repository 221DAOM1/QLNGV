<?php 
    require_once("model.php");
    class rate extends model{
        var $table = "danhgiagv";
        function congviec($maTK){
            $query = "SELECT * FROM congviec as cv, danhsachungvien as dsuv,hinhanhcv as ha,quanhuyen as qh
            WHERE cv.maCV=dsuv.maCV and ha.maCV=cv.maCV and dsuv.khXacNhan=1 and qh.idQuan=cv.khuVuc and cv.maTK = $maTK GROUP BY cv.maCV;";
            require("result.php");
            return $data;
        }

        function congviecgv($idCV){
            $query = "SELECT * from congviec,hinhanhcv,danhmuccv,quanhuyen,taikhoan WHERE taikhoan.maTK=congviec.maTK and quanhuyen.idQuan=congviec.khuVuc AND congviec.maCV=hinhanhcv.maCV AND danhmuccv.maDMCV = congviec.maDMCV AND congviec.maCV=$idCV;";
            require("result.php");
            return $data;
        }


        function chitietcongviec($id){
            $query = "SELECT * FROM taikhoan,congviec,danhsachungvien,quanhuyen WHERE quanhuyen.idQuan=congviec.khuVuc and taikhoan.maTK = danhsachungvien.maTK AND congviec.maCV = danhsachungvien.maCV
            AND congviec.maCV=$id;";
            require("result.php");
            return $data;
        }

        function chitietdangky($id){
            $query = "SELECT * FROM taikhoan,congviec,danhsachungvien WHERE taikhoan.maTK = danhsachungvien.maTK AND congviec.maCV = danhsachungvien.maCV
            AND danhsachungvien.maTK=$id;";
            require("result.php");
            return $data;
        }

        function chitietuv($id){
            $query = "SELECT * FROM taikhoan,congviec,danhsachungvien,quanhuyen WHERE quanhuyen.idQuan=congviec.khuVuc and taikhoan.maTK = danhsachungvien.maTK AND congviec.maCV = danhsachungvien.maCV
            AND congviec.maCV=$id AND tinhTrangUngTuyen=1;";
            require("result.php");
            return $data;
        }

        function taikhoangv($id,$idTK){
            $query = "SELECT taikhoan.maTK,hinhAnh,taikhoan.diaChi,hoTen,ngaySinh,gioiTinh,congviec.maCV,tenCV FROM taikhoan,congviec,danhsachungvien WHERE taikhoan.maTK = danhsachungvien.maTK AND congviec.maCV = danhsachungvien.maCV
            AND danhsachungvien.maTK=$idTK AND danhsachungvien.maCV=$id;";
            require("result.php");
            return $data;
        }

        function taikhoangv1($id,$idTK){
            $query = "SELECT taikhoan.maTK,hinhAnh,taikhoan.diaChi,hoTen,ngaySinh,gioiTinh,congviec.maCV,tenCV,thongtinungvien.thoiGian,quanhuyen.tenQuan,thongtinungvien.soThich,thongtinungvien.ghiChu,thongtinungvien.trinhDoHV from taikhoan,thongtinungvien,quanhuyen,congviec,danhsachungvien WHERE taikhoan.maTK = thongtinungvien.maTK AND thongtinungvien.khuVucLamViec=quanhuyen.idQuan AND taikhoan.maTK = danhsachungvien.maTK AND congviec.maCV = danhsachungvien.maCV
            AND danhsachungvien.maTK=$idTK AND danhsachungvien.maCV=$id;";
            require("result.php");
            return $data;
        }

        function getEvalute($maTK){
            $query = "SELECT * from taikhoan as tk,danhsachungvien as dsuv,danhgiagv as dg WHERE  
            dsuv.maCV=dg.maCV and tk.maTK=dg.maTK and khXacNhan=1 and tk.maTK = '$maTK' ;";
           require("result.php");
           return $data;
        }

        function updateds($idcv,$idtk){
            $query = "UPDATE danhsachungvien SET khXacNhan=1 WHERE maCV=$idcv and maTK=$idtk";
            $result = $this->conn->query($query);
            header('Location: ?act=confirmhelp&xuli=list');
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
                header('Location: ?act=' . "home");
            } else {
                
            }
        }
    }
?>