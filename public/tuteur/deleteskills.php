<?php
$title = 'Dashboard';
require '../../vendor/autoload.php';
require '../../app/models/function.php';
$id = $_GET['skills'];
$id_compte = $_GET['compte'];
use App\Database;


$db = new Database('testedugate'); 
if (!isConnected()) {
    header('Location: login.php');
}

$query = $db->getPDO()->prepare('DELETE FROM skills WHERE id = :id AND id_compte = :id_compte');

$query->bindValue(':id', $id, PDO::PARAM_INT);
$query->bindValue(':id_compte', $id_compte, PDO::PARAM_INT);

$query->execute();

header('Location: profil.php');




?>