<?php
$title = 'Dashboard';
require '../../vendor/autoload.php';
require '../../app/models/function.php';
$id = $_GET['candidature'];
use App\Database;

$db = new Database('testedugate'); 

$candidature = showCandidature($db, $id);

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
                <a class="nav-link active" aria-current="page" href="#">LISTE DES CANDIDATURES</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">LISTE DES DEMANDES</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    </header>
    <main class="mt-5 row mx-5">
        <?php require '../../app/controllers/UpdateDemandeController.php' ?>
        <div class="col-md-12">
            <h1>Modifier la candidature de <?= $candidature[0]['nom'] ?></h1>
            <form class="mt-5 row justify-content-between" method="post" enctype="multipart/form-data">
                <div class="col-md-6">
                    <div class="input-group mb-3 d-flex flex-column">
                        <h4>Nom *</h4>
                        <input type="text" class="form-control w-100" aria-label="Username" aria-describedby="basic-addon1" name="nom" value="<?= $candidature[0]['nom'] ?>">
                    </div>

                    <div class="input-group mb-3 d-flex flex-column">
                        <h4>Prénoms *</h4>
                        <input type="text" class="form-control w-100" aria-label="Username" aria-describedby="basic-addon1" name="prenom" value="<?= $candidature[0]['prenom'] ?>">
                    </div>

                    <div class="input-group mb-3 d-flex flex-column">
                        <h4>Domicile *</h4>
                        <select class="form-select w-100" id="inputGroupSelect02" name="domicile">
                            <option selected value="<?= $candidature[0]['domicile'] ?>"><?= $candidature[0]['domicile'] ?></option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="input-group mb-3 d-flex flex-column">
                        <h4>Poste *</h4>
                        <select class="form-select w-100" id="inputGroupSelect02" name="poste">
                            <option selected value="<?= $candidature[0]['poste'] ?>"><?= $candidature[0]['poste'] ?></option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            opt
                        </select>
                    </div>

                    <div class="input-group mb-3 d-flex flex-column">
                        <h4>Adresse E-mail *</h4>
                        <input type="mail" class="form-control w-100" aria-label="Username" aria-describedby="basic-addon1" name="email" value="<?= $candidature[0]['email'] ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group mb-3 d-flex flex-column">
                        <h4>Tel *</h4>
                        <input type="text" class="form-control w-100" aria-label="Username" aria-describedby="basic-addon1" name="tel" value="<?= $candidature[0]['tel'] ?>">
                    </div>

                    <div class="input-group mb-3 d-flex flex-column">
                        <h4>Matière *</h4>
                        <select id="mon-select" class="selectpicker w-100" multiple data-live-search="true" name="matiere">
                            <option selected value="<?= $candidature[0]['matiere'] ?>"><?= $candidature[0]['matiere'] ?></option>
                            <option>Rouge</option>
                            <option>Bleu</option>
                            <option>Vert</option>
                            <option>Jaune</option>
                        </select>
                    </div>

                    <div class="input-group mb-3 d-flex flex-column">
                        <h4>Disponibilité Hebdomadaire *</h4>
                        <select class="form-select w-100" id="inputGroupSelect02" name="dispo">
                            <option selected value="<?= $candidature[0]['dispo'] ?>"><?= $candidature[0]['dispo'] ?></option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="input-group mb-3 d-flex flex-column">
                        <h4>Profession *</h4>
                        <input type="text" class="form-control w-100" aria-label="Username" aria-describedby="basic-addon1" name="profession" value="<?= $candidature[0]['profession'] ?>">
                    </div>
                    <div class="input-group mb-3 d-flex flex-column">
                        <h4>CV *</h4>
                        <input type="file" class="form-control w-100" id="inputGroupFile01" name="cv" value="<?= $candidature[0]['cv'] ?>">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary w-25">Modifier</button>
                </div>
            </form>
        </div>
    </main>
<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

</footer>