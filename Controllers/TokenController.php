<?php
require_once("./Models/token.php");
class TokenController
{
    var $notification_model;
    public function __construct()
    {
        $this->notification_model = new TokenModel();
    }

    function getTokenOfUser()
    {
        $maTk = $_SESSION['login']['maTK'];
        $data = $this->notification_model->getTokenOfUser($maTk);
        return $data;
    }

    function addTokenForUser()
    {
        if (isset($_POST['token'])) {
            $newToken = $_POST['token'];
            $maTk = $_SESSION['login']['maTK'];
            $newData = array("token" => $newToken, "maTK" => $maTk);
            $data = $this->notification_model->addTokenForUser($newData);
            return $data;
        }
    }

    function deleteToken()
    {
        if (isset($_POST['token'])) {
            $UserToken = $_POST['token'];
            $data = $this->notification_model->deleteToken($UserToken);
            return $data;
        }
    }
}
