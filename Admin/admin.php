<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> Boutique du BDE </title>
	<link rel="icon" href="../favicon.png">
	<link rel="stylesheet" href="../assets/vendors/bootstrap/bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="./boutique.css">
</head>


<header>
	<!--Navbar-->
	<?php if($_COOKIE['connecté'] == 1 && $_COOKIE['statut'] == 'etudiant' || $_COOKIE['statut'] == 'personnel'){
    include "../Navbar_log.php";
  } else if ($_COOKIE['connecté'] == 1 && $_COOKIE['statut'] == 'membre'){
    include "../Navbar_admin_log.php";
  } else {
    include "../Navbar.php";} ?>
</header>

<body>
		<!-- L'en-tête -->    
		<?php if($_COOKIE['statut'] == 'membre') {?>
		<header>
    <h1><strong>Membre BDE</strong>[Admin]</h1>
    </header>

        <!-- Le corps -->
        <div id="corps">

            <!-- Le contenu --> 
            <div id="contenu">

            <div id="wrapper" style="min-height: 50px;"><h1> Articles</h1></div>
                <div id="barre_boutons_admin">
                    <a href="../Ajout_article/form_admin.php"><div class="bouton_admin"> <div style="height:50px;"></div>
                    Ajouter un article </div></a>
                    <a href="../Boutique/boutique_admin.php"><div class="bouton_admin"> <div style="height:50px;"></div>
                    Supprimer un article</div></a>
                    <a href="../Ajout_categorie/form_admin.php"><div class="bouton_admin"> <div style="height:50px;"></div>
					Ajouter une catégorie </div></a>
				</div>
			</div>

			<div id="contenu">
				<div id="wrapper" style="min-height: 50px;"><h1> Évènement</h1></div>
				<div id="barre_boutons_admin">
						<a href="../Ajout_event/form_admin.php"><div class="bouton_admin"> <div style="height:50px;"></div>
						Ajouter un évènement </div></a>
						<a href="../Invisible/invisibleevent.php"><div class="bouton_admin"> <div style="height:50px;"></div>
						Rendre invisible un évènement</div></a>
						<a href="../pdf_liste/liste.php"><div class="bouton_admin"> <div style="height:50px;"></div>
						Liste des inscrits (par évènement)</div></a>
					</div> 
			</div>

			<div id="contenu">
				<div id="wrapper" style="min-height: 50px;"><h1> Avis</h1></div>
				<div id="barre_boutons_admin">
						<a href="../Invisible/invisiblephoto.php"><div class="bouton_admin"> <div style="height:50px;"></div>
						Rendre invisible une photo </div></a>
						<a href="../Invisible/invisiblecom.php"><div class="bouton_admin"> <div style="height:50px;"></div>
						Rendre invisible un commentaire</div></a>
					</div> 
			</div>

			<div id="wrapper" style="min-height: 50px;"></div>

		</div>

		<?php } else if($_COOKIE['statut'] == 'personnel') { ?>
			<header>
    			<h1><strong>Personnel CESI</strong></h1>
			</header>
			<div id="corps">
				<div id="contenu">

					<div id="wrapper" style="min-height: 50px;"></div>
					<div id="barre_boutons_admin">
						<form id='myform' method="POST">
						<a href=""><div class="bouton_admin">
						<input type="submit" name="submit" value="Télécharger les photos"></input></div></a>
						</form>
					</div>
				</div>

				<?php include '../Personnel/dnlwphoto.php' ?>
				
				<div id="contenu">
					<div id="wrapper" style="min-height: 50px;"><h1> Signaler</h1></div>
					<div id="barre_boutons_admin">
							<a href="../Signaler/signalphoto.php"><div class="bouton_admin"> <div style="height:50px;"></div>
							Signaler une photo </div></a>
							<a href="../Signaler/signalcom.php"><div class="bouton_admin"> <div style="height:50px;"></div>
							Signaler un commentaire</div></a>
							<a href="../Signaler/signalevent.php"><div class="bouton_admin"> <div style="height:50px;"></div>
							Signaler un évènement</div></a>
						</div> 
				</div>
			</div>
		<?php } else {?>
			Vous n'êtes pas autorisé à accéder à ces éléments !
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<?php } ?>
</body>

<!-- Footer -->
<div>
	<?php include "../Footer.php" ?>
</div>

<!-- Scripts / JQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="../assets/vendors/bootstrap/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</html>