<?php
$portrait1 = array('name' => 'Victor', 'firstname' => 'Hugo', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name' => 'Jean', 'firstname' => 'de La Fontaine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name' => 'Pierre', 'firstname' => 'Corneille', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name' => 'Jean', 'firstname' => 'Racine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>TP 3</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-sm-12-md-12-lg-3">
                    <a href="https://fr.wikipedia.org/wiki/Victor_Hugo">
                        <div class="card text-white bg-dark mb-3">
                            <img class="card-img-top" src="<?= $portrait1 ['portrait'] ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?= $portrait1 ['name'] . ' ' . $portrait1 ['firstname']; ?></h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12-md-12-lg-3">
                    <a href="https://fr.wikipedia.org/wiki/Jean_de_La_Fontaine">
                        <div class="card text-white bg-dark mb-3">
                            <img class="card-img-top" src="<?= $portrait2 ['portrait'] ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?= $portrait2 ['name'] . ' ' . $portrait2 ['firstname']; ?></h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12-md-12-lg-3">
                    <a href="https://fr.wikipedia.org/wiki/Pierre_Corneille">
                        <div class="card text-white bg-dark mb-3">
                            <img class="card-img-top" src="<?= $portrait3 ['portrait'] ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?= $portrait3 ['name'] . ' ' . $portrait3 ['firstname']; ?></h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12-md-12-lg-3">
                    <a href="https://fr.wikipedia.org/wiki/Jean_Racine">
                        <div class="card text-white bg-dark mb-3">
                            <img class="card-img-top" src="<?= $portrait4 ['portrait'] ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?= $portrait4 ['name'] . ' ' . $portrait4 ['firstname']; ?></h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>