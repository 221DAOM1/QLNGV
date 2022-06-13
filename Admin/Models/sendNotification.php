<?php
require_once("model.php");
class SendNotification extends Model
{

    public function sendNotificationToUsers($maTKs, $title, $body)
    {
        $SERVER_API_KEY = 'AAAANGvO33Y:APA91bFAZjPLYf0HKvmSL4SVcMjyyzTT_EfE2Qa4pdNHndqZ3hqeNtNYEsZT3MzuOkw6S6m24AE5Ov_jBdFJVLlO2bbI4x-8gT9ap4n4LH7guKEfQJPQqdPhfjvhoCmV4Ox2O-IJ3-BY';

        require_once('./Models/token.php');
        // $maTK = $_SESSION['login']['maTK'];
        $listToken = array();
        $TokenModel = new TokenModel();

        foreach ($maTKs as $maTK) {
            $tokens = $TokenModel->getTokenOfUser($maTK);

            foreach ($tokens as $array) {
                $listToken[] = $array["token"];
            }
        }
        $header = [
            'Authorization: Key=' . $SERVER_API_KEY,
            'Content-Type: Application/json'
        ];

        $msg = [
            'title' => $title,
            'body' => $body,
            'icon' => './Publics/images/logo.png',
            // 'image' => './Publics/images/logo.png',
        ];
        $payload = [
            'registration_ids'     => $listToken,
            'data'                => $msg
        ];

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($payload),
            CURLOPT_HTTPHEADER => $header
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
    }

    public function sendNotificationToUserOrAdmin($title, $body)
    {
        $query = "SELECT maTK FROM gtngv.taikhoan where maQuyen = 4 or maQuyen = 1";
        $result = $this->conn->query($query);
        $maTKs = array();
        while ($row = $result->fetch_assoc()) {
            $maTKs[] = $row['maTK'];
        }
        $this->sendNotificationToUsers($maTKs, $title, $body);
    }
}
