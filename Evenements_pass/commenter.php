<?php

$URL = !empty($_POST['comm']) ? trim($_POST['comm']) : null;

require 'commentersend.php';
?>

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
        <form  method="POST">
            <h2>Ajout votre commentaire</h2>
            <br>
            commentaire : <input name="nom" size=auto required>
            <P>
            <input hidden  type="text" name="comm" value="<?php echo $URL; ?>">
                <input type="submit" name='submit' value="Ajouter commentaire">
                <?php if ($response["message"] != "Commentaire ajouté !") {
                                        echo $response["message"];
                                    } ?>
                <img src="../img/logo_cesi.png" alt="cesi" height=200px>
        </form>

    </div>

</body>
<script src="C:\Users\hp\Desktop\Projet WEB\Site web\assets\Vendors\bootstrap\js\jquery.js"></script>
<script src="C:\Users\hp\Desktop\Projet WEB\Site web\assets\Vendors\bootstrap\js\bootstrap.min.js"></script>

</html>