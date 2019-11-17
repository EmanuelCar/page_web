<?php

require 'configuration/curlconf.php';
require 'configuration/curlconf2.php';

$get_data = callAPI('GET', 'localhost:3000/article', false);
$response = json_decode($get_data, true);

if ($response["message"] == "Récupération des articles réussi") {
    $nbr = count($response["articles"]);
    
    for($i = 0; $i<$nbr; $i++) {
        $noma = $response["articles"][$i]["Nom"];
        $prix = $response["articles"][$i]["Prix"];
        $description = $response["articles"][$i]["Description"];
		$urla = $response["articles"][$i]["URL"];

		echo '
			<div class="col-lg-2 col-xs-12 col-md-4 p-2 bloc my-2">
				<article class="card">
					<img src="'.$urla.'" class="objet">
					<div class="card-body">
						<h5>'.$noma.'</h5>
						<p>'.$prix.' €</p>
						<form method="POST">
							<input hidden type="text" name="article" value="'. $noma .'" >
							<input type="submit" name="submit" value="Supprimer"></input>
						</form>
					</div>
				</article>
			</div>

			<div class="col-lg-1 col-xs-12 col-md-2 p-2 bloc my-2"> </div>
		';
	}

	if (isset($_POST['submit'])) {
		$article = !empty($_POST['article']) ? trim($_POST['article']) : null;

		$data_array = array(
			"article" => $article,
		);

		$get_data2 = callAPI1('POST', 'localhost:3000/article/suppr', json_encode($data_array));
		$response2 = json_decode($get_data2, true);

		if ($response2["message"] == "L'article a bien été supprimé !"){
			header('Location: /SiteWeb/Boutique/boutique.php');
		} else {
			echo $response2["message"];
		}

	  }

} else {
	echo $response["message"];
}

?>
