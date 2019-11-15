<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <link rel="icon" href="./favicon.png">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/vendors/bootstrap/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Connexion.css" media="screen" type="text/css" />
    <?php include "./assets/vendors/Curl/connexionsend.php" ?>
    <?php error_reporting(0); ?>
    <title>Connexion</title>
</head>

<body>
    <div id="container">
        <!-- zone de connexion -->

        <form method="POST">
            <h1>Connexion</h1>

            <label><b>E-mail utilisateur</b></label>
            <input type="text" placeholder="Entrez votre adresse-mail" name="email" required>
            <p id="tst"> <?php if ($response["message"] != "Mot de passe incorrect !") {
                                echo $response["message"];
                            } ?> <p>

                    <label><b>Mot de passe</b></label>
                    <input type="password" placeholder="Entrez votre mot de passe" name="password" required>
                    <p id="tst"> <?php if ($response["message"] != "Mail incorrect !") {
                                        echo $response["message"];
                                    } ?> <p>

                            <input type="submit" name='submit' value='Se connecter'>
                            Pas encore de compte ? <a href="./Inscription.php">Inscrivez-vous !</a>
                            <br>

                            Site officiel <a href="https://ecole-ingenieurs.cesi.fr/?gclid=Cj0KCQiAno_uBRC1ARIsAB496IUO56PHadiYz-OaMpSMqOPzCC4Ww4kW9AwRCaDkbqefS_sdKOyL0qcaAnM-EALw_wcB">CESI</a>
                            <br />

                            <img src="./img/logo_cesi.png" alt="img_cesi" height="200px">

        </form>
    </div>

</body>

<!-- Scripts / JQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="../assets/vendors/bootstrap/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

</html>