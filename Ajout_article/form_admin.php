<!DOCTYPE html">
<html lang="fr-FR">

<head>
    <link rel="icon" href="../favicon.png">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="C:\Users\hp\Desktop\Projet WEB\Site web\assets\Vendors\bootstrap\css\bootstrap.min.css" />
    <link rel="stylesheet" href="./form_admin.css" media="screen" type="text/css" />
    <title>Ajout d'articles</title>
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

            <br>
            Prix : <input name="Prix" required>
            <P>

            <div>
                <label for="pass">Url de l'image :</label>
                <input type="url" id="pass" name="url_img" required>
            </div>
            <br>

            <?php include '../Curl/addarticle.php' ?>

            <input type="submit" id='submit' name="submit" value="Ajouter l'article">
                <img src="../img/logo_cesi.png" alt="cesi" height=200px>
        </form>

    </div>

</body>
<script src="C:\Users\hp\Desktop\Projet WEB\Site web\assets\Vendors\bootstrap\js\jquery.js"></script>
<script src="C:\Users\hp\Desktop\Projet WEB\Site web\assets\Vendors\bootstrap\js\bootstrap.min.js"></script>

</html>