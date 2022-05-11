<?php 

if(isConnected()) {
    $id = $_SESSION['userid'];
    $compte = showCompteById($db, $id);
    $compte_about = showAboutById($db, $id);
    if (isset($_POST['about'])) {
        $about = htmlspecialchars(trim($_POST['about']));
        $data = [
            "about" => $about,
            "id" => $id
        ];
        updateAbout($db, $data);
        header('location: profil.php');
    }
} else {
    header('location: login.php');
}
