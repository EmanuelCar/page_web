<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <link rel="icon" href="../favicon.png">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../assets/vendors/bootstrap/bootstrap-4.3.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="evenements_pass.css" />
  <title>Evènements passés</title> <!-- Titre du site web -->
  <?php error_reporting(0); ?>
</head>


<header>
  <?php   if($_COOKIE['connecté'] == 1 && $_COOKIE['statut'] == 'etudiant' || $_COOKIE['statut'] == 'personnel'){
    include "../Navbar_log.php";
  } else if ($_COOKIE['connecté'] == 1 && $_COOKIE['statut'] == 'membre'){
    include "../Navbar_admin_log.php";
  } else {
    include "../Navbar.php";} ?>
</header>

<body>

  <div class="card cardt justify-content-center">
    <img src="../img/Eventbanneer.png" alt="banneer" style="width:100%">
    <div class="container">
      <h4><b>BIENVENUE DANS LES ARCHIVES EVENEMENTIELLES DU BDE</b></h4>
      <h6>Vous trouverez ci-dessous les différents évènements passés durant cette année.</h6>
    </div>
  </div>
  <br>

  <h1>Nos plus gros succès !!</h1>
  <br />

  <?php include './eventpastrecu.php' ?>

 

</body>


<!-- Footer -->
<div>
	<?php include "../Footer.php" ?>
</div>


<!-- Scripts / JQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="../assets/vendors/bootstrap/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

</html>