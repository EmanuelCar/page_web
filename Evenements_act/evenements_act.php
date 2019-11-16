<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> Evenements actuels </title>
	<link rel="icon" href="../favicon.png">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="../assets/vendors/bootstrap/bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="./boutique.css">
	<?php error_reporting(0); ?>
</head>

<header>
	<!--Navbar-->
	<?php if($_COOKIE['connecté'] == 1 && $_COOKIE['statut'] == 'etudiant' || $_COOKIE['statut'] == 'personnel'){
    include "../Navbar_log.php";
  } else if ($_COOKIE['connecté'] == 1 && $_COOKIE['statut'] == 'membre'){
    include "../Navbar_admin_log.php";
  } else {
    include "../Navbar.php";} ?>



	<h1 style="margin-left:10px"><b>Evenements à venir</b></h1>
</header>



<body class="w3-light-grey">

	<!-- w3 créer le conteneur pour placer/centrer les évenements-->
	<div class="w3-content" style="max-width:1400px">

		<!-- Grille -->
		<div class="w3-row">
			<!-- Evenements -->

			<?php require "eventrecu.php"; ?>

			<!-- Fin évenements -->
		</div>


	</div>

	<!-- Fin grille -->
	</div><br>

	</div>

</body>



<footer>
	<?php include "../Footer.php" ?>
</footer>




<!-- Scripts / JQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="../assets/vendors/bootstrap/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>




</html>