<?php
$pg = "inicio";
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rodrigo Francia</title>
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
  <section id="Inicio">
    <div class="container">
      <div class="row py-1">
        <div class="col-12 col-sm-8 ">
          <h1>Hola! <br>
            Bienvenido a mi web</h1>
        </div>
      </div>


      <div class="row py-1">
        <div class="col-12">
          <h2>Soy Rodrigo Francia</h2>
        </div>
      </div>


      <div class="row">
        <div class="col-12 boton">
          <button class="btn" onclick= "location.href='http://localhost/portfolio/proyectos.php'" type="submit">Conocé mis proyectos</button>
        </div>
      </div>
    </div>
  </section>
  <?php
  include_once("footer.php");
  ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://getbootstrap.com/docs/4.5/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>