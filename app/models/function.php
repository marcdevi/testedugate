<?php

function addCandidature($db, $data){
    $stmt = $db->getPDO()->prepare('INSERT INTO candidature (nom, prenom, domicile, poste, email, tel, matiere, dispo, profession, cv) VALUES (:nom, :prenom, :domicile, :poste, :email, :tel, :matiere, :dispo, :profession, :cv)');
    return $stmt->execute($data);
}
function addCompte($db, $data) {
    $stmt = $db->getPDO()->prepare('INSERT INTO compte (nom, prenom, numero, password, sexe, matiere, niveau, etablissement, email, ville, quartier, photo, cle, connecte) VALUES (:nom, :prenom, :numero, :password, :sexe, :matiere, :niveau, :etablissement, :email, :ville, :quartier, :photo, :cle, :connecte)');
    return $stmt->execute($data);
}
function addAccepte($db, $id) {
    $stmt = $db->getPDO()->prepare('UPDATE candidature SET accepte = 1 WHERE id=:id ');
    return $stmt->execute(["id" => $id]);
}
function addTestvalide($db, $id) {
    $stmt = $db->getPDO()->prepare('UPDATE candidature SET testvalide = 1 WHERE id=:id ');
    return $stmt->execute(["id" => $id]);
}
function addAssigne($db, $id) {
    $stmt = $db->getPDO()->prepare('UPDATE demande SET assigne = 1 WHERE id=:id ');
    return $stmt->execute(["id" => $id]);
}
function addPropose($db, $id) {
    $stmt = $db->getPDO()->prepare('UPDATE demande SET propose = 1 WHERE id=:id ');
    return $stmt->execute(["id" => $id]);
}
function updateCandidature($db, $data){
    $stmt = $db->getPDO()->prepare('UPDATE candidature SET nom = :nom , prenom = :prenom , domicile = :domicile, poste = :poste, email = :email, tel = :tel, matiere = :matiere, dispo = :dispo, profession = :profession, cv = :cv WHERE id=:id ');
    return $stmt->execute($data);
}
function updateDemande($db, $data){
    $stmt = $db->getPDO()->prepare('UPDATE demande SET nom = :nom , prenom = :prenom , domicile = :domicile, email = :email, matiere = :matiere, objet = :objet, tel = :tel, plagehoraire = :plagehoraire, message = :message, date = :date WHERE id=:id ');
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
function getCompteByMatiere($db, $datass) {
    $sql = 'SELECT * FROM compte WHERE matiere = :matiere AND ville = :ville LIMIT 3';
    $query = $db->getPDO()->prepare($sql);
    $query->execute($datass);
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
function getDemande($db) {
    $sql = 'SELECT * FROM demande';
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
function showDemande($db, $id) {
    $sql = 'SELECT * FROM demande WHERE id = :id';
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
function showCompteByMatiere($db, $datass) {
    $sql = 'SELECT * FROM compte WHERE matiere = :matiere AND libre = 0 LIMIT 1';
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
function showAboutById($db, $id) {
    $sql = 'SELECT * FROM about WHERE id_compte = :id';
    $query = $db->getPDO()->prepare($sql);
    $query->execute([ "id" => $id]);
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
function showEducationById($db, $id) {
    $sql = 'SELECT * FROM education WHERE id_compte = :id';
    $query = $db->getPDO()->prepare($sql);
    $query->execute([ "id" => $id]);
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
function showExperienceById($db, $id) {
    $sql = 'SELECT * FROM experience WHERE id_compte = :id';
    $query = $db->getPDO()->prepare($sql);
    $query->execute([ "id" => $id]);
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
function showSkillsById($db, $id) {
    $sql = 'SELECT * FROM skills WHERE id_compte = :id';
    $query = $db->getPDO()->prepare($sql);
    $query->execute([ "id" => $id]);
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
function showSkills($db, $id) {
    $sql = 'SELECT * FROM skills WHERE id = :id';
    $query = $db->getPDO()->prepare($sql);
    $query->execute([ "id" => $id]);
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
function showEducation($db, $id, $ide) {
    $sql = 'SELECT * FROM education WHERE id_compte = :id AND id = :ide';
    $query = $db->getPDO()->prepare($sql);
    $query->execute([ "id" => $id, "ide" => $ide]);
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
function showExperience($db, $id, $ide) {
    $sql = 'SELECT * FROM experience WHERE id_compte = :id AND id = :ide';
    $query = $db->getPDO()->prepare($sql);
    $query->execute([ "id" => $id, "ide" => $ide]);
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
function updateAbout($db, $data) {
    $stmt = $db->getPDO()->prepare('UPDATE about SET about = :about WHERE id_compte =:id ');
    return $stmt->execute($data);
}
function AddAbout($db, $data) {
    $stmt = $db->getPDO()->prepare('INSERT INTO about (about, id_compte) VALUES (:about, :id )');
    return $stmt->execute($data);
}
function UpdateEducation($db, $data) {
    $stmt = $db->getPDO()->prepare('UPDATE education SET nom_etablissement = :nom_etablissement, nom_diplome = :nom_diplome, annee = :annee WHERE id_compte =:id AND id = :ide');
    return $stmt->execute($data);
}
function UpdateExperience($db, $data) {
    $stmt = $db->getPDO()->prepare('UPDATE experience SET poste = :poste, nom_entreprise = :nom_entreprise, annee = :annee, lieu = :lieu, description = :description WHERE id_compte =:id AND id = :ide');
    return $stmt->execute($data);
}
function UpdateSkills($db, $data) {
    $stmt = $db->getPDO()->prepare('UPDATE skills SET skill = :skill WHERE id_compte =:id AND id = :ide');
    return $stmt->execute($data);
}
function addEducation($db, $data) {
    $stmt = $db->getPDO()->prepare('INSERT INTO education (nom_etablissement, nom_diplome, annee, id_compte) VALUES (:nom_etablissement, :nom_diplome, :annee, :id)');
    return $stmt->execute($data);
}
function addExperience($db, $data) {
    $stmt = $db->getPDO()->prepare('INSERT INTO experience (poste, nom_entreprise, annee, lieu, description, id_compte) VALUES (:poste, :nom_entreprise, :annee, :lieu, :description, :id)');
    return $stmt->execute($data);
}
function addSkills($db, $data) {
    $stmt = $db->getPDO()->prepare('INSERT INTO skills (skill, id_compte) VALUES (:skill, :id)');
    return $stmt->execute($data);
}
function addEpcm($db, $datass) {
    $stmt = $db->getPDO()->prepare('INSERT INTO epcm (email) VALUES (:email)');
    return $stmt->execute($datass);
}
function addDemande($db, $data) {
    $stmt = $db->getPDO()->prepare('INSERT INTO demande (nom, prenom, domicile, email, matiere, objet, tel, plagehoraire, message, date) VALUES (:nom, :prenom, :domicile, :email, :matiere, :objet, :tel, :plagehoraire, :message, :date)');
    return $stmt->execute($data);
}
function verifiAdmin($db, $data){
    $sql = 'SELECT * FROM admin WHERE email = :email AND password = :password';
    $query = $db->getPDO()->prepare($sql);
    $query->execute($data);
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
function verifiCompte($db, $data){
    $sql = 'SELECT * FROM compte WHERE email = :email AND password = :password';
    $query = $db->getPDO()->prepare($sql);
    $query->execute($data);
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
function isConnected(){
    if(isset($_SESSION['userconnecte']) && $_SESSION['userconnecte'] == true || isset($_SESSION['userid'])){
        return true;
    }else{
        return false;
    }
}