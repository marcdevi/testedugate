<?php $title = 'Profil' ?>
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
        <div class="w-100 bg-white" style="height: 400px;background-image: url('https://edugate.ci/offline/images/edugate_logo_nobg.png');">
            <img height="350px" width="350px" src="../img/cv/2022_05_0516517660171.png" alt="" class="rounded-pill border border-5" style="height: 350px;position: absolute;margin-top: 10%;margin-left: 10%;">
        </div>
    </header>
    <main class="" style="margin-top: 10%;padding: 0 10%;">
        <div class="row justify-content-between mb-5">
            <div class="col-sm-7">
                <h1>Nom du Profil</h1>
                <h2>Resumé de profil</h2>
                <h3>Localisation</h3>
            </div>
            <div class="col-sm-3">
                <h3>Experience 1</h3>
                <h3>Experience 2</h3>
            </div> 
        </div>
        <div class="mb-5">
            <div class="row justify-content-between">
                <h3 class="col-8">About</h3>
                <img height="20px" width="20px" src="../img/cil_pen.png" alt="" class="col-auto">
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem voluptates quaerat aliquid? Aspernatur, neque tempore repellat aperiam expedita officia deserunt optio, ab placeat, explicabo facere necessitatibus! Alias libero error itaque.</p>
        </div>
        <div class="mb-5">
            <div class="row justify-content-between">
                <h3 class="col-8">Education</h3>
                <img height="30px" width="50px" src="../img/carbon_add.png" alt="" class="col-auto">
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem voluptates quaerat aliquid? Aspernatur, neque tempore repellat aperiam expedita officia deserunt optio, ab placeat, explicabo facere necessitatibus! Alias libero error itaque.</p>
        </div>
        <?php for($i = 0;$i<5;$i++) { ?>
        <div class="row">
            <div class="col-xl-2">
                <img height="100px" width="100px" src="data:image/jpeg;base64,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" alt="" class="col-auto">
            </div>
            <div class="col-xl-10">
                <div class="row justify-content-between">
                    <h4 class="col-8">Education 1</h4>
                    <img height="20px" width="20px" src="../img/cil_pen.png" alt="" class="col-auto">
                </div>
                <div>
                    <p>Titre de l'education</p>
                    <p>L'année</p>
                </div>
            </div>
        </div>
        <hr>
        <?php } ?>
        <div class="mb-5">
            <div class="row justify-content-between">
                <h3 class="col-8">Expérience</h3>
                <img height="20px" width="50px" src="../img/cil_pen.png" alt="" class="col-auto">
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem voluptates quaerat aliquid? Aspernatur, neque tempore repellat aperiam expedita officia deserunt optio, ab placeat, explicabo facere necessitatibus! Alias libero error itaque.</p>
        </div>
        <?php for($i = 0;$i<5;$i++) { ?>
        <div class="row">
            <div class="col-xl-2">
                <img height="100px" width="100px" src="data:image/jpeg;base64,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" alt="" class="col-auto">
            </div>
            <div class="col-xl-10">
                <div class="row justify-content-between">
                    <h4 class="col-8">Expérience 1</h4>
                    <img height="20px" width="20px" src="../img/cil_pen.png" alt="" class="col-auto">
                </div>
                <div>
                    <p>Titre de l'experience</p>
                    <p>L'année</p>
                    <p>Le lieux</p>
                    <p>La description(Optionnel)</p>
                </div>
            </div>
        </div>
        <hr>
        <?php } ?>
        <div class="mb-5">
            <div class="row justify-content-between">
                <h3 class="col-8">Skills</h3>
                <div class="col-auto">
                    <img height="30px" width="50px" src="../img/carbon_add.png" alt="" class="col-auto">
                    <img height="20px" width="50px" src="../img/cil_pen.png" alt="" class="col-auto">
                </div>  
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem voluptates quaerat aliquid? Aspernatur, neque tempore repellat aperiam expedita officia deserunt optio, ab placeat, explicabo facere necessitatibus! Alias libero error itaque.</p>
        </div>
        <?php for($i = 0;$i<5;$i++) { ?>
            <h4>Skill 1</h4>
            <hr>
        <?php } ?>
    </main>
    <footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    </footer>
</body>
</html>