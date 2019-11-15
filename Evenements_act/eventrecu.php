<?php


require '../assets/Vendors/Curl/curlconf.php';

$get_data = callAPI('GET', '10.154.128.76:3000/event/actuel', false);
$response = json_decode($get_data, true);


//echo $response["évènements"][0]["évènement"];
if ($response["message"] == "Liste des évènements actuels") {


    for ($i = 0; $i < count($response["évènements"]); $i++) {

        $nom = $response["évènements"][$i]["évènement"];
        $description = $response["évènements"][$i]["Description"];
        $url = $response["évènements"][$i]["URL"];
        $date = $response["évènements"][$i]["Date de début"];

        echo '
<div class="w3-card-4 w3-margin w3-white">
    <img class="img_event" src="' . $url . '" alt="Evenement">
    <div class="w3-container">
        <h3><b>' . $nom . '</b></h3>
        <h5>Date, <span class="w3-opacity">' . $date . '</span></h5>
    </div>

    <div class="w3-container">
        <p>' . $description . '</p>
        <div class="w3-row">
            <div class="w3-col m8 s12">
                <p><button class="w3-button w3-padding-large w3-white w3-border"><b>Inscription</b></button></p>
            </div>
        </div>
    </div>
</div>
<hr>
';
    }
} else {

    echo $response["message"];
}
