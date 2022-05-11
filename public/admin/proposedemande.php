<?php
$title = 'Dashboard';
require '../../vendor/autoload.php';
require '../../app/models/function.php';
$id = $_GET['demande'];
use App\Database;

$db = new Database('testedugate'); 

$demande = showDemande($db, $id);

$demandeid = $demande[0]['id'];
$demande[0]['matiere'] = explode("|",$demande[0]['matiere']);
$demande[0]['matiere'] = $demande[0]['matiere'][0];
$matiere = $demande[0]['matiere'];
$nom = $demande[0]['nom'];
$message = $demande[0]['message'];
$ville = $demande[0]['domicile'];
$email = $demande[0]['email'];

$datass = [
    "matiere" => $matiere,
    "ville" => $ville
];

$profs = getCompteByMatiere($db, $datass);

if (count($profs)>0) {
    $profid1 = $profs[0]['id'];
    $profnom1 = $profs[0]['nom'];
    $proposition1 = "<a href=\"http://testedugate.test/parent/selection.php?compte=$profid1&demande=$demandeid\">$profnom1</a>";
    if (count($profs)>1) {
        $profid2 = $profs[1]['id'];
        $profnom2 = $profs[1]['nom'];
        $proposition2 = "<a href=\"http://testedugate.test/parent/selection.php?compte=$profid2&demande=$demandeid\">$profnom2</a>";
        if (count($profs)>2) {
            $profid3 = $profs[2]['id'];
            $profnom3 = $profs[2]['nom'];
            $proposition3 = "<a href=\"http://testedugate.test/parent/selection.php?compte=$profid3&demande=$demandeid\">$profnom3</a>";
        }
    }
}
addPropose($db, $id);      

require '../../app/controllers/ProposeController.php';
header('Location: dashboarddemande.php');


?>