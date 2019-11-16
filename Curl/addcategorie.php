<?php
require 'configuration/curlconf.php';

if (isset($_POST['submit'])) {
    
    $cat = !empty($_POST['nom']) ? trim($_POST['nom']) : null;

    $data_array = array(
        "cat" => $cat
    );
    
    $make_data = callAPI('POST', '169.254.168.183:3000/article/categorie/add', json_encode($data_array));
    $response = json_decode($make_data, true);

    if ($response["message"] == "Ajout de la categorie d'article ".$cat."") {
        header('Location: /SiteWeb/Boutique/boutique.php');
    } else {
        echo $response["message"];
    }
}
