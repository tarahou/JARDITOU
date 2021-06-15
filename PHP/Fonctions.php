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
                <boutton class="btn btn-sucess shadow" type="button" style="background-color: gray;">Exercices/Fonctions</boutton>
  </div>
          </div>
      </section>  

<!--/ Exercice n1 /-->

<div class="col-sm-12 mt-2"> 
 <h2>1- Ecrivez une fonction qui permette de générer un lien :</h2>
  
  <?php
 
  function lien($link, $title)
  {
    return "<a href='$link'>$title</a>";
  }

  echo lien("https://www.reddit.com/", "Reddit Hub");
  ?>
 
 
</div>

<hr>
<!--/ Exercice n2 /-->

<div class="col-sm-12 mt-2"> 

  <h2>2- Ecrivez une fonction qui calcul la somme des valeurs d'un tableau :</h2>
  
  <?php

  function somme($tableau)
  {
    return array_sum($tableau);
  }

  echo 'La somme des valeurs du tableau est : ' . somme(array(4, 3, 8, 2));
  ?>
</div>

<hr>

<!--/ Exercice n3 /-->

<div class="col-sm-12 mt-3"> 

  <h2>3- Créer une fonction qui vérifie le niveau de complexité d'un mot de passe :</h2>

<!--/vérifier le format d'un mot de passe lorsqu'un utilisateur s'inscrit sur un site et cré son mot de passe. 
Le mot de passe doit contenir au moins une majuscule, une minuscule, un chiffre, et 8 caractères  /-->
  <?php
function check_mdp($mdp)
{
	$majuscule = preg_match('@[A-Z]@', $mdp);
	$minuscule = preg_match('@[a-z]@', $mdp);
	$chiffre = preg_match('@[0-9]@', $mdp);
	
	if(!$majuscule || !$minuscule || !$chiffre || strlen($mdp) < 8)
	{
		return false;
	}
	else 
		return true;
}

if (check_mdp("ImAhlam1") != true)
{
	echo "Mot de passe pas sécurisé";	
}
else 
	echo "Mot de passe sécurisé";

?>
 
 <h2>OR</h2>

 <?php
 
  function complexPass($password)
  {
    
    if (strlen($password) < 8) {
      return false;
    } else if (!preg_match("/[0-9]/", $password)) {
      
      return false;
    } else if (!preg_match("/[a-z][A-Z]/", $password)) {
      
      return false;
    } else {
      
      return true;
    }
  }
  
  $resultat = complexPass("ImAhlam1");
  var_dump($resultat);
  ?>
  </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
    

</body>
<!--/ Body End /-->
</html>
