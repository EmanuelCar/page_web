<?php

require 'configuration/curlconf.php';

if (isset($_POST['submit'])) {

    $mail = !empty($_POST['email']) ? trim($_POST['email']) : null;
    $password = !empty($_POST['password']) ? trim($_POST['password']) : null;

    $data_array = array(
        "mail" => $mail,
        "password" => $password,
    );

<<<<<<< HEAD
    $make_call = callAPI('POST', 'localhost:3000/user/connection', json_encode($data_array));
=======
    $make_call = callAPI('POST', '169.254.168.183:3000/user/connection', json_encode($data_array));
>>>>>>> 2b62419952fa8263937c48d78a51dffdcf859182
    $response = json_decode($make_call, true);

    if ($response["message"] == "Vous êtes bien connecté !") {
        $yes = $response["token"];
        $non = $response["Id_user"];
        $maybe = $response["role"];

        setcookie("tokenCookie", $yes);
        setcookie("tokenCookie", $yes, time() + 3600);
        setcookie("statut", $maybe);
        setcookie("statut", $maybe, time() + 3600);
        setcookie("connecté", 1);
        setcookie("connecté", 1, time() + 3600);

        /*echo $_COOKIE["tokenCookie"];
        echo $_COOKIE["statut"];*/
        header('Location: /SiteWeb/');
    }
} else {
    setcookie("connecté", 0);
}
