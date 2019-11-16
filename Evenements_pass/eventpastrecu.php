<?php
require '../Curl/configuration/curlconf.php';
require '../Curl/configuration/curlconf2.php';

$get_data = callAPI('GET', 'http://localhost:3000/event/passe', false);
$response = json_decode($get_data, true);

$make_calls = callAPI1('GET', 'http://localhost:3000/comment/liste', false);
$respont = json_decode($make_calls, true);

//echo $response["évènements"][0]["évènement"];
if ($response["message"] == "Liste des évènements passés") {


  for ($i = 0; $i < count($response["évènements"]); $i++) {

    $nom = $response["évènements"][$i]["évènement"];
    $description = $response["évènements"][$i]["Description"];
    $URLL = $response["évènements"][$i]["URL"];

    echo ' <div class="card">
    <div id="carouselExampleIndicators' . $i . '" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">

      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="caroussel_img carouf" src="' . $URLL . '" height="300px" width="100%" alt="First slide">
          <br />
          <br />
          </div>';

    for ($j = 0; $j < count($response["photo"]); $j++) {
      $URL = $response["photo"][$j]["URL"];
      $parent = $response["photo"][$j]["évènement"];

      if ($parent == $nom) {
        echo '<div class="carousel-item">
        <img class="caroussel_img carouf" src="' . $URL . '" height="300px" width="100%" alt="Second slide">
                <form action="./liker.php" method="POST">
                <input hidden  type="text" name="photo" value="' . $URL . '">
                <button  class="btn btn-primary">aime cette photo</button>
                </form>
                <br />
                <br /> ';

        for ($k = 0; $k < count($respont["photos"]); $k++) {
          $mon = $respont["photos"][$k]["Nom"];
          $prenom = $respont["photos"][$k]["Prenom"];
          $test = $respont["photos"][$k]["Évènement"];
          $commentaire = $respont["photos"][$k]["Commentaire"];
          $URLC = $respont["photos"][$k]["URL"];

          if ($URL == $URLC) {
            echo '
      <h5 class="card-text">' . $mon . ' ' . $prenom . '</h5>
      <p class="card-text">' . $commentaire . '</p>';
          }
        }
        echo '</div>';
      }
    }
    echo '</div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators' . $i . '" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators' . $i . '" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      <!--<img src="C:/Users/hp/Desktop/ProjetWEB/Siteweb/img/IMG_3652.jpg" class="card-img-top" alt="...">-->
      <div class="card-body">
        <h5 class="card-title">' . $nom . '</h5>
        <p class="card-text">' . $description . '</p>
        <a href="../Ajout_photo/form_admin.php" class="btn btn-primary">Ajouter une photo</a>
      </div>
    </div>
    <br />';
  }
} else {

  echo $response["message"];
}
