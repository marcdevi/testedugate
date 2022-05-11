<?php 

if(isConnected()) {
    $id = $_SESSION['userid'];
    $compte = showCompteById($db, $id);
    if (
        isset($_POST['poste']) && 
        isset($_POST['nom_entreprise']) && 
        isset($_POST['annee']) &&
        isset($_POST['lieu'])) {
        $poste = htmlspecialchars(trim($_POST['poste']));
        $nom_entreprise = htmlspecialchars(trim($_POST['nom_entreprise']));
        $annee = htmlspecialchars(trim($_POST['annee']));
        $lieu = htmlspecialchars(trim($_POST['lieu']));
        $description = htmlspecialchars(trim($_POST['description']));
        $data = [
            "poste" => $poste,
            "nom_entreprise" => $nom_entreprise,
            "annee" => $annee,
            "lieu" => $lieu,
            "description" => $description,
            "id" => $id,
        ];
        addExperience($db, $data);
        header('location: profil.php');
    }
} else {
    header('location: login.php');
}
