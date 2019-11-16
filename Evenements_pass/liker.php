<?php



require '../Curl/configuration/curlconf2.php';



$URL = !empty($_POST['photo']) ? trim($_POST['photo']) : null;


echo $URL;
$data_array = array(
    "URL" => $URL,
);

$make_call = callAPI1('POST', 'http://localhost:3000/avis/like', json_encode($data_array));
$response = json_decode($make_call, true);


if ($response["message"] == "Super like") {

    header('Location: evenements_pass.php');
    exit();
} else if ($response["message"] == "Super unlike") {
    header('Location: evenements_pass.php');
    exit();
} else {
    header('Location: evenements_pass.php');
    exit();
}
