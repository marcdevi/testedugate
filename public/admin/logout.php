<?php 
session_start();
$title = 'Dashboard';
require '../../vendor/autoload.php';
require '../../app/models/function.php';
use App\Database;

$db = new Database('testedugate'); 

session_destroy();
header('location: dashboard.php');


?>