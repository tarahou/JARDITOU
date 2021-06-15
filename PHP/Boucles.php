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
     <style>
      td:nth-child(even){background-color:coral;}
      td:nth-child(odd){background-color:grey;} 
      section{
      border-style: solid;
      border-color: black;
      padding: 20px;
      background-color: #c0c0c0;
      }; 
    </style>
    <title>Boucles</title>
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
      <div class id="tableaux" class="row d-flex justify-content-between m-3">
          <div class="col-sm-12 col-lg-6 p-0 py-4">
                <boutton class="btn btn-sucess shadow" type="button" style="background-color: gray;">Boucles</boutton>
  </div>
          </div>
      </div>  
    
      <section>

  <h1>EXERCICE 1 :</h1>
  <h3>* Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7...</h3>

  <?php 
 $i=0;
 for($i; $i<=150; $i++){
 if($i%2!=0){
   echo " ".$i."<br>";
 }
}
  ?>

 <h3>OR</h3>
 
 <?php 
  foreach (range(1, 150, 2) as $number){
     echo $number."<br>";
  }
 ?>

</section>
<hr>

<section>
  <h1>EXERCICE 2 :</h1>
  <h3>* Ecrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers:</h3>
  <?php 
  $i=1;
  for ($i ; $i <= 500; $i++){
    echo "Je dois faire des sauvegardes régulières de mes fichiers"."<br>";
  } 
  ?>  

<h3>OR</h3>

  <?php 
  for ($i = 1; $i <= 500; $i++): 
  ?>
    <p>Je dois faire des sauvegardes régulières de mes fichiers</p>
  <?php 
  endfor; 
  ?>
</section>

<hr>

<section>
  <h1>EXERCICE 3 :</h1>
<h3 align=center>TABLE DE MULTIPLICATION :</h3>
<table align =center border width=500 height=500>
<?php

for ($i = 0; $i <=12; $i++)
{
  echo("<tr>");

for($j = 0; $j <=12; $j++)
{
  $p= $i * $j;
  echo("<td>".$p."</td>");
}

  echo("<tr>");
}
  ?>
</section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
    

</body>
<!--/ Body End /-->
</html>

