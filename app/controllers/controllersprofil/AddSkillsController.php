<?php 

if(isConnected()) {
    $id = $_SESSION['userid'];
    $compte = showCompteById($db, $id);
    if (isset($_POST['skill'])) {
        $skill = htmlspecialchars(trim($_POST['skill']));
        $data = [
            "skill" => $skill,
            "id" => $id,
        ];
        addSkills($db, $data);
        header('location: profil.php');
    }
} else {
    header('location: login.php');
}
