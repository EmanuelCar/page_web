<!DOCTYPE html">
<html lang="fr-FR">

<head>
    <link rel="icon" href="../favicon.png">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="C:\Users\hp\Desktop\Projet WEB\Site web\assets\Vendors\bootstrap\css\bootstrap.min.css" />
    <link rel="stylesheet" href="./form_admin.css" media="screen" type="text/css" />
    <title>Ajout de catégories</title>
</head>

<body>

    <div id="container">
        <form action="#" method="POST">
            <h2>Ajout de la catégorie</h2>
            <br>
            Nom de la catégorie : <input name="nom" required>
            <P>
            <input type="submit" name="submit" value="Ajouter la catégorie">
                <img src="../img/logo_cesi.png" alt="cesi" height=200px>
        </form>
        <?php include '../Curl/addcategorie.php' ?>
    </div>

</body>

</html>
