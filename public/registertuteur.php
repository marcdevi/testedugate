<?php $title = 'Inscription Tuteur'; ?>
<?php require 'header.php' ?>
<?php 

use App\Database;

$db = new Database('testedugate'); 


?>
<?php require '../app/controllers/RegisterController.php' ?>
    <main class="mt-5 row mx-5 justify-content-between">
        <div class="col-md-5">
            <img src="img/devenez.jpg" alt="" style="width: 100%;">
        </div>
        <div class="col-md-5">
            <h1>Candidature pour enseignant / Tuteur</h1>
            <form action="registertuteur.php" class="mt-5 row justify-content-between" method="post" enctype="multipart/form-data">
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
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="input-group mb-3 d-flex flex-column">
                        <h4>Poste *</h4>
                        <select class="form-select w-100" id="inputGroupSelect02" name="poste">
                            <option selected>Choisir...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
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
                        <select id="mon-select" class="selectpicker w-100" multiple data-live-search="true" name="matiere">
                            <option>Rouge</option>
                            <option>Bleu</option>
                            <option>Vert</option>
                            <option>Jaune</option>
                        </select>
                    </div>

                    <div class="input-group mb-3 d-flex flex-column">
                        <h4>Disponibilité Hebdomadaire *</h4>
                        <select class="form-select w-100" id="inputGroupSelect02" name="dispo">
                            <option selected>Choisir...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="input-group mb-3 d-flex flex-column">
                        <h4>Profession *</h4>
                        <input type="text" class="form-control w-100" aria-label="Username" placeholder="Votre profession" aria-describedby="basic-addon1" name="profession">
                    </div>
                    <div class="input-group mb-3 d-flex flex-column">
                        <h4>CV *</h4>
                        <input type="file" class="form-control w-100" id="inputGroupFile01" name="cv">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary w-25">Postulez</button>
                </div>
            </form>
        </div>
    </main>
<?php require 'footer.php' ?>