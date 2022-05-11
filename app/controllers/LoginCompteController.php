<?php 
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = htmlspecialchars(trim($_POST['email']));
    $password = sha1(htmlspecialchars(trim($_POST['password'])));
    $data = [
        "email" => $email,
        "password" => $password
    ];
    $verif = verifiCompte($db, $data);
    if ($verif && $verif[0]['connecte'] == 1) {
        $_SESSION['userid'] = $verif[0]['id'];
        header('location: profil.php');
    }else{
        $error = 'Email ou mots de passe incorrect';
    }
}