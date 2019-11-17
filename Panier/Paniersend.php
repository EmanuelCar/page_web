<?php
require '../Curl/configuration/curlconf.php';

$get_data = callAPI('GET', 'http://localhost:3000/panier/user', false);
$res = json_decode($get_data, true);

if ($res["message"] == "Affichage du panier") {

    for ($i = 0; $i < count($res["commande"]); $i++) {

        $article = $res["commande"][$i]["Article"];
        $quantite = $res["commande"][$i]["Quantite"];
        $URL = $res["commande"][$i]["URL"];

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

    echo $res["message"];
}
