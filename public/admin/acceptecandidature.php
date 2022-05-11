<?php
$title = 'Dashboard';
require '../../vendor/autoload.php';
require '../../app/models/function.php';
$id = $_GET['candidature'];
use App\Database;

$db = new Database('testedugate'); 

$candidature = showCandidature($db, $id);
$email = $candidature[0]['email'];
$nom = $candidature[0]['nom'];
addAccepte($db, $id);
require '../../app/controllers/AcceptationController.php';
header('Location: dashboard.php');

?>