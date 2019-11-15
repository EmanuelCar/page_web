<!DOCTYPE html">
<html lang="fr-FR">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="C:\Users\hp\Desktop\Projet WEB\Site web\assets\Vendors\bootstrap\css\bootstrap.min.css" />
    <link rel="stylesheet" href="./form_admin.css" media="screen" type="text/css" />


    <title>Inscription</title>
</head>

<body>

    <div id="container">
        <form action="#" method="POST">
            <h2>Ajout d'articles</h2>
            <br>
            Nom de l'article : <input name="nom" size=auto required>
            <P>
                <br>
                Descrition : <input name="description" required>
                <P>


                    <div>
                        <label for="pass">Url de l'image :</label>
                        <input type="password" id="pass" name="url_img" minlength="8" required>
                    </div>
                    <br>

                    <input type="submit" id='submit' value="Ajouter l'article">
                    Pour plus d'informations : Voici le site <a href="https://ecole-ingenieurs.cesi.fr/?gclid=Cj0KCQiAno_uBRC1ARIsAB496IUO56PHadiYz-OaMpSMqOPzCC4Ww4kW9AwRCaDkbqefS_sdKOyL0qcaAnM-EALw_wcB"> CESI</a>

                    <img src="file:///C:/Users/hp/Desktop/Projet%20WEB/Site%20web/img/logocesi.png" alt="img_cesi" height="50" width="150">

        </form>

    </div>

</body>
<script src="C:\Users\hp\Desktop\Projet WEB\Site web\assets\Vendors\bootstrap\js\jquery.js"></script>
<script src="C:\Users\hp\Desktop\Projet WEB\Site web\assets\Vendors\bootstrap\js\bootstrap.min.js"></script>

</html>