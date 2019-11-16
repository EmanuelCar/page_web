<?php

require '../Curl/configuration/curlconf3.php';

if (isset($_POST['submit'])) {

$event = !empty($_POST['event']) ? trim($_POST['event']) : null;
$URL = !empty($_POST['URL']) ? trim($_POST['URL']) : null;


$data_array = array(
    "url" => $URL,
    "event" => $event,
);

$make_call = callAPI2('POST', 'http://localhost:3000/photo/add', json_encode($data_array));
$response = json_decode($make_call, true);

if ($response["message"] == "L'image a bien été ajoutée !") {

    header('Location: evenements_pass.php');
    exit();

} 
}