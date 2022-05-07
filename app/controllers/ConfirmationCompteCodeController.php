<?php
if(isset($_POST['code']) && isset($_GET['id'])) {
    $code = $_POST['code'];
    $id = $_GET['id'];
    $compte = showCompteById($db, $id);
    $codeuser = $compte[0]['cle'];
    if($code === $codeuser){
        $connecte = 1;
        $data = [
            "connecte" => $connecte,
            "id" => $id
        ];
        validecompte($db, $data);
        header('Location: remercimentconfirmationcompte.php');
    }
}