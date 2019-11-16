<?php
require '../Curl/configuration/curlconf.php';

$get_data = callAPI('GET', 'http://localhost:3000/panier/user', false);
$response = json_decode($get_data, true);


//echo $response["évènements"][0]["évènement"];
if ($response["message"] == "Affichage du panier") {



    for ($i = 0; $i < count($response["commande"]); $i++) {

        $article = $response["commande"][$i]["Article"];
        $quantite = $response["commande"][$i]["Quantite"];
        $URL = $response["commande"][$i]["URL"];

        echo ' <div class="col-lg-2 col-xs-12 col-md-4 p-2 bloc my-2">
<article class="card">
    <img src="' . $URL . '" class="objet">
    <div class="card-body">
        <h5>' . $article . '</h5>
        <p class="qqté" style="font-weight:bold"> Quantité :</p>' . $quantite . '<p class="nbreArticle" style="display:inline"></p>
    </div>
</article>
</div>';
    }
} else {

    echo $response["message"];
}
