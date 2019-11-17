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
  <?php //error_reporting(0); ?>
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
  <h4>Liste des photos actuellement visible : </h4>
  <br>
  <?php 
  require '../mail.php';
  require '../Curl/configuration/curlconf.php';

  $get_data = callAPI('GET', 'localhost:3000/photo/liste', false);
  $response = json_decode($get_data, true);

  for($i = 0; $i<count($response['photos']); $i++){
    $img = $response['photos'][$i]['URL'];
      echo '
        <img src="'.$img.'" style="width: 400px;">
        <form method="POST">
            <input type="hidden" name="photo" value="'.$img.'"></input>
            <input type="submit" name="submit" value="Signaler"></input>
        </form>
        <br><br>';
    }
    if (isset($_POST['submit'])) {
        $img = !empty($_POST['photo']) ? trim($_POST['photo']) : null;
        $result = smtpmailer('bdefakecesi@gmail.com', 'bdefakecesi@gmail.com', 'BDE personel', utf8_decode('Photo inapproprié'), 'Nous avons constaté que la photo '.$img.' n\'est pas approprié au sein de l\'établissement. Merci de bien vouloir le faire disparaitre. :)');
        if (true !== $result) {
          echo $result;
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