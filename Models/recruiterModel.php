<?php
    require_once("model.php");
    class recruiterModel extends model
    {
        var $table = "congviec";
        var $contens = "maCV";
        function danhmuc(){
            $query = "select * from danhmuccv";
            require("result.php");
            return $data;
        }
        function getImgById($idsp){
            $query = "select *from hinhanhcv where maCV = $idcv";
            require("result.php");
            return $data;
        }
    
        function issetImgName($idsp, $imgName){
            $query = "select *from hinhanhcv where maCV = $idcv and tenHinh ='$imgName'";
            $result = $this->conn->query($query);
            $row = mysqli_fetch_assoc($result);
            if($row != null){
                return true;
            }
            else return false;
        }
        function updateImg($data_img, $idsp){
            $query ="";
            $result ="";
            foreach($data_img as $key => $value){
                if($this->issetImgName($idsp, $key)){ 
                  $query = "UPDATE hinhanhcv set hinhanhcv = '$value' where maCV = $idcv and tenHinh = '$key';";
                  $result = $this->conn->query($query);
                }
                else {
                    $query = "INSERT into  hinhanh values ('null',  '$idsp' ,'$value' ,'$key')";
                    $result = $this->conn->query($query);
                }
            }
            if ($result == true) {
                setcookie('msg', 'Cập nhật thành công', time() + 2);
                header('Location: ?mod=' . $this->table);
            } else {
                setcookie('msg', $query, time() + 2);
            }
        }
      
        function insertImg($data_img){
            $dat ="";
            $i =0;
            foreach($data_img as $key => $value){
                $i +=1;
                $key = rtrim($key, " ".$i);
                $dat .= "('null','$key','$value','hinhanh$i'),";
            }
            $dat = trim($dat, ",");
            $query = "INSERT INTO hinhanhcv VALUES $dat;";
            // $result = $this->conn->query($query);
            // if ($result == true) {
            //     setcookie('msg', 'Duyệt thành công', time() + 2);
            //     header('Location: ?mod=' . $this->table);
            // } else {
            //     setcookie('msg', $query, time() + 2);
            // }
        }
        function deleteImg($id)
        {
            $query = "DELETE from hinhanhcv where maCV=$id";    
            $status = $this->conn->query($query);
            if ($status == true) {
                setcookie('msg', 'Xóa thành công', time() + 2);
            } else {
                setcookie('msg', 'Xóa không thành công', time() + 2);
            }
            header('Location: ?mod=' . $this->table);
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
    
            // if ($status == true) {
            //   setcookie('msg', 'Thêm mới thành công', time() + 2);
            //   header('Location: ?mod=' .$this->table . '&act=add');
            // } else {
            //     setcookie('msg', 'Thêm mới thất bại', time() + 2);
            //     header('Location: ?mod=' .$this->table . '&act=add');
            // }
        }
    }
    
?>