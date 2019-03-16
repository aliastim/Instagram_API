<?php
/**
 * Created by PhpStorm.
 * User: timotheecorrado
 * Date: 2019-03-16
 * Time: 17:17
 */

class Instagram
{
    private $options =
    [
        'access_token' => ''
    ];

    private $endpoint = "https://api.instagram.com/v1/";

    public function __construct($options)
    {
        $this->options=array_merge($this->options, $options);
    }

    public function getRecentMedia($count=20)
    {
        try {
            $curl = curl_init($this -> endpoint . "users/self/media/recent/?access_token={$this->options['access_token']}&count=$count");

            curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 3);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

            $data = curl_exec($curl);

        } catch (Exception $e)
        {
            die($e->getMessage());
        }

        $json = json_decode($data);

        if ($json->meta->code != 200)
        {
            echo "erreur";
        } else
        {
            //var_dump($json);
            return $json->data;
        }
    }
}