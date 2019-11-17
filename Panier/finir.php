<?php
require '../CURL/configuration/curlconf3.php';
require '../CURL/configuration/curlconf2.php';
require '../mail.php';


if (isset($_POST['submit'])) {

        

$make_call = callAPI2('POST', 'localhost:3000/panier/pass', null);
$response = json_decode($make_call, true);
$make_call = callAPI1('GET', 'localhost:3000/utilisateur/co', null);
$user = json_decode($make_call, true);

$prenom = $user["personne"][0]["Prenom"];
$nom = $user["personne"][0]["Nom"];

for ($i = 0; $i < count($res["commande"]); $i++) {

        $article = $res["commande"][$i]["Article"];
        $quantite = $res["commande"][$i]["Quantite"];

        $text = $text.'article : '.$article.' quantite : '.$quantite.' ,';

}
    if ($response["message"] == "La commande a bien été passée !") {
        echo "Merci d'avoir commander chez nous";
        $result = smtpmailer('bdefakecesi@gmail.com', 'bdefakecesi@gmail.com', 'BDE commande', 'commande de '.$prenom.' '.$nom.'', ''.$text.'');
    if (true !== $result) {
      echo $result;
    }

} else {
     
        echo $response["message"];
}
}