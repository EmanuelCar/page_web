<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <link rel="icon" href="../favicon.png">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../assets/vendors/bootstrap/bootstrap-4.3.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./accueil.css">
  <title>BDE Cesi Nancy</title> <!-- Titre du site web -->
</head>

<header>
	<!--Navbar-->
	<?php include "../Navbar.php" ?>
</header>



<body>
  <div id="viewport">
    <!-- Sidebar -->
    <div id="sidebar">
      <header>

        <img src="../img/lingenieur.png" alt="logocesi" width="100%">

      </header>
      <ul class="nav">

        <li>
          <a class="nav-link" href="‪../../../Evenements_pass/evenements_pass.php">Evènements passés</a>
        </li>

        <li>
          <a class="nav-link" href="../Evenements_act/evenements_act.php">Evènements du mois</a>
        </li>
      </ul>
      <img src="../img/logo.png" alt="bde" width="170">
    </div>
    <!-- Content -->
    <div id="content">

      <div class="container-fluid">
        <br />
        <h1>Bienvenue sur le site officiel du BDE Cesi Nancy</h1>
        <p>
          <div style="text-align: center">
            <img src="../img/CESI_school.png" alt="cesipic" width="60%">
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
	<?php include "../Footer.php" ?>
</div>

<!-- Scripts / JQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="../assets/vendors/bootstrap/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</html>