<?php 

if(isConnected()) {
    $id = $_SESSION['userid'];
    $ide = $_GET['skills'];
    $compte = showCompteById($db, $id);
    $compte_skills = showSkillsById($db, $id);
    if (isset($_POST['skill'])) {
        $skill = htmlspecialchars(trim($_POST['skill']));
        $data = [
            "skill" => $skill,
            "id" => $id,
            "ide" => $ide,
        ];
        UpdateSkills($db, $data);
        header('location: profil.php');
    }
} else {
    header('location: login.php');
}
