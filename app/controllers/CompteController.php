<?php
if(
    isset($_POST['nom']) && 
    isset($_POST['prenom']) &&
    isset($_POST['numero']) &&
    isset($_POST['password']) &&
    isset($_POST['passwordC']) &&
    isset($_POST['sexe']) &&
    isset($_POST['matiere']) &&
    isset($_POST['niveau']) &&
    isset($_POST['email']) &&
    isset($_POST['ville']) &&
    isset($_POST['quartier']) &&
    isset($_FILES['photo'])){
    $nom = htmlspecialchars(trim($_POST['nom']));
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    $numero = htmlspecialchars(trim($_POST['numero']));
    if ($_POST['password'] === $_POST['passwordC']) {
        $password = sha1(htmlspecialchars(trim($_POST['password'])));
        $sexe = htmlspecialchars(trim($_POST['sexe']));
        $matiere = htmlspecialchars(trim($_POST['matiere']));
        $niveau = htmlspecialchars(trim($_POST['niveau']));
        $etablissement = htmlspecialchars(trim($_POST['etablissement']));
        $email = htmlspecialchars(trim($_POST['email']));
        $ville = htmlspecialchars(trim($_POST['ville']));
        $quartier = htmlspecialchars(trim($_POST['quartier']));
        $photoName = $_FILES['photo']['name'];
        $photoInfo = pathinfo($photoName);
        $photoTmpName = $_FILES['photo']['tmp_name'];
        $valideExtension = ['jpeg','jpg', 'png',];
        if (isset($photoInfo['extension']) && in_array($photoInfo['extension'], $valideExtension)) {
            $newPhotoName= "../img/photo/".date('Y_m_d').time().'1.'.$photoInfo['extension'];
            move_uploaded_file($photoTmpName, $newPhotoName);
            $cle = rand(10000, 99999);
            $connecte = 0;
            $data = [
                "nom" => $nom,
                "prenom" => $prenom,
                "numero" => $numero,
                "password" => $password,
                "sexe" => $sexe,
                "matiere" => $matiere,
                "niveau" => $niveau,
                "etablissement" => $etablissement,
                "email" => $email,
                "ville" => $ville,
                "quartier" => $quartier,
                "photo" => $newPhotoName,
                "cle" => $cle,
                "connecte" => $connecte
            ];
            addCompte($db, $data);
            $datass = [
                "nom" => $nom,
                "numero" => $numero
            ];
            $compte = showCompte($db, $datass);
            $id = $compte[0]['id'];
            require 'ConfirmationCompteController.php';
            header('Location: confirmationcompte.php?id='.$id);
        } else {
            $error = "Extension invalide";
        };
        $emailExit = mailExit($email, $db);
        if($emailExit){
            $error = "Mail invalide";
        }
    } else {
        $error = 'Mots de passe incorrect';
    }
}