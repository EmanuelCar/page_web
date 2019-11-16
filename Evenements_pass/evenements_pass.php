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

  <div class="card">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">

      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="caroussel_img carouf" src="../img/IMG_3652.jpg" height="300px" width="100%" alt="First slide">
          <br />
          <br />
          <a href="#" class="btn btn-primary">J'aime cette photo</a>
        </div>
        <div class="carousel-item">
          <img class="caroussel_img carouf" src="../img/IMG_3669.jpg" height="300px" width="100%" alt="Second slide">
          <br />
          <br />
          <a href="#" class="btn btn-primary">J'aime cette photo</a>
        </div>
        <div class="carousel-item">
          <img class="caroussel_img carouf" src="../img/IMG_3715.jpg" height="300px" width="100%" alt="Third slide">
          <br />
          <br />
          <a href="#" class="btn btn-primary">J'aime cette photo</a>

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
    </div>

    <div class="card-body">
      <h5 class="card-title">Journée d'intégration</h5>
      <p class="card-text">Les étudiants en première année ont eu le droit à leur première journée d'intégration spécial "CESI" ! </p>
      <a href="#" class="btn btn-primary">Ajouter une photo</a>
    </div>
  </div>
  </div>

  <br />
  <div class="card">
    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators2">

      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="caroussel_img carouf" src="../img/pizza.png" height="300px" width="100%" alt="First slide">
          <br />
          <br />
          <a href="#" class="btn btn-primary">J'aime cette photo</a>
        </div>
        <div class="carousel-item">
          <img class="caroussel_img carouf" src="../img/IMG_3669.jpg" height="300px" width="100%" alt="Second slide">
          <br />
          <br />
          <a href="#" class="btn btn-primary">J'aime cette photo</a>
        </div>
        <div class="carousel-item">
          <img class="caroussel_img carouf" src="../img/IMG_3715.jpg" height="300px" width="100%" alt="Third slide">
          <br />
          <br />
          <a href="#" class="btn btn-primary">J'aime cette photo</a>

        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="card-body">
      <h5 class="card-title">Mardi Pizza</h5>
      <p class="card-text">Certains mardi, les membres du BDE vous propose de manger, au CESI, les pizzas de Nico, avec qui ils ont un partenariat </p>
      <a href="#" class="btn btn-primary">Ajouter une photo</a>
    </div>
  </div>
  <br />

</body>


<!-- Footer -->
<div>
	<?php include "../Footer.php" ?>
</div>


<!-- Scripts / JQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="../assets/vendors/bootstrap/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

</html>