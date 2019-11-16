<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <link rel="icon" href="./favicon.png">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./assets/vendors/bootstrap/bootstrap-4.3.1-dist/css/bootstrap.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="./Accueil/accueil.css">
  <title>BDE Cesi Nancy</title> <!-- Titre du site web -->
  <?php error_reporting(0); ?>
</head>

<header>
	<!--Navbar-->
  <?php   if($_COOKIE['connecté'] == 1 && $_COOKIE['statut'] == 'etudiant' || $_COOKIE['statut'] == 'personnel'){
    include "./Navbar_log.php";
  } else if ($_COOKIE['connecté'] == 1 && $_COOKIE['statut'] == 'membre'){
    include "./Navbar_admin_log.php";
  } else {
    include "./Navbar.php";} ?>
</header>

<body>

  <div id="cookieConsent">
      <div id="closeCookieConsent">x</div>
      Ce site utilise des cookies. <a href="#" target="_blank">More info</a>. <a class="cookieConsentOK">That's Fine</a>
  </div>

  <div id="viewport">
    <!-- Sidebar -->
    <div id="sidebar">
      <header>

        <img src="./img/lingenieur.png" alt="logocesi" width="100%">

      </header>
      <ul class="nav">

        <li>
          <a class="nav-link" href="./Evenements_pass/evenements_pass.php">Evènements passés</a>
        </li>

        <li>
          <a class="nav-link" href="./Evenements_act/evenements_act.php">Evènements actuels</a>
        </li>
      </ul>
      <img src="./img/logo.png" alt="bde" width="85%">
    </div>
    <!-- Content -->
    <div id="content">

      <div class="container-fluid">
        <br />
        <h1>Bienvenue sur le site officiel du BDE Cesi Nancy</h1>
        <p>
          <div style="text-align: center">
            <img src="./img/CESI_school.png" alt="cesipic" width="60%">
            <br />
            <br />
            <h3>L'objectif du BDE est de faire kiffer tous les étudiants pendant leur année à travers des évènements étudiants, des activités grâce aux clubs</h3>
            <br />
            <br />
            <br />
            <br />
            <br />
          </div>
        </p>
      </div>
    </div>
  </div>

</body>




<!-- Footer -->
<div>
	<?php include "./Footer.php" ?>
</div>

<!-- Scripts / JQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="./assets/vendors/bootstrap/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<script src="/SiteWeb/cookiechoices.js"></script>
<script>document.addEventListener('DOMContentLoaded', function(event){cookieChoices.showCookieConsentBar('Ce site utilise des cookies pour vous offrir le meilleur service. En poursuivant votre navigation, vous acceptez l’utilisation des cookies.', 'J’accepte', 'En savoir plus', 'cookie.php');});</script>
</html>