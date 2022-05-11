<?php 

if(isConnected()) {
    $id = $_SESSION['userid'];
    $ide = $_GET['education'];
    $compte = showCompteById($db, $id);
    $compte_education = showEducation($db, $id, $ide);
    if (isset($_POST['nom_etablissement']) && isset($_POST['nom_diplome']) && isset($_POST['nom_diplome'])) {
        $nom_etablissement = htmlspecialchars(trim($_POST['nom_etablissement']));
        $nom_diplome = htmlspecialchars(trim($_POST['nom_diplome']));
        $annee = htmlspecialchars(trim($_POST['annee']));
        $data = [
            "nom_etablissement" => $nom_etablissement,
            "nom_diplome" => $nom_diplome,
            "annee" => $annee,
            "id" => $id,
            "ide" => $ide
        ];
        UpdateEducation($db, $data);
        header('location: profil.php');
    }
} else {
    header('location: login.php');
}
