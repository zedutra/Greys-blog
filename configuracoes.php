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
<body style="background-color: configuracoes/F8F9FA">
<?php verificar_login();?>
<nav id="barra" class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"><img src="img/logo.jpeg" width="50px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="configuracoes/conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
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
  <h2 style="text-align: center;">Configurações</h2>
  <div class="card-body">
    <div class="alert alert-primary" role="alert">
      <a href="alterar.php?alteracao=1">Alterar Nome de Usuário</a><br/><br/>
    </div>
    <div class="alert alert-success" role="alert">
      <a href="alterar.php?alteracao=2">Alterar E-mail</a><br/><br/>
    </div>
    <div class="alert alert-danger" role="alert">
      <a href="alterar.php?alteracao=3">Alterar Senha</a><br/><br/>
    </div>
    <div class="alert alert-dark" role="alert">
      <a href="alterar.php?alteracao=4">Excluir Conta</a><br/><br/>
    </div>
  </div>
</div>

<div class="card container col-8" style="padding-top: 5px; margin-top: 20px;">
  <img class="card-img-top" src="img/yougotthis.gif">
</div>

<footer class="container-fluid navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid justify-content-center">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="https://www.facebook.com/profile.php?id=100008689987251"><img src="img/facebook.png" width="50px"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.instagram.com/clara_nunes07/?hl=pt-br"><img src="img/instagram.png" width="50px"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#inicio"><img src="img/uparrow.png" width="50px"></a>
      </li>
    </ul>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
