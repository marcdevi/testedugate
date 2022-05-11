<?php
if(
    isset($_POST['nom']) && 
    isset($_POST['prenom']) &&
    isset($_POST['domicile']) &&
    isset($_POST['email']) &&
    isset($_POST['matiere']) &&
    isset($_POST['objet']) &&
    isset($_POST['tel']) &&
    isset($_POST['plagehoraire']) &&
    isset($_POST['date'])){
    $nom = htmlspecialchars(trim($_POST['nom']));
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    $domicile = htmlspecialchars(trim($_POST['domicile']));
    $email = htmlspecialchars(trim($_POST['email']));
    $matiere = $_POST['matiere'];
    if(is_array ($matiere)){
        $matiere = implode("|", $matiere);
    }
    $objet = htmlspecialchars(trim($_POST['objet']));
    $tel = htmlspecialchars(trim($_POST['tel']));
    $plagehoraire = htmlspecialchars(trim($_POST['plagehoraire']));
    $message = htmlspecialchars(trim($_POST['message']));
    $daten = htmlspecialchars(trim($_POST['date']));
    $date = str_replace("/", "-", $daten);
    $data = [
        "nom" => $nom,
        "prenom" => $prenom,
        "domicile" => $domicile,
        "email" => $email,
        "matiere" => $matiere,
        "objet" => $objet,
        "tel" => $tel,
        "plagehoraire" => $plagehoraire,
        "message" => $message,
        "date" => $date,
    ];
    if(isset($_POST['epcm'])) {
        $datass = ["email" => $email];
        addEpcm($db, $datass);
    }
    addDemande($db, $data);
    require 'ConfirmationDemandeController.php' ;
    header('Location: remerciment.php');
    } else {
        $error = 'Remplissez tous les champs';
    }