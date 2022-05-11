<?php 

if(isConnected()) {
    $id = $_SESSION['userid'];
    $compte = showCompteById($db, $id);
    $compte_about = showAboutById($db, $id);
    $compte_education = showEducationById($db, $id);
    $compte_experience = showExperienceById($db, $id);
    $compte_skills = showSkillsById($db, $id);
} else {
    header('location: login.php');
}
