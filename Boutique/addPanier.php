<?php



require '../Curl/configuration/curlconf2.php';



$quantite = !empty($_POST['quantite']) ? trim($_POST['quantite']) : null;
$article = !empty($_POST['article']) ? trim($_POST['article']) : null;


$data_array = array(
    "quantite" => $quantite,
    "article" => $article,
);

$make_call = callAPI1('POST', 'http://localhost:3000/panier/add', json_encode($data_array));
$response = json_decode($make_call, true);


if ($response["message"] == "Ajout de la commande") {

    header('Location: boutique.php');
    exit();

} else {

}
