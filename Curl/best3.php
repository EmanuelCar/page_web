<?php

require 'configuration/curlconf.php';

$get_data = callAPI('GET', '10.154.128.76:3000/article/best', false);
$response = json_decode($get_data, true);

if ($response["message"] == "Affichage du meilleur article") {

    $nom = $response["Article 1"]["Nom"];
    $quantite = $response["Article 1"]["Quantité"];
    $url = $response["Article 1"]["URL"];
    
} else if ($response["message"] == "Affichage des 2 meilleurs articles") {

    $nom1 = $response["Article 1"]["Nom"];
    $quantite1 = $response["Article 1"]["Quantité"];
    $url1 = $response["Article 1"]["URL"];

    $nom2 = $response["Article 2"]["Nom"];
    $quantite2 = $response["Article 2"]["Quantité"];
    $url2 = $response["Article 2"]["URL"];

} else if($response["message"] == "Affichage des 3 meilleurs articles"){
    $nom1 = $response["Article 1"]["Nom"];
    $quantite1 = $response["Article 1"]["Quantité"];
    $url1 = $response["Article 1"]["URL"];

    $nom2 = $response["Article 2"]["Nom"];
    $quantite2 = $response["Article 2"]["Quantité"];
    $url2 = $response["Article 2"]["URL"];

    $nom3 = $response["Article 3"]["Nom"];
    $quantite3 = $response["Article 3"]["Quantité"];
    $url3 = $response["Article 3"]["URL"];
} else {
    $erreur = "Encore article n'a encore été commandé !";
}

?>