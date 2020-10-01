<?php
$pg = "proyectos";
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyectos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap">
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900&display=swap">
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
  <header>
    <?php
    include_once("menu.php");
    ?>
  </header>
  <div class="container">
    <div class="row">
      <div class="col-12 ">
      <h1>Mi portfolio</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12 ">
      <h2>Estos son algunos de los trabajos que hice durante mi carrera.</h2>
      </div>
    </div>
  </div>
  <?php
  include_once("footer.php");
  ?>
</body>

</html>