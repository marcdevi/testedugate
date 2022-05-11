<?php session_start() ?>
<?php $title = 'Profil' ?>
<?php 
require '../../vendor/autoload.php';
require '../../app/models/function.php';
use App\Database;

$db = new Database('testedugate'); 
require '../../app/controllers/controllersprofil/AddSkillsController.php';
if (!isConnected()) {
    header('Location: login.php');
}
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
            <div class="container-fluid col-10">
                <a class="navbar-brand" href="#">EDUGATE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="d-flex">
                <a href="logout.php"><p>Se déconnecter</p></a>
            </div>
        </nav>
        <div class="w-100 bg-white" style="height: 400px;background-image: url('https://edugate.ci/offline/images/edugate_logo_nobg.png');">
            <img height="350px" width="350px" src="<?= $compte[0]['photo'] ?>" alt="" class="rounded-pill border border-5" style="height: 350px;position: absolute;margin-top: 10%;margin-left: 10%;">
        </div>
    </header>
    <main class="" style="margin-top: 10%;padding: 0 10%;">
        <div class="row justify-content-between mb-5">
            <div class="col-sm-7">
                <h1><?= $compte[0]['nom'] ?></h1>
                <h2>Resumé de profil</h2>
                <h3><?= $compte[0]['ville'] ?></h3>
            </div>
            <div class="col-sm-3">
                <h3>Experience 1</h3>
                <h3>Experience 2</h3>
            </div> 
        </div>
        <div class="mb-5">
            <div class="row justify-content-between">
                <h3 class="col-8">Experience</h3>
            </div>
            <form method="post">
                <div class="input-group mb-3 d-flex flex-column">
                    <h4>Skill *</h4>
                    <input type="text" class="form-control w-100" aria-label="Username" placeholder="Votre compétence" aria-describedby="basic-addon1" name="skill">
                </div>
                <div class="d-flex justify-content-end mt-5">
                    <button type="submit" class="btn btn-primary w-25">Ajouter</button>
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
</body>
</html>