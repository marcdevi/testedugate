<?php $title = 'Inscription Tuteur'; ?>
<?php require 'header.php' ?>
<?php 

use App\Database;

$db = new Database('testedugate'); 


?>
<?php require '../app/controllers/RegisterController.php' ?>
    <main class="mt-5 row mx-5 justify-content-between">
        <?php if(isset($error)) { ?>
        <div class="alert alert-danger">
            <p><?=  $error ?></p>
        </div>
        <?php } ?>
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
                        <h4>Poste *</h4>
                        <select class="form-select w-100" id="inputGroupSelect02" name="poste">
                            <option selected>Choisir...</option>
                            <option value="enseignant">Enseignant</option>
                            <option value="tuteur">Tuteur</option>
                            <option value="autre">Autre</option>
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
                            <option value="francais">Francais</option>
                            <option value="anglais">Anglais</option>
                            <option value="allemand">Allemand</option>
                            <option value="espagnole">Espagnole</option>
                            <option value="histoiregeographie">Histoire Géographie</option>
                            <option value="mathematiques">Mathématiques</option>
                            <option value="physiquechimie">Physique Chimie</option>
                            <option value="svt">SVT</option>
                            <option value="philosophie">Philosophie</option>
                        </select>
                    </div>

                    <div class="input-group mb-3 d-flex flex-column">
                        <h4>Disponibilité Hebdomadaire *</h4>
                        <select class="form-select w-100" id="inputGroupSelect02" name="dispo">
                            <option selected>Choisir...</option>
                            <option value="6h">6H</option>
                            <option value="8h">8H</option>
                            <option value="10h">10H</option>
                            <option value="12h">12H</option>
                            <option value="plu">Plus</option>
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
                    <input type="submit" class="btn btn-primary w-25" name="submit" value="Envoyer">
                </div>
            </form>
        </div>
    </main>
<?php require 'footer.php' ?>