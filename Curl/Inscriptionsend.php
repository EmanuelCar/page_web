<?php

require 'configuration/curlconf.php';

if(isset($_POST['charte'])){
    if (isset($_POST['submit'])) {

        $nom = !empty($_POST['nom']) ? trim($_POST['nom']) : null;
        $prenom = !empty($_POST['prenom']) ? trim($_POST['prenom']) : null;
        $mail = !empty($_POST['email']) ? trim($_POST['email']) : null;
        $lieu = !empty($_POST['campus']) ? trim($_POST['campus']) : null;
        $password = !empty($_POST['password']) ? trim($_POST['password']) : null;
    
        $data_array = array(
            "nom" => $nom,
            "prenom" => $prenom,
            "mail" => $mail,    
            "password" => $password,
            "lieu" => $lieu
            
        );
    
        $make_call = callAPI('POST','169.254.168.183:3000/user/inscription',json_encode($data_array));
        $response = json_decode($make_call,true);

        $yes = $response["message"];
        
        if ($yes ==  "Compte créé avec succès !"){
            header('Location: /SiteWeb/');
        }
    }

} 