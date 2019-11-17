<?php
require 'configuration/curlconf.php';

if (isset($_POST['submit'])) {
    
    $nom = !empty($_POST['nom']) ? trim($_POST['nom']) : null;
    $description = !empty($_POST['description']) ? trim($_POST['description']) : null;
    $url = !empty($_POST['url']) ? trim($_POST['url']) : null;
    $de = !empty($_POST['debut_event']) ? trim($_POST['debut_event']) : null;
    $fe = !empty($_POST['fin_event']) ? trim($_POST['fin_event']) : null;

    $data_array = array(
        "nom" => $nom,
        "description" => $description,
        "URL" => $url,
        "dated" => $de,
        "datef" => $fe
    );
    
    $make_data = callAPI('POST', 'localhost:3000/event/add', json_encode($data_array));
    $response = json_decode($make_data, true);

    if ($response["message"] == "Ajout de l'evenement ".$nom."") {
        header('Location: /SiteWeb/Boutique/boutique.php');
    } else {
        echo $response["message"];
    }
}
