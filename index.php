<?php


require "instagram/Instagram.php";

$instagram = new Instagram([
    'access_token' => 'VOTRE_ACCESS_TOKEN'
]);

try {
    $medias = $instagram->getRecentMedia();
    foreach ($medias as $media)
    {
        echo "<img src='{$media -> images -> standard_resolution-> url}' width='300'>";
    }
} catch (Exception $e){
    die($e->getMessage());
}