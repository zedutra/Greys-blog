<!DOCTYPE html>
<html>
	<head>
	<title>Greys Anatomy</title>
	<meta charset="utf-8">
	<link rel="icon" type="img/png" href="img/favicon.png"/>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <?php include_once "php/funcoes.php"; include_once "php/conexao.php"; ?> 
</head>
<body>
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

<div id="inicio" class="card container col-8" style="padding-top: 5px; margin-top: 20px;">
  <h2 style="text-align: center;">Deixe um comentário me contando o que você achou do site :)</h2>
<!--   <img class="card-img-top" src="img/post/post1.jpg"> -->
  <div class="card-body">
	<form class="" method="post" action="php/postar.php">
		<textarea name="texto" class="col-sm" required maxlength="450" cols="50" rows="3"></textarea>
		<button class="btn btn-dark container-fluid botao" type="submit">Enviar mensagem</button>
	</form>
  
  </div>
</div>

<?php
$con = conecta_mysql();
$sql = "SELECT * FROM postagem";
$mensagem = listar_mensagem($con);
foreach ($mensagem as $mensagens) {
?>
<div class="card container col-8" style="padding-top: 5px; margin-top: 20px;">
  <h4><?php mostrar_usuario($con, $mensagens['id_usuario']); ?></h4><small class="text-muted"><?php $data = $mensagens['data_postagem']; print "Postado: ".date('d/m/Y',strtotime($data)) ?></small>
  <div class="card-body">
    <p class="card-text"><?php print $mensagens['texto']; ?></p>
  </div>
</div>
<?php  }?>

<footer class="container-fluid navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid justify-content-center">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="https://www.facebook.com"><img src="img/facebook.png" width="50px"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.instagram.com"><img src="img/instagram.png" width="50px"></a>
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