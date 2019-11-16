<?php 

require("../assets/vendors/fpdf181/fpdf.php");

require('../CURL/configuration/curlconf.php');
 

class PDF extends FPDF
{
// En-tête
function Header()
{
    
    $event = $_POST['recup'];
   
    // Logo
    // Police Arial gras 15
    $this->SetFont('Arial','B',15);
    // Décalage à droite
    // Titre
    $this->Cell(0,10,utf8_decode("Liste des participant à l'évènement: ").$event,1,0,'C');
    // Saut de ligne
    $this->Ln(20);
}

// Pied de page
function Footer()
{
    // Positionnement à 1,5 cm du bas
    $this->SetY(-15);
    // Police Arial italique 8
    $this->SetFont('Arial','I',8);
    // Numéro de page
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}



// Instanciation de la classe dérivée
$event = !empty($_POST['recup']) ? trim($_POST['recup']) : null;
$data_array = array(
    "event" => $event,
);

$make_call = callAPI('POST', 'localhost:3000/event/participant', json_encode($data_array));
$response = json_decode($make_call, true);
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
for($i=0;$i<count($response["participants"]);$i++){
$nom = $response["participants"][$i]["Nom"];
$prenom = $response["participants"][$i]["Prenom"];
$pdf->Cell(0,10,$nom." ".$prenom,0,1);
}
$pdf->Output();
?>