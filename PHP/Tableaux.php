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
                <boutton class="btn btn-sucess shadow" type="button" style="background-color: gray;">Tableaux</boutton>
  </div>
          </div>
      </section>  

<!-- Exercice 1. Mois de l'année non bissextile -->

    <h2>1. Mois de l'année non bissextile :</h2>

    <p>Créez un tableau associant à chaque mois de l’année le nombre de jours du mois :</p>

  <?php

  $month_And_days = array(
    "Janvier" => 31,
    "Février" => 28,
    "Mars" => 31,
    "Avril" => 30,
    "Mai" => 31,
    "Juin" => 30,
    "Juillet" => 31,
    "Aôut" => 31,
    "Septembre" => 30,
    "Octobre" => 31,
    "Novembre" => 30,
    "Décembre" => 31
  );

  asort($month_And_days);
  ?>
<table class="table table-dark table-striped">

<thead>
    <tr class="table-light">
        <th colspan="2">Nombre de jour par mois</th>
    </tr>
</thead>
<tbody>
    
    <?php foreach ($month_And_days as $month => $days): ?>
      <tr>
        <td><?= $month ?></td>
        <td><?= $days ?></td>
      </tr>
    </tbody>
    <?php endforeach; ?>
  </table>

<hr/>

<!--2. Capitales  -->

<h2>2. Capitales :</h2>

<!--Question n 1  -->

<p>1- Affichez la liste des capitales (par ordre alphabétique) suivie du nom du pays :</p>

  <?php
  $capitales = array(
    "Bucarest" => "Roumanie",
    "Bruxelles" => "Belgique",
    "Oslo" => "Norvège",
    "Ottawa" => "Canada",
    "Paris" => "France",
    "Port-au-Prince" => "Haïti",
    "Port-d'Espagne" => "Trinité-et-Tobago",
    "Prague" => "République tchèque",
    "Rabat" => "Maroc",
    "Riga" => "Lettonie",
    "Rome" => "Italie",
    "San José" => "Costa Rica",
    "Santiago" => "Chili",
    "Sofia" => "Bulgarie",
    "Alger" => "Algérie",
    "Amsterdam" => "Pays-Bas",
    "Andorre-la-Vieille" => "Andorre",
    "Asuncion" => "Paraguay",
    "Athènes" => "Grèce",
    "Bagdad" => "Irak",
    "Bamako" => "Mali",
    "Berlin" => "Allemagne",
    "Bogota" => "Colombie",
    "Brasilia" => "Brésil",
    "Bratislava" => "Slovaquie",
    "Varsovie" => "Pologne",
    "Budapest" => "Hongrie",
    "Le Caire" => "Egypte",
    "Canberra" => "Australie",
    "Caracas" => "Venezuela",
    "Jakarta" => "Indonésie",
    "Kiev" => "Ukraine",
    "Kigali" => "Rwanda",
    "Kingston" => "Jamaïque",
    "Lima" => "Pérou",
    "Londres" => "Royaume-Uni",
    "Madrid" => "Espagne",
    "Malé" => "Maldives",
    "Mexico" => "Mexique",
    "Minsk" => "Biélorussie",
    "Moscou" => "Russie",
    "Nairobi" => "Kenya",
    "New Delhi" => "Inde", "
    Stockholm" => "Suède",
    "Téhéran" => "Iran",
    "Tokyo" => "Japon",
    "Tunis" => "Tunisie",
    "Copenhague" => "Danemark",
    "Dakar" => "Sénégal", "
    Damas" => "Syrie",
    "Dublin" => "Irlande",
    "Erevan" => "Arménie",
    "La Havane" => "Cuba",
    "Helsinki" => "Finlande",
    "Islamabad" => "Pakistan",
    "Vienne" => "Autriche",
    "Vilnius" => "Lituanie",
    "Zagreb" => "Croatie"
  );
  $pays_order = $capitales; 
  asort($pays_order);
  ?>
  <table class="table table-dark table-striped">
    <thead>
    <tr class="table-light">
    <th colspan="2">Liste des capitales (par ordre alphabétique)</th>
    </tr>
    </thead>

    <?php
    foreach ($pays_order as $capitale => $pays): 
    ?>
    <tbody>
      <tr>
        <td><?= $capitale ?></td>
        <td><?= $pays ?></td>
      </tr>
    
    </tbody>
    <?php endforeach; ?>
    
  </table>

