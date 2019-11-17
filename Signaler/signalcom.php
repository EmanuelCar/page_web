<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <link rel="icon" href="../favicon.png">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../assets/vendors/bootstrap/bootstrap-4.3.1-dist/css/bootstrap.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="../Admin/boutique.css">
  <title>BDE Cesi Nancy</title> <!-- Titre du site web -->
  <?php //error_reporting(0); 
  ?>
</head>

<header>
  <!--Navbar-->
  <?php if ($_COOKIE['connecté'] == 1 && $_COOKIE['statut'] == 'etudiant') {
    include "../Navbar_log.php";
  } else if ($_COOKIE['connecté'] == 1 && $_COOKIE['statut'] == 'membre' || $_COOKIE['statut'] == 'personnel') {
    include "../Navbar_admin_log.php";
  } else {
    include "../Navbar.php";
  } ?>
</header>

<body>
  <br><br>
  <h4>Liste des commentaires actuellement visible : </h4>
  <br>
  <?php
  require '../Curl/configuration/curlconf.php';
  require '../Curl/configuration/curlconf2.php';

  $get_data = callAPI('GET', 'localhost:3000/comment/liste', false);
  $response = json_decode($get_data, true);

  $get_data2 = callAPI1('GET', 'localhost:3000/event/liste', false);
  $response2 = json_decode($get_data2, true);

  if ($response2["message"] == "Liste des évènements") {
    for ($j = 0; $j < count($response2["évènements"]); $j++) {
      $eventu = $response2["évènements"][$j]["Nom"];
      echo "<h4>Commentaire sur l'évènement : " . $eventu . " :</h4>";

      for ($i = 0; $i < count($response['photos']); $i++) {
        $nom = $response['photos'][$i]['Nom'];
        $prenom = $response['photos'][$i]['Prenom'];
        $com = $response['photos'][$i]['Commentaire'];
        $event = $response['photos'][$i]['Évènement'];
        $img = $response['photos'][$i]['URL'];

        if ($event == $eventu) {
          echo '
                    <img src="' . $img . '" style="width: 400px;">
                    <h5>' . $prenom . ' ' . $nom . ' a commenté :</h5>
                    <p>' . $com . '</p>
                    <form method="POST">
                        <input type="hidden" name="commentaire" value="' . $com . '"></input>
                        <input type="submit" name="submit" value="Signaler"></input>
                    </form>
                    <br><br>';
        } else if($event == $eventu && $com == null) {
          
        }
      }
    }
    if (isset($_POST['submit'])) {
      $com = !empty($_POST['commentaire']) ? trim($_POST['commentaire']) : null;
      echo '' . $com . '';
    }
  }
  ?>
</body>

<!-- Footer -->
<div>
  <?php include "../Footer.php" ?>
</div>

<!-- Scripts / JQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="../assets/vendors/bootstrap/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<script src="/SiteWeb/cookiechoices.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function(event) {
    cookieChoices.showCookieConsentBar('Ce site utilise des cookies pour vous offrir le meilleur service. En poursuivant votre navigation, vous acceptez l’utilisation des cookies.', 'J’accepte', 'En savoir plus', 'cookie.php');
  });
</script>

</html>