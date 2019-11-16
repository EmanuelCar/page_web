<?php

require 'configuration/curlconf3.php';
$choix = 0;

if($_POST['submit']) {

    $choix = !empty($_POST['tri']) ? trim($_POST['tri']) : null;

    if($choix == 2) {
        $get_data = callAPI('GET', '169.254.168.183:3000/article/tri/prix', false);
        $response = json_decode($get_data, true);

        if ($response["message"] == "Le tri par prix est effectif") {
            $nbr = count($response["articles"]);

        echo '<section>
        <div class="container-fluid mx-0 pl-4">
            <div class="row ox-image ox-align-center ox-margin-bottom-medium">
                <div class="col-lg-1 col-xs-12 col-md-2 p-2 bloc my-2">
                    <p style="text-align: right; font-size:x-large"> Nos Articles disponibles </p>
                </div>';

            for($i = 0; $i<$nbr; $i++) {
                $noma = $response["articles"][$i]["Nom"];
                $prix = $response["articles"][$i]["Prix"];
                $description = $response["articles"][$i]["Description"];
                $categorie = $response["articles"][$i]["Categorie"];
                $urla = $response["articles"][$i]["URL"];
            
        echo '
        <div class="col-lg-2 col-xs-12 col-md-4 p-2 bloc my-2">
                <article class="card">
                    <img src="'.$urla.'" class="objet">
                    <div class="card-body">
                        <h5>'.$noma.'</h5>
                        <p>'.$description.'</p>
                        <a href="#" class="btn btn-primary">Ajouter au panier</a>
                        <p>'.$prix.' €</p>
                    </div>
                </article>
            </div>
        <div class="col-lg-1 col-xs-12 col-md-2 p-2 bloc my-2"> </div>
        ';
            } 
        
        echo '</div>
            </div>
        </section>
        ';
        } else {
            echo $response["message"];
        }

    } else if($choix == 3) {
        $get_data = callAPI('GET', '169.254.168.183:3000/article/tri/categorie', false);
        $response = json_decode($get_data, true);

        $get_data2 = callAPI2('GET', '169.254.168.183:3000/article/categorie/liste', false);
        $response2 = json_decode($get_data2, true);

        if ($response["message"] == "Le tri par catégorie est effectif") {
            $nbr = count($response2["catégories"]);

            for($j = 0; $j<$nbr; $j++){
                $categorieu = $response2["catégories"][$j]["Nom"];
                echo'<h4>Nos '.$categorieu.' :</4>';

                for($i = 0; $i<$nbr; $i++) {
                    $noma = $response["articles"][$i]["Nom"];
                    $prix = $response["articles"][$i]["Prix"];
                    $description = $response["articles"][$i]["Description"];
                    $urla = $response["articles"][$i]["URL"];
                    $categoriea = $response["articles"][$i]["Categorie"];

                    if($categoriea == $categorieu)
                    {
                        echo '
                        <div class="col-lg-2 col-xs-12 col-md-4 p-2 bloc my-2">
                                <article class="card">
                                    <img src="'.$urla.'" class="objet">
                                    <div class="card-body">
                                        <h5>'.$noma.'</h5>
                                        <p>'.$description.'</p>
                                        <a href="#" class="btn btn-primary">Ajouter au panier</a>
                                        <p>'.$prix.' €</p>
                                    </div>
                                </article>
                            </div>
                        <div class="col-lg-1 col-xs-12 col-md-2 p-2 bloc my-2"> </div>
                        ';
                    }
                }
            } 
        } else {
            echo $response["message"];
        }
    } else if($choix == 1){
        include "Articles.php";
    }
}

if($choix == 0) {
    include "Articles.php";
}
?>
