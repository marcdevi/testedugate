<?php
$title = 'Dashboard';
require '../../vendor/autoload.php';
require '../../app/models/function.php';
$id = $_GET['demande'];
use App\Database;

$db = new Database('testedugate'); 

$query = $db->getPDO()->prepare('DELETE FROM demande WHERE id = :id');

$query->bindValue(':id', $id, PDO::PARAM_INT);

$query->execute();

header('Location: dashboarddemande.php');




?>