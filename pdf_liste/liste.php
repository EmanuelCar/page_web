

<!DOCTYPE html">
<html lang="fr-FR">

<head>
    <link rel="icon" href="../favicon.png">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="C:\Users\hp\Desktop\Projet WEB\Site web\assets\Vendors\bootstrap\css\bootstrap.min.css" />
    <link rel="stylesheet" href="./form_admin.css" media="screen" type="text/css" />
    <title>participant à un évènement</title>
</head>

<body>

    <div id="container">
        <form action="PDFgenerator.php" method="POST">
            <h2>participant à un évènement</h2>
            <br>
            
            <?php
            require '../CURL/configuration/curlconf.php';
$get_data = callAPI('GET', 'localhost:3000/event/liste', false);
$response = json_decode($get_data, true);
$nbr = count($response["évènements"]);
$i = 0;

echo'<select name="recup" id="recup" required>';

    for($j = 0; $j<$nbr; $j++) {
        $event = $response["évènements"][$j]["Nom"];
        echo'<option value="'.$event.'" selected>'.$event.'</option>';
    }
echo'</select>';

?>

<input type="submit" id='submit' name="submit" value="liste des participant">
                <img src="../img/logo_cesi.png" alt="cesi" height=200px>
        </form>
        <?php include '../Curl/addcategorie.php' ?>
    </div>

</body>

</html>
