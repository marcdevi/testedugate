<?php 
$title = 'Inscription';
require '../../vendor/autoload.php';
require '../../app/models/function.php';
use App\Database;

$db = new Database('testedugate'); 
//require '../../app/controllers/AdminController.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://edugate.ci/offline/images/edugate_logo_nobg.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <title><?= $title ?></title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">EDUGATE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    </header>
    <main class="mt-5 row mx-5 justify-content-between">
    <?php require '../../app/controllers/CompteController.php' ?>
        <div class="col-md-12">
            <h1>Formulaire d'inscription</h1>
            <form  class="mt-5 row justify-content-between" method="post" enctype="multipart/form-data">
                <div class="col-md-6">
                    <div class="input-group mb-3 d-flex row justify-content-between">
                        <h4 class="col-sm-auto">Nom *</h4>
                        <input type="text" class="form-control col-sm-7" placeholder="Nom" aria-label="Username" aria-describedby="basic-addon1" name="nom">
                    </div>

                    <div class="input-group mb-3 d-flex row justify-content-between">
                        <h4 class="col-sm-auto">Prénoms *</h4>
                        <input type="text" class="form-control col-sm-7" placeholder="Prénoms" aria-label="Username" aria-describedby="basic-addon1" name="prenom">
                    </div>

                    <div class="input-group mb-3 d-flex row justify-content-between">
                        <h4 class="col-sm-auto">Numéro mobile *</h4>
                        <input type="text" class="form-control col-sm-7" placeholder="Entrez les 10 chiffres" aria-label="Username" aria-describedby="basic-addon1" name="numero">
                    </div>

                    <div class="input-group mb-3 d-flex row justify-content-between">
                        <h4 class="col-sm-auto">Mots de passe *</h4>
                        <input type="password" class="form-control col-sm-7" placeholder="Saisissez un mot de passe" aria-label="Username" aria-describedby="basic-addon1" name="password">
                    </div>

                    <div class="input-group mb-3 d-flex row justify-content-between">
                        <div class="col-sm-auto">
                            <h4>Mots de passe *</h4>
                            <h4>(Comfirmation)</h4>
                        </div>
                        <input type="password" class="form-control h-50 col-sm-7" placeholder="Confirmez votre mot de passe" aria-label="Username" aria-describedby="basic-addon1" name="passwordC">
                    </div>

                    <div class="input-group mb-3 d-flex row justify-content-between">
                        <h4 class="col-sm-auto">Photo *</h4>
                        <input type="file" class="form-control col-sm-7" id="inputGroupFile01" name="photo">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group mb-3 d-flex row justify-content-between">
                        <h4 class="col-sm-auto">Sexe *</h4>
                        <select class="form-select col-sm-7" id="inputGroupSelect02" name="sexe">
                            <option selected>Choisir...</option>
                            <option value="feminin">Féminin</option>
                            <option value="masculin">Masculin</option>
                        </select>
                    </div>

                    <div class="input-group mb-3 d-flex row justify-content-between">
                        <h4 class="col-sm-auto">Vous êtes *</h4>
                        <select class="form-select col-sm-7" id="inputGroupSelect02" name="matiere">
                            <option selected>Choisir...</option>
                            <option value="tuteur">Tuteur</option>
                            <option value="francais">Professeur de francais</option>
                            <option value="anglais">Professeur de anglais</option>
                            <option value="allemand">Professeur d'allemand</option>
                            <option value="espagnole">Professeur d'espagnole</option>
                            <option value="histoiregeographie">Professeur d'histoire géographie</option>
                            <option value="mathematiques">Professeur de mathématiques</option>
                            <option value="physiquechimie">Professeur de physique chimie</option>
                            <option value="svt">Professeur de SVT</option>
                            <option value="philosophie">Professeur de philosophie</option>
                        </select>
                    </div>

                    <div class="input-group mb-3 d-flex row justify-content-between">
                        <h4 class="col-sm-auto">Votre niveau *</h4>
                        <select class="form-select col-sm-7" id="inputGroupSelect02" name="niveau">
                            <option selected>Choisir...</option>
                            <option value="3eme">3EME</option>
                            <option value="tc">TC</option>
                            <option value="td">TD</option>
                            <option value="ta">TA</option>
                        </select>
                    </div>

                    <div class="input-group mb-3 d-flex row justify-content-between">
                        <h4 class="col-sm-auto">Etablissement </h4>
                        <input type="text" class="form-control col-sm-7" placeholder="Votre établissement(optionnel)" aria-label="Username" aria-describedby="basic-addon1" name="etablissement">
                    </div>

                    <div class="input-group mb-3 d-flex row justify-content-between">
                        <h4 class="col-sm-auto">Adresse mail *</h4>
                        <input type="text" class="form-control col-sm-7" placeholder="Adresse mail" aria-label="Username" aria-describedby="basic-addon1" name="email">
                    </div>

                    <div class="input-group mb-3 d-flex row justify-content-between">
                        <h4 class="col-sm-auto">Choisir la ville *</h4>
                        <select class="form-select col-sm-7" id="inputGroupSelect02" name="ville">
                            <option selected>Choisir...</option>
                            <option value="ABENGOUROU">ABENGOUROU</option>                     
                            <option value="ABIDJAN" >ABIDJAN</option>                       
                            <option value="ABOISSO" >ABOISSO</option>                       
                            <option value="ADIAKE" >ADIAKE</option>                       
                            <option value="ADZOPE" >ADZOPE</option>                      
                            <option value="AGBOVILLE" >AGBOVILLE</option>                       
                            <option value="AGNIBILEKROU" >AGNIBILEKROU</option>                       
                            <option value="AKOUPE" >AKOUPE</option>                     
                            <option value="ALEPE" >ALEPE</option>
                            <option value="ANYAMA" >ANYAMA</option>                       
                            <option value="ARRAH" >ARRAH</option>                      
                            <option value="ASSINIE" >ASSINIE</option>                       
                            <option value="BONDOUKOU" >BONDOUKOU</option>                     
                            <option value="BONOUA" >BONOUA</option>                      
                            <option value="BOUAFLE" >BOUAFLE</option>                        
                            <option value="BOUAKE" >BOUAKE</option>
                            <option value="BOUNDIALI" >BOUNDIALI</option>                     
                            <option value="DABOU" >DABOU</option>                      
                            <option value="DALOA" >DALOA</option>                        
                            <option value="DANANE" >DANANE</option>                      
                            <option value="DAOUKRO" >DAOUKRO</option>                      
                            <option value="DIMBOKRO" >DIMBOKRO</option>                       
                            <option value="DIVO" >DIVO</option>                       
                            <option value="DUEKOUE" >DUEKOUE</option>                       
                            <option value="FERKESSEDOUGOU" >FERKESSEDOUGOU</option>                      
                            <option value="GAGNOA" >GAGNOA</option>                       
                            <option value="GRAND-BASSAM" >GRAND-BASSAM</option>                       
                            <option value="GUIGLO" >GUIGLO</option>                      
                            <option value="ISSIA" >ISSIA</option>                   
                            <option value="KATIOLA" >KATIOLA</option>                      
                            <option value="KORHOGO" >KORHOGO</option>                       
                            <option value="LAKOTA" >LAKOTA</option>                       
                            <option value="MAN" >MAN</option>                      
                            <option value="ODIENNE" >ODIENNE</option>                       
                            <option value="OUME" >OUME</option>                       
                            <option value="SAN-PEDRO" >SAN-PEDRO</option>
                            <option value="SASSANDRA" >SASSANDRA</option>
                            <option value="SEGUELA" >SEGUELA</option>
                            <option value="SINFRA" >SINFRA</option>
                            <option value="SOUBRE" >SOUBRE</option>
                            <option value="TIASSALE" >TIASSALE</option>
                            <option value="TINGRELA" >TINGRELA</option>
                            <option value="TOUMODI" >TOUMODI</option>
                            <option value="VAVOUA" >VAVOUA</option>
                            <option value="YAMOUSSOUKRO" >YAMOUSSOUKRO</option>
                            <option value="ZUENOULA" >ZUENOULA</option>
                        </select>
                    </div>

                    <div class="input-group mb-3 d-flex row justify-content-between">
                        <h4 class="col-sm-auto">Quartier *</h4>
                        <input type="text" class="form-control col-sm-7" placeholder="Entrer le quartier avec précision" aria-label="Username" aria-describedby="basic-addon1" name="quartier">
                    </div>
                    <div class="d-flex justify-content-start">
                        <button type="submit" class="btn btn-primary w-25">S'inscrire</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
<?php require '../footer.php' ?>