<?php
$pg = "sobre-mi";
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sobre-mi</title>
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
  <section id="sobre-mi">
    <div class="container">
      <div class="row py-1">
        <div class="col-sm-7 ">
          <h1>Sobre mí</h1>
        </div>
      </div>
      <div class="row py-1">
        <div class="col-sm-7 ">
          <h2> Apasionado por la <b>programación</b>, <b>marketing digital</b> y el <b>entrenamiento</b>.
            Soy técnico Superior en Actividades Físicas y actualmente estudiante de programación.</h2>
        </div>
        <div class="col-sm-3">
          <img src="images/rodru.jpg" alt="Rodrigo Francia" title="Rodrigo Francia" class="img-fluid img-thumbnail rounded-circle">
        </div>
      </div>
      <div class="row">
        <div class="col-6 pb-4">
          <button class="btn" >Descargar CV <a href="images/rodru.jpg" download="rodri"></a></button>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row pb-1">
        <div class="col-6">
          <div class="bg-white">
            <i class="fas fa-code"></i>
            <h3>PROGRAMACIÓN</h3>
            <p>HTML, CSS, Bootstrap, Php, Java.</p>
          </div>
        </div>

        <div class="col-6">
          <div class="bg-white">
            <i class="fas fa-desktop"></i>
            <h3>SOFTWARE</h3>
            <p>Visual Studio Code, Eclipse, Ready To Program, Git Hub.</p>
          </div>
        </div>
      </div>
      <div class="row pt-1">
        <div class="col-6">
          <div class="bg-white">
            <i class="far fa-comment-dots"></i>
            <h3>IDIOMAS</h3>
            <p>INGLÉS- Básico<br>
              ESPAÑOL- Nativo</p>
          </div>
        </div>


        <div class="col-6">
          <div class="bg-white">
            <i class="fas fa-puzzle-piece"></i>
            <h3>HOBBIES</h3>
            <p>Entrenar</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="experiencia">
    <div class="container">
      <div class="row">
        <div class="col-12 ">
          <h2>Experiencia laboral</h2>
        </div>
      </div>
      <div class="row py-2">
        <div class="col-3 ">
          <h3>2020-Presente</h3>
        </div>
        <div class="col-3 ">
          <h3>Dexter</h3>
        </div>
        <div class="col-6 ">
          <h4>Vendedor de salón, reposición, depósito, limpieza. </h4>
        </div>
      </div>
      <div class="row py-2">
        <div class="col-3 ">
          <h3>2019-2020</h3>
        </div>
        <div class="col-3 ">
          <h3>VOM Inmuebles</h3>
        </div>
        <div class="col-6 ">
          <h4>Marketing digital, redes sociales, manejo de sitio Web de WordPress y posicionamiento. Atención al cliente y venta de inmuebles. </h4>
        </div>
      </div>
      <div class="row py-2">
        <div class="col-3 ">
          <h3>Otros</h3>
        </div>
        <div class="col-3 ">
          <h3>Autónomo</h3>
        </div>
        <div class="col-6 ">
          <h4><b>Community Manager:</b>
          <br>-Peluquería "Los Rommanes" 
          <br>-Cuenta personal de entrenamiento.
          <br><b>Entrenador personal:</b> 
          <br>-Grupo de entrenamiento, personal trainer y venta de planes a distancia.
        </h4>
        </div>
      </div>

    </div>



  </section>
  <?php
  include_once("footer.php");
  ?>
</body>

</html>