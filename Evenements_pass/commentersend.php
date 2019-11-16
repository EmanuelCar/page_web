<?php



require '../Curl/configuration/curlconf3.php';

if (isset($_POST['submit'])) {

$comm = !empty($_POST['nom']) ? trim($_POST['nom']) : null;
$URL = !empty($_POST['comm']) ? trim($_POST['comm']) : null;

echo $URL;
$data_array = array(
    "URL" => $URL,
    "commentaire" => $comm,
);

$make_call = callAPI2('POST', 'http://localhost:3000/avis/comment/add', json_encode($data_array));
$response = json_decode($make_call, true);


if ($response["message"] == "Commentaire ajouté !") {

    header('Location: evenements_pass.php');
    exit();

} 
}