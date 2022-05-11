<?php 
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));
    $data = [
        "email" => $email,
        "password" => $password
    ];
    $verif = verifiAdmin($db, $data);
    if ($verif) {
        $_SESSION['userconnecte'] = true;
        header('location: dashboard.php');
    }else{
        $error = 'Email ou mots de passe incorrect';
    }
}