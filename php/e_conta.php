<?php include_once "funcoes.php"; include "conexao.php";?> 
<div id="inicio" class="card container" style="padding-top: 5px; margin-top: 20px;">
  <div class="card-body">
    <form method="post" action="">
      <h2 class="card-title">Confirme seus dados para excluir a conta</h2>
      <div class="form-group">
        <label>Endereço de email</label>
        <input required type="email" class="form-control" placeholder="Seu email" name="email">
      </div>
      <div class="form-group">
        <label>Senha</label>
        <input required type="password" class="form-control" placeholder="Senha" name="senha">
      </div>
      <button type="submit" class="btn btn-danger">Excluir</button>
    </form>
    <?php
    if (isset($_POST["email"])){
      $email = $_POST["email"];
      $senha = $_POST["senha"];
      $codigo = $_SESSION["id"];
      $senha = md5($senha);
      $con = conecta_mysql();
      $sql = "SELECT * FROM usuarios WHERE id='$codigo' and email='$email'";
      $resultado = mysqli_query($con,$sql);
      if ($resultado){
        print("sla oq deu");
        $con = conecta_mysql();
        $sql = "DELETE FROM usuarios WHERE id='$codigo'";
        $deu = mysqli_query($con,$sql);
        $con = conecta_mysql();
        $sql = "DELETE FROM postagem WHERE id_usuario='$codigo'";
        $deu = mysqli_query($con,$sql);
        session_destroy();
        header("location:index.php");
      }
      else {
        print "<script> alert('Email ou Senha Incorretos'); </script>";
      }
    }
    ?>
  </div>
</div>