<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Evenement </title>
  <link rel="icon" href="../favicon.png">
  <link rel="stylesheet" href="../assets/vendors/bootstrap/bootstrap-4.3.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="sample_evt1.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>



<header>
  <!--Navbar-->
  <?php include "../Navbar.php" ?>

  <!-- Bandeau -->
  <img class="Bandeau" src="../img/boutique.png">
</header>

<body>

  <!-- Contact/Area Container -->
  <div class="w3-container" id="where" style="padding-bottom:32px;">
    <div class="w3-content" style="max-width:700px">
      <img src="../img/arbre.png" class="w3-image" style="width:100%">
      <h5 class="w3-center w3-padding-48"><span>NOM EVENT</span></h5>
      <p>Find us at some address at some place.</p>
      <p style="text-align:justify"> Ceci est une description de l'évenement Ceci est une description de l'évenement Ceci est une description de l'évenement Ceci est une description de l'évenement Ceci est une description de l'évenement Ceci est une description de l'évenement Ceci est une description de l'évenement</p>

      <!-- Form inscription a l'event -->
      <form method="post" action="scriptConnexion.php" autocomplete="on">
        <h1>Connexion</h1>
        <p>
          <label for="username" class="uname" data-icon="u"> Pierre : </label>
          <input id="username" name="pseudo" required="required" type="text" placeholder="Prenom" required />
        </p>
        <p>
          <label for="username" class="uname" data-icon="u"> Nom : </label>
          <input id="username" name="pseudo" required="required" type="text" placeholder="Nom" required />
        </p>
        <p>
          <label for="username" class="uname" data-icon="u"> Email : </label>
          <input id="username" name="pseudo" required="required" type="text" placeholder="Email" required />
        </p>
        <p class="login button">
          <input type="submit" value="Connexion" />
        </p>
      </form>
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