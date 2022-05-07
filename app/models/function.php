<?php

function addCandidature($db, $data){
    $stmt = $db->getPDO()->prepare('INSERT INTO candidature (nom, prenom, domicile, poste, email, tel, matiere, dispo, profession, cv) VALUES (:nom, :prenom, :domicile, :poste, :email, :tel, :matiere, :dispo, :profession, :cv)');
    return $stmt->execute($data);
}
function addCompte($db, $data) {
    $stmt = $db->getPDO()->prepare('INSERT INTO compte (nom, prenom, numero, password, sexe, matiere, niveau, etablissement, email, ville, quartier, photo, cle, connecte) VALUES (:nom, :prenom, :numero, :password, :sexe, :matiere, :niveau, :etablissement, :email, :ville, :quartier, :photo, :cle, :connecte)');
    return $stmt->execute($data);
}
function updateCandidature($db, $data){
    $stmt = $db->getPDO()->prepare('UPDATE candidature SET nom = :nom , prenom = :prenom , domicile = :domicile, poste = :poste, email = :email, tel = :tel, matiere = :matiere, dispo = :dispo, profession = :profession, cv = :cv WHERE id=:id ');
    return $stmt->execute($data);
}
function validecompte($db, $data) {
    $stmt = $db->getPDO()->prepare('UPDATE compte SET connecte = :connecte WHERE id=:id ');
    return $stmt->execute($data);
}
function mailExit($email, $db)
{
    $sql = 'SELECT mail FROM utilisateur where mail= :email';
    $query = $db->getPDO()->prepare($sql);
    $query->execute([
        "email" => $email
    ]);
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function getCandidature($db) {
    $sql = 'SELECT * FROM candidature';
    $query = $db->getPDO()->prepare($sql);
    $query->execute();
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function showCandidature($db, $id) {
    $sql = 'SELECT * FROM candidature WHERE id = :id';
    $query = $db->getPDO()->prepare($sql);
    $query->execute([
        "id" => $id
    ]);
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
function showCompte($db, $datass) {
    $sql = 'SELECT * FROM compte WHERE nom = :nom and numero = :numero';
    $query = $db->getPDO()->prepare($sql);
    $query->execute($datass);
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
function showCompteById($db, $id) {
    $sql = 'SELECT * FROM compte WHERE id = :id';
    $query = $db->getPDO()->prepare($sql);
    $query->execute([ "id" => $id]);
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}