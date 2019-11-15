<!DOCTYPE html">
<html lang="fr-FR">

<head>
    <link rel="icon" href="../favicon.png">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="C:\Users\hp\Desktop\Projet WEB\Site web\assets\Vendors\bootstrap\css\bootstrap.min.css" />
    <link rel="stylesheet" href="./form_admin.css" media="screen" type="text/css" />
    <title>Ajout de photos</title>
</head>

<body>

    <div id="container">
        <form action="#" method="POST">
            <h2>Ajout de photos</h2>

            <br>
            <p> Nom de l'évenement passé : </p>
            <select name="event" id="event" required>
                <option value="" selected>Nom de l'évenement</option>
            </select>
            <P>


            <br>
            Url de l'image : <input name="url" size=auto required>
            <P>




            <input type="submit" id='submit' value="Ajouter l'article">
                <img src="../img/logo_cesi.png" alt="cesi" height=200px>
        </form>

    </div>

</body>
<script src="C:\Users\hp\Desktop\Projet WEB\Site web\assets\Vendors\bootstrap\js\jquery.js"></script>
<script src="C:\Users\hp\Desktop\Projet WEB\Site web\assets\Vendors\bootstrap\js\bootstrap.min.js"></script>

</html>