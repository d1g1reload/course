<?php

class Course_lib
{
    public function __get($var)
    {

        return get_instance()->$var;
    }
    public $userkey = '64a1b42fd084';
    public $passkey = 'bee6fffef7c8bc00aca5d675';

    public $urlotp = 'https://console.zenziva.net/wareguler/api/sendWA/';
    function convert_time_youtube($duration)
    {
        if ($duration) {
            $start = new DateTime('@0'); // Unix epoch
            $start->add(new DateInterval($duration));
            $youtube_time = $start->format('H:i:s');
        }

        return $youtube_time;
    }

    function youtube_api($video_code)
    {
        $apikey = "AIzaSyAaw-003dXTKM1R0ahWTxESbUVMu6EhQqM";
        $youtube = new Madcoda\Youtube\Youtube(array('key' => $apikey));
        $video = $youtube->getVideoInfo($video_code);

        return $video;
    }

    function sendOtp($phone, $text)
    {

        $telepon = $phone;
        $message = $text;

        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_URL, $this->urlotp);
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT, 30);
        curl_setopt($curlHandle, CURLOPT_POST, 1);
        curl_setopt($curlHandle, CURLOPT_POSTFIELDS, array(
            'userkey' => $this->userkey,
            'passkey' => $this->passkey,
            'to' => $telepon,
            'message' => $message
        ));
        $results = json_decode(curl_exec($curlHandle), true);
        curl_close($curlHandle);
    }

    function generateUUID()
    {
        return sprintf(
            '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0x0fff) | 0x4000,
            mt_rand(0, 0x3fff) | 0x8000,
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff)
        );
    }
}
