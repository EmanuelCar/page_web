<!DOCTYPE html">
<html lang="fr-FR">

<head>
    <link rel="icon" href="../favicon.png">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="C:\Users\hp\Desktop\Projet WEB\Site web\assets\Vendors\bootstrap\css\bootstrap.min.css" />
    <link rel="stylesheet" href="./form_admin.css" media="screen" type="text/css" />
    <title>Ajout d'un évènement</title>
</head>

<body>

    <div id="container">
        <form action="#" method="POST">
            <h2>Ajout d'un évènement</h2>
            <br>
            Nom de l'évenement : <input name="nom" size=auto required>
            <P>

            <br>
            Description : <input name="description" size=auto required>
            <P>

            <br>
            Url image : <input type="url" name="url" size=auto required>
            <P>

            <br>
            Date de début d'évenement : <input type="date" id="start" name="debut_event" value="" min="2018-01-01" max="2099-12-31">
            <P>

            <br>
            Date de fin d'évenement : <input type="date" id="end" name="fin_event" value="" min="2018-01-01" max="2099-12-31">
            <P>

            <input type="submit" name='submit' value="Ajouter l'évènement">
                <img src="../img/logo_cesi.png" alt="cesi" height=200px>
        </form>

        <?php include '../Curl/addevent.php' ?>

    </div>

</body>
<script src="C:\Users\hp\Desktop\Projet WEB\Site web\assets\Vendors\bootstrap\js\jquery.js"></script>
<script src="C:\Users\hp\Desktop\Projet WEB\Site web\assets\Vendors\bootstrap\js\bootstrap.min.js"></script>

</html>