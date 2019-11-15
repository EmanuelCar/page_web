<?php



require '../assets/Vendors/Curl/curlconf2.php';;



$event = !empty($_POST['event']) ? trim($_POST['event']) : null;


echo $nom;
$data_array = array(
    "event" => $event,
);

$make_call = callAPI2('POST', 'http://localhost:3000/event/join', json_encode($data_array));
$response = json_decode($make_call, true);


if ($response["message"] == "Super like") {

    header('Location: Evenements_act.php');
    exit();
} else if ($response["message"] == "Super unlike") {
    header('Location: Evenements_act.php');
    exit();
} else {
    header('Location: Evenements_act.php');
    exit();
}
