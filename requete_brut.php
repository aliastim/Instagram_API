<?php

$count = "40";
$access_token = 'VOTRE_ACCESS_TOKEN';
$endpoint = "https://api.instagram.com/v1/users/self/media/recent/?access_token=$access_token&count=$count";

$curl = curl_init($endpoint);

curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 3);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$data = json_decode(curl_exec($curl));

if ($data->meta->code==200) {
    //var_dump($data);
    foreach ($data->data as $image)
    {
        if($image->type == 'image' || $image->type == 'carousel' )
        {
            echo "<img src='{$image -> images -> standard_resolution-> url}' width='300'>";
            //var_dump($image->images->standard_resolution->url);
        }
    }
} else
{
    echo "impossible de récupérer les images de ce compte instagram";
}



