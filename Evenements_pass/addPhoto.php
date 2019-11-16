<?php

$nom = !empty($_POST['event']) ? trim($_POST['event']) : null;

require 'photosend.php';
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
            <h2>Ajoutez l'URL de votre photo</h2>
            <br>
            URl de la photo : <input type="URL" name="URL" size=auto required>
            <P>
            <input hidden  type="text" name="event" value="<?php echo $nom; ?>">
                <input type="submit" name='submit' value="Ajouter photo">
                <?php if ($response["message"] != "L'image a bien été ajoutée !") {
                                        echo $response["message"];
                                    } ?>
                <img src="../img/logo_cesi.png" alt="cesi" height=200px>
        </form>

    </div>

</body>
<script src="C:\Users\hp\Desktop\Projet WEB\Site web\assets\Vendors\bootstrap\js\jquery.js"></script>
<script src="C:\Users\hp\Desktop\Projet WEB\Site web\assets\Vendors\bootstrap\js\bootstrap.min.js"></script>

</html>