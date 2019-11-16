<?php

require 'configuration/curlconf.php';
require 'configuration/curlconf2.php';

$get_data = callAPI('GET', 'localhost:3000/article/categorie/liste', false);
$response = json_decode($get_data, true);
$nbr = count($response["catégories"]);
$i = 0;

echo'<select name="recup" id="recup" required>
<option value="" selected>Catégorie</option>';

    for($j = 0; $j<$nbr; $j++) {
        $categorie = $response["catégories"][$j]["Nom"];
        echo'<option value='. $categorie .' selected>'.$categorie.'</option>';
    }
echo'</select>';

if (isset($_POST['submit'])) {

    $nom = !empty($_POST['nom']) ? trim($_POST['nom']) : null;
    $description = !empty($_POST['description']) ? trim($_POST['description']) : null;
    $prix = !empty($_POST['Prix']) ? trim($_POST['Prix']) : null;
    $URL = !empty($_POST['url_img']) ? trim($_POST['url_img']) : null;
    $cat = !empty($_POST['recup']) ? trim($_POST['recup']) : null;


    $data_array = array(
        "nom" => $nom,
        "description" => $description,
        "prix" => $prix,
        "URL" => $URL,
        "cat" => $cat
    );

    $make_call = callAPI('POST','localhost:3000/article/add',json_encode($data_array));
    $response = json_decode($make_call,true);

    if ($response["message"] ==  "Ajout de l'article ".$nom.""){
        header('Location: /SiteWeb/Boutique/boutique.php');
    } else {
        echo $response["message"];
    }
}

?>
