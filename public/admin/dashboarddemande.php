<?php 
$title = 'Dashboard';
require '../../vendor/autoload.php';
require '../../app/models/function.php';
use App\Database;

$db = new Database('testedugate'); 
require '../../app/controllers/AdminDemandeController.php';
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
    <div class="wrapper">
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="my-3">LISTE DES DEMANDES</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOM </th>
                                <th>PRENOMS</th>
                                <th>DOMICILE</th>
                                <th>OBJET</th>
                                <th>E-MAIL</th>
                                <th>TEL</th>
                                <th>MATIERE</th>
                                <th>DATE</th>
                                <th>HEURES</th>
                                <th>MESSAGE</th>
                                <th>ACTION</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($demandes as $demande):?>
                            <tr>
                                <td scope="row"><?= $demande['id']?></td>
                                <td><?= $demande['nom']?></td>
                                <td><?= $demande['prenom']?></td>
                                <td><?= $demande['domicile']?></td>
                                <td><?= $demande['objet']?></td>
                                <td><?= $demande['email']?></td>
                                <td><?= $demande['tel']?></td>
                                <td><?= $demande['matiere']?></td>
                                <td><?= $demande['date']?></td>
                                <td><?= $demande['plagehoraire']?></td>
                                <td><?= $demande['message']?></td>
                                <td><a name="" id="" class="btn btn-warning" href="updatedemande.php?demande=<?=$demande['id']?>" role="button">Modifier</a></td>
                                <td><a name="" id="" class="btn btn-danger" href="deletedemande.php?candidature=<?=$demande['id']?>" role="button">Supprimer</a></td>
                                <td><a name="" id="" class="btn btn-success" href="acceptecandidature.php?candidature=<?=$demande['id']?>" role="button">ACCEPTE</a></td>
                                <td><a name="" id="" class="btn btn-primary" href="testvalide.php?candidature=<?=$demande['id']?>" role="button">TESTVALIDE</a></td>
                            </tr>
                            <?php endforeach; ?> 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <footer class="main-footer">
            <strong>Copyright &copy; <?= date("Y") ?> <a href="https://github.com/marcdevi">N'gbehin Rike Marc Devy</a>.</strong>
        </footer>
    </div>
</body>

</html>