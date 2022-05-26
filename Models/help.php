<?php 
    require_once("model.php");
    class help extends model{
        var $table = "thongtinungvien";
        var $contens = "maUV";

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
              setcookie('msg2', 'Gửi yêu cầu thành công', time() + 2);
              
            } else {
                setcookie('msg2', 'Gửi yêu cầu thất bại', time() + 2);
            }
            header('Location:?act=help&xuli=add');
        }
    }
?>