<!--Question n 1  -->

  <p>2- Affichez la liste des pays (par ordre alphabétique) suivie du nom de la capitale :</p>

  <?php
  $capitales = array(
    "Bucarest" => "Roumanie",
    "Bruxelles" => "Belgique",
    "Oslo" => "Norvège",
    "Ottawa" => "Canada",
    "Paris" => "France",
    "Port-au-Prince" => "Haïti",
    "Port-d'Espagne" => "Trinité-et-Tobago",
    "Prague" => "République tchèque",
    "Rabat" => "Maroc",
    "Riga" => "Lettonie",
    "Rome" => "Italie",
    "San José" => "Costa Rica",
    "Santiago" => "Chili",
    "Sofia" => "Bulgarie",
    "Alger" => "Algérie",
    "Amsterdam" => "Pays-Bas",
    "Andorre-la-Vieille" => "Andorre",
    "Asuncion" => "Paraguay",
    "Athènes" => "Grèce",
    "Bagdad" => "Irak",
    "Bamako" => "Mali",
    "Berlin" => "Allemagne",
    "Bogota" => "Colombie",
    "Brasilia" => "Brésil",
    "Bratislava" => "Slovaquie",
    "Varsovie" => "Pologne",
    "Budapest" => "Hongrie",
    "Le Caire" => "Egypte",
    "Canberra" => "Australie",
    "Caracas" => "Venezuela",
    "Jakarta" => "Indonésie",
    "Kiev" => "Ukraine",
    "Kigali" => "Rwanda",
    "Kingston" => "Jamaïque",
    "Lima" => "Pérou",
    "Londres" => "Royaume-Uni",
    "Madrid" => "Espagne",
    "Malé" => "Maldives",
    "Mexico" => "Mexique",
    "Minsk" => "Biélorussie",
    "Moscou" => "Russie",
    "Nairobi" => "Kenya",
    "New Delhi" => "Inde", "
    Stockholm" => "Suède",
    "Téhéran" => "Iran",
    "Tokyo" => "Japon",
    "Tunis" => "Tunisie",
    "Copenhague" => "Danemark",
    "Dakar" => "Sénégal", "
    Damas" => "Syrie",
    "Dublin" => "Irlande",
    "Erevan" => "Arménie",
    "La Havane" => "Cuba",
    "Helsinki" => "Finlande",
    "Islamabad" => "Pakistan",
    "Vienne" => "Autriche",
    "Vilnius" => "Lituanie",
    "Zagreb" => "Croatie"
  );
  $capitale_order = $capitales; 
  asort($capitale_order);
  ?>
  <table class="table table-dark table-striped">
    <thead>
    <tr class="table-light">
    <th colspan="2">Liste des pays (par ordre alphabétique)</th>
    </tr>
    </thead>

    <?php
    foreach ($capitale_order as $capitale => $pays): 
    ?>
    <tbody>
      <tr>
        <td><?= $pays ?></td>
        <td><?= $capitale ?></td>
      </tr>
    
    </tbody>
    <?php endforeach; ?>
    
  </table>

<!--Question n 1  -->

  <p>3- Affichez le nombre de pays dans le tableau :</p>
  <hr>
  <p><?= count($capitales); ?></p>
  <hr>

  <p>4- Supprimer du tableau toutes les capitales ne commençant pas par la lettre 'B', puis affichez le contenu du tableau :</p>
 
  <?php
 
  foreach ($capitales as $key => $value) {
  
    if (preg_match("/^[^b]/i", $key)) {
     
      unset($capitales[$key]);
    }
  }
  ?>

<table class="table table-dark table-striped">

    <thead>
    <tr class="table-light">
    <th colspan="2">Capitales B </th>
    </tr>
    </thead>

    <tbody>
    <?php foreach ($capitales as $capitale => $pays): ?>
      <tr>
        <th><?= $capitale ?></th>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>

<!--3. Départements  -->

<h2>3. Départements :</h2>

<!--Question n 1  -->

<p>1- Affichez la liste des régions (par ordre alphabétique) suivie du nom des départements :</p>

  <?php
  $departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
  );
  
  ksort($departements); ?>

  <table class="table table-dark table-striped">
    <thead>
    <tr class="table-light">
      <th>Régions</th>
      <th>Départements</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($departements as $regions => $valeurs): ?>
     
      <?php foreach ($valeurs as $departements): ?>
        <tr>
          <td><?= $regions ?></td>
          <td><?= $departements ?></td>
        </tr>
      
    </tbody>
    <?php endforeach; ?>
    <?php endforeach; ?>
  </table>
  
<!--Question n 2  -->

  <p>2- Affichez la liste des régions suivie du nombre de départements :</p>
  
  <?php
  $departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
  );
  
  ksort($departements); ?>

  <table class="table table-dark table-striped">
    <thead>
    <tr class="table-light">
      <th>Régions</th>
      <th>Nombre Départements</th>
    </tr>
    </thead>
    
    <tbody>
    <?php foreach ($departements as $regions => $departement): ?>
      <tr>
        <td><?= $regions ?></td>
        <td><?= count($departement) ?></td>
      </tr>
    
    </tbody>
    <?php endforeach; ?>
  </table>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
    

</body>

<!--/ Body End /-->

</html>