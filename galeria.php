<!DOCTYPE html>
<html>

<head>
	<title>Greys Anatomy</title>
	<meta charset="utf-8">
  <link rel="icon" type="img/png" href="img/favicon.png"/>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <?php include_once "php/funcoes.php"; ?>
</head>

<body style="background-color: #F8F9FA">

<nav id="barra" class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"><img src="img/logo.jpeg" width="50px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav justify-content-start">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="noticias.php">Noticias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="galeria.php">Galeria</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="comentarios.php">Comentarios</a>
      </li>
      <li>
        <a class="nav-link" href="<?php mostrar_link(); ?>"><span style="color: red;"><?php mostrar_nome(); ?></span></a>
      </li>
    </ul>
  </div>
</nav>

<div class="card container col-8" style="padding-top: 5px; margin-top: 20px;">
  <h2 style="text-align: center;">Confira os personagens fixos da série, até a temporada 14</h2>
  <div id="carrosel" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/galeria/1.jpeg">
        <div class="carousel-caption d-none d-md-block"><h1 class="dark">Meredith Grey</h1></div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/galeria/2.jpeg">
        <div class="carousel-caption d-none d-md-block"><h1 class="dark">Alex Karev</h1></div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/galeria/3.jpeg">
        <div class="carousel-caption d-none d-md-block"><h1 class="dark">Richard Webber</h1></div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/galeria/4.jpeg">
        <div class="carousel-caption d-none d-md-block"><h1 class="dark">Arizona Robbins</h1></div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/galeria/6.jpeg">
        <div class="carousel-caption d-none d-md-block"><h1 class="dark">April Kepner</h1></div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/galeria/7.jpeg">
        <div class="carousel-caption d-none d-md-block"><h1 class="dark">Jackson Avery</h1></div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/galeria/8.jpeg">
        <div class="carousel-caption d-none d-md-block"><h1 class="dark">Amelia Shepherd</h1></div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/galeria/9.jpeg">
        <div class="carousel-caption d-none d-md-block"><h1 class="dark">Jo Wilson</h1></div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carrosel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carrosel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </div>
  <div class="card-body">
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>