<?php
$title = 'Dashboard';
require '../../vendor/autoload.php';
require '../../app/models/function.php';
$id = $_GET['demande'];
use App\Database;

$db = new Database('testedugate');

$demande = showDemande($db, $id);

$demande[0]['matiere'] = explode("|",$demande[0]['matiere']);
$demande[0]['matiere'] = $demande[0]['matiere'][0];
$matiere = $demande[0]['matiere'];
$nom = $demande[0]['nom'];
$message = $demande[0]['message'];

$datass = [
    "matiere" => $matiere
];

$prof = showCompteByMatiere($db, $datass);

$email = $prof[0]['email'];
addAssigne($db, $id);
require '../../app/controllers/AssigneController.php';
header('Location: dashboarddemande.php');


?>