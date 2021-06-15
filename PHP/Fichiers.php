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

<body>
<section>
  <h1>Exercice 1</h1>
  <h3>Lecture d'un fichier.</h3>

  <?php
  // Reads the file and return an array each element being a line of the file
  $lines = file("../../files/liens.txt");
  ?>

  <!-- Foreach lines in the file -->
  <?php foreach ($lines as $line_num => $line): ?>
    <p>
      <!-- It prints the line num and the current line of the file -->
      Ligne <?= ++$line_num; ?>: <?= htmlspecialchars($line); ?>
    </p>
  <?php endforeach; ?>
</section>

<hr>

<section>
  <h1>Exercice 2</h1>
  <h3>Récupération d'un fichier distant.</h3>

  <?php
  // Reads the file and return an array each element being a line of the file
  $file = file("http://bienvu.net/misc/customers.csv");
  // Returns a new array with the function str_getcsv applied on each element
  $csv = array_map('str_getcsv', $file);
  // Sorts the array by the values in a ascending way
  asort($csv);
  ?>

  <table>
    <thead>
    <tr>
      <th>Firstname</th>
      <th>Surname</th>
      <th>Email</th>
      <th>Phone</th>
      <th>City</th>
      <th>State</th>
    </tr>
    </thead>
    <tbody>
    <!-- Foreach row we create a tr -->
    <?php foreach ($csv as $csv_row): ?>
      <tr>
        <!-- In each row we put the value in a td -->
        <?php foreach ($csv_row as $csv_value): ?>
          <td><?= $csv_value ?></td>
        <?php endforeach; ?>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
    

</body>
<!--/ Body End /-->
</html>