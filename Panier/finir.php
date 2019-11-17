<?php

require '../CURL/configuration/curlconf2.php';

if (isset($_POST['submit'])) {

        $make_call = callAPI1('POST', 'localhost:3000/panier/pass', null);
        $response = json_decode($make_call, true);

        if ($response["message"] == "La commande a bien été passée !") {
                echo "Merci d'avoir commander chez nous";
        } else if ($response["message"] == "Vous n'avez pas de commande en cours !") {
                header('Location: /SiteWeb/Boutique/boutique.php');
        } else {
                echo $response["message"];
        }
}
