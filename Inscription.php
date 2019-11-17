<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <link rel="icon" href="./favicon.png">
  <meta charset="utf-8" />
  <link rel="stylesheet" href="./assets/vendors/bootstrap/bootstrap-4.3.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="Inscription.css" media="screen" type="text/css" />
  <?php require './Curl/Inscriptionsend.php'; ?>
  <?php error_reporting(0); ?>
  <title>Inscription</title>
</head>

<body>

  <div id="container">
    <form action="#" method="POST" id="formulaire" onsubmit="return checkCheckBoxes(this);">
      <h2>Inscription</h2>
      <br>
      Votre prénom : <input type="text" name="prenom" required>
      <P>
        <br>
        Votre nom : <input type="text" name="nom" required>
        <P>
          <br>
          Votre adresse mail : <input type="email" name="email" id="email" required>
          <p id="tst"> <?php if($response["message"] == "Un compte avec cette adresse existe déjà !") {echo $response["message"];} ?> <p>
          <P>
            <br>
            Votre campus :
            <select name="campus" id="Localisation" required>
              <option value="" selected>choisissez votre campus</option>
              <option value="23">Aix-en-Provence</option>
              <option value="5">Angoulême</option>
              <option value="1">Arras</option>
              <option value="19">Bordeaux</option>
              <option value="6">Brest</option>
              <option value="2">Caen</option>
              <option value="11">Chateauroux</option>
              <option value="15">Dijon</option>
              <option value="24">Grenoble</option>
              <option value="7">La Rochelle</option>
              <option value="10">Le Mans</option>
              <option value="3">Lille</option>
              <option value="25">Lyon</option>
              <option value="20">Montpellier</option>
              <option value="16">Nancy</option>
              <option value="8">Nantes</option>
              <option value="26">Nice</option>
              <option value="12">Orléans</option>
              <option value="13">Paris la Défense</option>
              <option value="14">Paris Nanterre</option>
              <option value="21">Pau</option>
              <option value="17">Reims</option>
              <option value="4">Rouen</option>
              <option value="9">Saint-Nazaire</option>
              <option value="18">Strasbourg</option>
              <option value="22">Toulouse</option>
            </select>
            <P>

              <br>

              <div>
                <label for="pass">Mot de passe :</label>
                <input type="password" id="pass" name="password">
                <p id="tst"> <?php if($response["message"] == "Le mot de passe doit contenir au moins 8 caractères !" || $response["message"] == "Le mot de passe doit contenir au moins une lettre minuscule, une majuscule et un chiffre !") {echo $response["message"];} ?> <p>
              </div>

              <br>

              <input type="checkbox" id="coding" name="charte" value="coding">
              <label for="coding">J'accepte les <a href="https://www.cesi.fr/mentions-legales/?_ga=2.19265146.357276929.1573473250-1279955483.1573032950&_gac=1.152459851.1573473250.Cj0KCQiAno_uBRC1ARIsAB496IUO56PHadiYz-OaMpSMqOPzCC4Ww4kW9AwRCaDkbqefS_sdKOyL0qcaAnM-EALw_wcB"> Conditions Générales D'utilisation</a>, <a href="https://www.cesi.fr/politique-de-confidentialite/?_ga=2.165462719.1686028456.1573998765-1279955483.1573032950&_gac=1.56938200.1573998765.CjwKCAiA_MPuBRB5EiwAHTTvMc8biD6aHlYOR_R0l2R8UcdhMSBgzZmKfbSKKBTpDWIb27GUm0UkmRoCBR4QAvD_BwE"> Mentions légales</a></label>

              <br>

              <input type="submit" name='submit' value="S'inscrire">
              <script>
                function checkCheckBoxes(theForm) {
                  if (theForm.charte.checked == false) {
                    alert("Vous devez accepter les conditions générales d'utilisation !");
                    return false;
                  } else {
                    return true;
                  }
                }
              </script>

              <br>
              Pour plus d'informations : Retrouvez ici le site <a href="https://ecole-ingenieurs.cesi.fr/?gclid=Cj0KCQiAno_uBRC1ARIsAB496IUO56PHadiYz-OaMpSMqOPzCC4Ww4kW9AwRCaDkbqefS_sdKOyL0qcaAnM-EALw_wcB"> CESI</a>
              <br>
              <br>
              Si vous faites parti du personnel ou êtes un membre du bde, veuillez contacter nous contacter par mail :<a href="bdefakecesi@gmail.com"> CESI</a>
              <br>
              <img src="./img/logocesi.png" alt="img_cesi" height="100px">

    </form>

  </div>

</body>


<!-- Scripts / JQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="./assets/vendors/bootstrap/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

</html>