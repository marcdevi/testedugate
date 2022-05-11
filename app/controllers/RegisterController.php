<?php
if(
    isset($_POST['nom']) && 
    isset($_POST['prenom']) &&
    isset($_POST['domicile']) &&
    isset($_POST['poste']) && 
    isset($_POST['email']) &&
    isset($_POST['tel']) &&
    isset($_POST['matiere']) &&
    isset($_POST['dispo']) &&
    isset($_POST['profession']) &&
    isset($_FILES['cv'])){
    $nom = htmlspecialchars(trim($_POST['nom']));
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    $domicile = htmlspecialchars(trim($_POST['domicile']));
    $poste = htmlspecialchars(trim($_POST['poste']));
    $email = htmlspecialchars(trim($_POST['email']));
    $tel = htmlspecialchars(trim($_POST['tel']));
    $matiere = htmlspecialchars(trim($_POST['matiere']));
    $dispo = htmlspecialchars(trim($_POST['dispo']));
    $profession = htmlspecialchars(trim($_POST['profession']));
    $cvName = $_FILES['cv']['name'];
    $cvInfo = pathinfo($cvName);
    $cvTmpName = $_FILES['cv']['tmp_name'];
    $valideExtension = ['jpeg','jpg', 'png', 'pdf'];
    if (in_array($cvInfo['extension'], $valideExtension)) {
        $newCvName= "img/cv/".date('Y_m_d').time().'1.'.$cvInfo['extension'];
        move_uploaded_file($cvTmpName, $newCvName);
        $data = [
            "nom" => $nom,
            "prenom" => $prenom,
            "domicile" => $domicile,
            "poste" => $poste,
            "email" => $email,
            "tel" => $tel,
            "matiere" => $matiere,
            "dispo" => $dispo,
            "profession" => $profession,
            "cv" => $newCvName
        ];
        addCandidature($db, $data);
        require 'ConfirmationController.php';
        header('Location: ../../remercimentCandidature.php');
    } 
} else {
    if(isset($_POST['submit'])) {
        $error = "Extension invalide";
    }
};

