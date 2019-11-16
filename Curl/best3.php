<?php

require 'configuration/curlconf.php';

$get_data = callAPI('GET', '169.254.168.183:3000/article/best', false);
$response = json_decode($get_data, true);

if ($response["message"] == "Affichage du meilleur article") {

    $nom = $response["Article 1"]["Nom"];
    $quantite = $response["Article 1"]["Quantité"];
    $url = $response["Article 1"]["URL"];
    
    echo '<div class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="caroussel_img carouf" src="'. $url .'">
        </div>
    </div>
</div>
<br><br><br><br><br><br><br>
';

} else if ($response["message"] == "Affichage des 2 meilleurs articles") {

    $nom1 = $response["Article 1"]["Nom"];
    $quantite1 = $response["Article 1"]["Quantité"];
    $url1 = $response["Article 1"]["URL"];

    $nom2 = $response["Article 2"]["Nom"];
    $quantite2 = $response["Article 2"]["Quantité"];
    $url2 = $response["Article 2"]["URL"];

    echo '<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="caroussel_img carouf" src="'.$url1.'" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="caroussel_img carouf" src="'.$url2.'" alt="Second slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>';

} else if($response["message"] == "Affichage des 3 meilleurs articles"){
    $nom1 = $response["Article 1"]["Nom"];
    $quantite1 = $response["Article 1"]["Quantité"];
    $url1 = $response["Article 1"]["URL"];

    $nom2 = $response["Article 2"]["Nom"];
    $quantite2 = $response["Article 2"]["Quantité"];
    $url2 = $response["Article 2"]["URL"];

    $nom3 = $response["Article 3"]["Nom"];
    $quantite3 = $response["Article 3"]["Quantité"];
    $url3 = $response["Article 3"]["URL"];

    echo '<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="caroussel_img carouf" src="'.$url1.'" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="caroussel_img carouf" src="'.$url2.'" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="caroussel_img carouf" src="'.$url3.'" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>';
} else {
    $erreur = "Encore article n'a encore été commandé !";
}

?>
