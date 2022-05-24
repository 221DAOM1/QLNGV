<?php
require_once("connection.php");
class login
{
    var $conn;
    function __construct()
    {
        $conn_obj = new Connection();
        $this->conn = $conn_obj->conn;
    }
    
    function tk_nguoidung($id){
        $query = "SELECT count(maTK) as Count FROM taikhoan WHERE maQuyen = $id";
        
        return $this->conn->query($query)->fetch_assoc();
    }
}