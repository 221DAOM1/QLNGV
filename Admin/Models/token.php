<?php
require_once("model.php");
class TokenModel extends model
{
    function getTokenOfUser($maTk)
    {
        $query = "SELECT token from USERTOKEN where maTk = $maTk";
        require("result.php");
        return $data;
    }

    function addTokenForUser($data)
    {
        $f = "";
        $v = "";
        foreach ($data as $key => $value) {
            $f .= $key . ",";
            $v .= "'" . $value . "',";
        }
        $f = trim($f, ",");
        $v = trim($v, ",");
        $query = "INSERT INTO USERTOKEN($f) VALUES ($v);";

        // $status = $this->conn->query($query);
        require("result.php");
        return $data;
    }

    function deleteToken($maTK)
    {
        $query = "DELETE FROM USERTOKEN where maTK like $maTK;";

        $status = $this->conn->query($query);
        if ($status) {
            return true;
        }
        return false;
    }
}
