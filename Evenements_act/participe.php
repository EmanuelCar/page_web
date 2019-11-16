<?php



require '../Curl/configuration/curlconf.php';



$event = !empty($_POST['event']) ? trim($_POST['event']) : null;


echo $nom;
$data_array = array(
    "event" => $event,
);

$make_call = callAPI('POST', 'http://localhost:3000/event/join', json_encode($data_array));
$response = json_decode($make_call, true);


if ($response["message"] == "tu es bien inscrit") {

    header('Location: Evenements_act.php');
    exit();
} else if ($response["message"] ==  "tu es déjà inscrit à cet évènement !") {
    header('Location: evenements_act.php');
    exit();
} else {
    header('Location: evenements_act.php');
    exit();
}
