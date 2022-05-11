<?php 
$id = $_GET['compte'];
$demandeid = $_GET['demande'];
$compte = showCompteById($db, $id);
$compte_about = showAboutById($db, $id);
$compte_education = showEducationById($db, $id);
$compte_experience = showExperienceById($db, $id);
$compte_skills = showSkillsById($db, $id);
$demande = showDemande($db, $demandeid);
$nomdemande = $demande[0]['nom'];
$numerodemande = $demande[0]['tel'];
$emailP = $demande[0]['email'];
$emailPf = $compte[0]['email'];
if (isset($_POST['choisir'])) {
    require 'ConfirmationSelectionController.php';
    require 'ConfirmationSelectionPController.php';
    header('location: remerciment.php');
}

