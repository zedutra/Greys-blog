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

<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
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
  <h2 style="text-align: center;">Alyssa Milano e Holly Marie voltarão as telonas em episódio da 16 temporada</h2>
  <img class="card-img-top" src="img/post/post1.jpg">
  <div class="card-body">
    <p class="card-text">No episódio de 10 de outubro, Combs e Milano interpretam as irmãs de um paciente com morte cerebral após cair em um canteiro de obras. Durante o episódio, as irmãs terão que decidir se devem ou não manter sua irmã viva. Combs (que acabou de se casar) e Milano interpretaram irmãs bruxas com Shannen Doherty nas três primeiras temporadas de Charmed e depois ao lado de Rose McGowan na segunda metade do programa. As duas atrizes também se reuniram com os produtores executivos de Grey, Krista Vernoff e Andy Reaser, escritores de Charmed. A Atriz Holly Marie também fez o papel de Ella Montgomery na série Pretty Little Liars. A nova temporada estreia dia 26 de Setembro nos Estados Unidos.</p>
  </div>
</div>

<div class="card container col-8" style="padding-top: 5px; margin-top: 20px;">
  <h2 style="text-align: center;">Destino de Jackson será revelado no primeiro episódio</h2>
  <img class="card-img-top" src="img/post/post2.jpg">
  <div class="card-body">
    <p class="card-text">[ALERTA DE SPOILERS] No final da temporada 15, Jackson se perdeu no meio do nevoeiro e não sabemos do paradeiro dele. A tensão ficou no ar, mas será que algo grave vai acontecer com ele? Veremos no próximo episódio.</p>
  </div>
</div>

<div class="card container col-8" style="padding-top: 5px; margin-top: 20px;">
  <h2 style="text-align: center;">16ª temporada irá abordar problemas do sistema médico, políticas de imigração e controle de armas.</h2>
  <img class="card-img-top" src="img/post/post3.jpg">
  <div class="card-body">
    <p class="card-text">Nova temporada do maior drama da ABC irá abordar assuntos em alta nos noticiários dos Estados Unidos e ao redor do mundo. De acordo com a showrunner da produção, Krista Vernoff, a nova temporada terá alguns episódios com foco na imigração e do sistema de saúde “quebrado” do país.</p>
  </div>
</div>

<div class="card container col-8" style="padding-top: 5px; margin-top: 20px;">
  <h2 style="text-align: center;">Katherine Heigl pode voltar na 16 temporada</h2>
  <img class="card-img-top" src="img/post/post4-1.jpg">
  <div class="card-body">
    <p class="card-text">Será que nossa amada Izzie Stevens está voltando para Seattle? O que acontece no momento é que a roteirista Krista Vernoff está querendo trazer alguém do elenco de volta para a série.

    “Estou tentando trazer alguém de volta,”, disse Krista (leia a matéria completa aqui) “Existe um personagem que gostaria que fizesse uma aparição nesta temporada. Mas ainda é um verdadeiro ‘talvez’. Só que estamos tentando de verdade”, disse a roteirista ao TV Line. 

    Os fãs vieram a loucura após ver a seguinte atualização:.</p>
    <img class="card-img-top" src="img/post/post4-2.jpg">
    <p class="card-text">Exatamente, a estrela da série Ellen Pompeo (Meredith Grey) começou a segui-la no Instagram. Já foi o bastante para os fãs criar várias teorias. Mas agora que Alex está MUITO BEM casado com Jo Wilson, Izzie voltaria para dar uma apimentada no relacionamento deles? Seria uma ótima trama.</p>
  </div>
</div>

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
