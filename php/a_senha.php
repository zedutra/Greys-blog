<?php include_once "funcoes.php"; include_once "conexao.php";?> 
<div class="card container" style="padding-top: 5px; margin-top: 20px; margin-bottom: 20px;">
  <div class="card-body">
    <form method="post" action="">
      <h2 class="card-title">Altere sua senha</h2>
      <div class="form-group">
        <label>Nova senha</label>
        <input required type="password" class="form-control" placeholder="Senha" name="senha">
      </div>
      <div class="form-group">
        <label>Confirmar nova senha</label>
        <input required type="password" class="form-control" placeholder="Confirmar senha" name="senha1">
      </div>
      <button type="submit" class="btn btn-primary">Alterar</button>
    </form>
    <?php
    if (isset($_POST["senha"])) {
      $senha = $_POST["senha"];
      $senha1 = $_POST["senha1"];
      if($senha == $senha1){
          $senha = md5($senha);
          $codigo = $_SESSION["id"];
          $con = conecta_mysql();
          $sql = "UPDATE usuarios SET senha = '$senha' where id = '$codigo'";
          $resultado = mysqli_query($con,$sql);
          if($resultado){
            $_SESSION["senha"] = $senha;
            print "<script> alert('Senha alterada'); window.location.href=window.location.href;</script>";
          }
          else{
            print "<script> alert('Erro de conexao')</script>";          
          }
      }
    }
    ?>
  </div>
</div>