<?php 
$title = 'Demande';
require '../../vendor/autoload.php';
require '../../app/models/function.php';
use App\Database;

$db = new Database('testedugate'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://edugate.ci/offline/images/edugate_logo_nobg.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src="https://kit.fontawesome.com/36eac6e97c.js" crossorigin="anonymous"></script>
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
        </div>
    </nav>
    </header>
    <main class="mt-5 row mx-5 justify-content-between">
    <?php require '../../app/controllers/DemandeController.php' ?>
        <div class="col-md-5">
            <img src="../img/demandeimg.jpg" alt="" style="width: 100%;">
        </div>
        <div class="col-md-5">
            <h1>Sollicitez un Enseignant/Répétiteur</h1>
            <form class="mt-5 row justify-content-between" method="post" enctype="multipart/form-data">
                <div class="col-md-6">
                    <div class="input-group mb-3 d-flex flex-column">
                        <h4>Nom *</h4>
                        <input type="text" class="form-control w-100" aria-label="Username" placeholder="Nom" aria-describedby="basic-addon1" name="nom">
                    </div>

                    <div class="input-group mb-3 d-flex flex-column">
                        <h4>Prénoms *</h4>
                        <input type="text" class="form-control w-100" aria-label="Username" placeholder="Prénoms" aria-describedby="basic-addon1" name="prenom">
                    </div>

                    <div class="input-group mb-3 d-flex flex-column">
                        <h4>Domicile *</h4>
                        <select class="form-select w-100" id="inputGroupSelect02" name="domicile">
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

                    <div class="input-group mb-3 d-flex flex-column">
                        <h4>Objet *</h4>
                        <select class="form-select w-100" id="inputGroupSelect02" name="objet">
                            <option selected>Choisir...</option>
                            <option value="besoin d'enseignant">Besoin d'Enseignant</option>
                            <option value="besoin d'un repetiteur">Besoin d'un répétiteur</option>
                            <option value="demande de seance de demo">Demande de séance de DEMO</option>
                            <option value="demande de seance de conseil">Demande de séance de Conseil</option>
                        </select>
                    </div>

                    <div class="input-group mb-3 d-flex flex-column">
                        <h4>Adresse E-mail *</h4>
                        <input type="mail" class="form-control w-100" aria-label="Username" placeholder="Adresse mail" aria-describedby="basic-addon1" name="email">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group mb-3 d-flex flex-column">
                        <h4>Tel *</h4>
                        <input type="text" class="form-control w-100" aria-label="Username" placeholder="Entrez les 10 chiffres" aria-describedby="basic-addon1" name="tel">
                    </div>

                    <div class="input-group mb-3 d-flex flex-column">
                        <h4>Matière *</h4>
                        <select id="mon-select" class="selectpicker w-100" multiple data-live-search="true" name="matiere[]">
                            <option value="francais">Francais</option>
                            <option value="anglais">Anglais</option>
                            <option value="allemand">Allemand</option>
                            <option value="espagnole">Espagnole</option>
                            <option value="histoiregeographie">histoire géographie</option>
                            <option value="mathematiques">Mathématiques</option>
                            <option value="physiquechimie">Physique-Chimie</option>
                            <option value="svt">SVT</option>
                            <option value="philosophie">Philosophie</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>

                    <div class="input-group mb-3 d-flex flex-column">
                        <h4>Plage horaire *</h4>
                        <select class="form-select w-100" id="inputGroupSelect02" name="plagehoraire">
                            <option selected>Choisir...</option>
                            <option value="9H00–09H30">9H00 – 09H30</option>
                            <option value="9H30–10H30">9H30 – 10H30</option>
                            <option value="10H30–11H30">10H30 – 11H30</option>
                            <option value="11H30–12H30">11H30 – 12H30</option>
                            <option value="12H30–13H30">12H30 – 13H30</option>
                            <option value="13H30–14H30">13H30 – 14H30</option>
                            <option value="14H30–15H30">14H30 – 15H30</option>
                            <option value="15H30–16H30">15H30 – 16H30</option>
                            <option value="16H30–17H30">16H30 – 17H30</option>
                            <option value="17H30–18H30">17H30 – 18H30</option>                            
                        </select>
                    </div>

                    <div class="input-group mb-3 d-flex flex-column">
                        <h4>Message *</h4>
                        <textarea class="form-control w-100" aria-label="Username" placeholder="Votre profession" aria-describedby="basic-addon1" name="message"></textarea>
                    </div>
                    <div class="input-group mb-3 d-flex flex-column">
                        <h4>Date *</h4>
                        <div class="datepicker date input-group">
                            <input type="text" placeholder="Choisir une date" class="form-control" id="reservationDate" name="date">
                            <div class="input-group-append" style="cursor: pointer;"><span class="input-group-text px-4"><i class="fa fa-calendar"></i></span></div>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3 d-flex row">
                    <input type="checkbox" name="epcm" id="" class="col-1 my-auto">
                    <p class="col-11 my-auto">Je souhaite recevoir des e-mails d’EDUGATE et de ses partenaires concernant des conseils, des mises à jours et des offres.</p>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary w-25">Nous contacter</button>
                </div>
            </form>
        </div>
    </main>
    <footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
        <script>$(function () {$('.datepicker').datepicker({clearBtn: true,format: "dd/mm/yyyy"});});</script>

    </footer>
</body>