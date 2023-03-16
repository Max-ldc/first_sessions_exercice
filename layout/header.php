<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php 
    // echo (isset($title)) ? $title :"Page MyApp";
    echo $title ?? "Session exercice"; // opérateur null coalescent
    ?>
  </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/index.css">
</head>

<body>
  <?php require_once "./layout/navbar.php";