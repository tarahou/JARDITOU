<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>PHP</title>
</head>
<!--/ Body start /-->
<body class="container">
    <header>
        <div class="d-sm-none d-lg-block">
            <div class="col-4">
                <br>
                <h1 class="text-sucess" style=" text-shadow: -1px -1px rgb(20, 20, 20), 1px 1px #333;color: rgb(70, 66, 66);">PHP</h1>
                <br>
            </div>
        </div>
    </header>
<!--/ Nav start /-->
<nav class="navbar navbar-expand-lg navbar-dark bg-danger shadow">
        <a class="navbar-brand" href="#">Ahlam TARAHOU</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
 
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Boucles.php">Boucles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Tableaux.php">Tableaux</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Fonctions.php">Fonctions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Dates.php">Dates</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Fichiers.php">Fichiers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Formulaires</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">PDO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sessions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mails</a>
                </li>
            </ul>
        </div>
    </nav>
  <!--/ Nav End /-->
  <div class="container-fluid">
      <section id="tableaux" class="row d-flex justify-content-between m-3">
          <div class="col-sm-12 col-lg-6 p-0 py-4">
                <boutton class="btn btn-sucess shadow" type="button" style="background-color: gray;">Home</boutton>
  </div>
          </div>
      </section>  


<div class="col-sm-8">
        


<h1>Exercice 1</h1>
  <h3>Trouvez le numéro de semaine de la date suivante : 14/07/2019.</h3>

  <?php
  $date = new DateTime("2019-07-14");
  $weekNumber = $date->format("W");
  ?>

  <p>Numéro de la semaine: <?= $weekNumber; ?></p>
</section>

<hr>

<section>
  <h1>Exercice 2</h1>
  <h3>Combien reste-t-il de jours avant la fin de votre formation ?</h3>

  <?php
  $actualDate = new DateTime();
  $endDate = new DateTime("2020-09-25");
  $daysBeforeEnd = $endDate->diff($actualDate)->days;
  ?>

  <p>Jours avant la fin de la formation: <?= $daysBeforeEnd; ?></p>
</section>

<hr>

<section>
  <h1>Exercice 3</h1>
  <h3>Comment déterminer si une année est bissextile ?</h3>

  <?php
  $currentDate = new DateTime();
  $isLeap = $currentDate->format('L');
  ?>

  <?php if($isLeap): ?>
    <p>L'année <?= $currentDate->format("Y") ?> est bissextile</p>
  <?php else: ?>
    <p>L'année <?= $currentDate->format("Y") ?> n'est pas bissextile</p>
  <?php endif; ?>
</section>

<hr>

<section>
  <h1>Exercice 4</h1>
  <h3>Montrez que la date du 32/17/2019 est erronée.</h3>

  <?php
  $invalidDate = DateTime::createFromFormat("d/m/Y", "32/17/2019");
  $errors = DateTime::getLastErrors();
  ?>

  <p>
    <?php if ($errors["error_count"] > 0 || $errors["warning_count"] > 0): ?>
      <?php foreach($errors["warnings"] as $warning): ?>
        <?= $warning; ?>
      <?php endforeach; ?>
    <?php endif; ?>
  </p>
</section>

<hr>

<section>
  <h1>Exercice 5</h1>
  <h3>Affichez l'heure courante sous cette forme : 11h25.</h3>

  <?php
  $currentDate = new DateTime();
  ?>

  <p><?= $currentDate->format("H\hi e") ?></p>
</section>

<hr>

<section>
  <h1>Exercice 6</h1>
  <h3>Ajoutez 1 mois à la date courante.</h3>

  <?php
  $currentDate = new DateTime();
  $modifiedDate = new DateTime();
  $modifiedDate->add(DateInterval::createFromDateString("1 months"));
  ?>

  <p>Date actuelle: <?= $currentDate->format("d/m/Y"); ?></p>
  <p>Date avec 1 mois ajouté: <?= $modifiedDate->format("d/m/Y"); ?></p>
</section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
    

</body>
<!--/ Body End /-->
</html>