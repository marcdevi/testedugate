<?php 

if(isConnected()) {
    $id = $_SESSION['userid'];
    $compte = showCompteById($db, $id);
    if (isset($_POST['about'])) {
        $about = htmlspecialchars(trim($_POST['about']));
        $data = [
            "about" => $about,
            "id" => $id
        ];
        AddAbout($db, $data);
        header('location: profil.php');
    }
} else {
    header('location: login.php');
}
