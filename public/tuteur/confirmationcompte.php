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
    <?php require '../../app/controllers/ConfirmationCompteCodeController.php' ?>
        <div class="col-md-12">
            <h1>Confirmation de compte</h1>
            <form class="mt-5 row justify-content-between" method="post" enctype="multipart/form-data">
                <div class="col-md-6">
                    <div class="input-group mb-3 d-flex row justify-content-between">
                        <h4 class="col-sm-auto">code *</h4>
                        <input type="text" class="form-control col-sm-7" placeholder="Votre code" aria-label="Username" aria-describedby="basic-addon1" name="code">
                    </div>
                    <div class="d-flex justify-content-start">
                        <button type="submit" class="btn btn-primary w-25">Valider</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
<?php require '../footer.php' ?>