<?php include_once "funcoes.php"; include_once "conexao.php";?> 
<div class="card container" style="padding-top: 5px; margin-top: 20px; margin-bottom: 20px;">
  <div class="card-body">
    <form method="post" action="">
      <h2 class="card-title">Altere seu email</h2>
      <div class="form-group">
        <label>Email atual</label>
        <input type="text" readonly class="form-control-plaintext" value="<?php mostrar_email();?>">
      </div>
      <div class="form-group">
        <label>Novo email</label>
        <input required type="email" class="form-control" placeholder="Email" name="email">
      </div>
      <button type="submit" class="btn btn-primary">Alterar</button>
    </form>
    <?php
    if(isset($_POST["email"])){
        $email = $_POST["email"];
        $codigo = $_SESSION["id"];
        $con = conecta_mysql();
        if(verificar_email($con,$email)){
          $sql = "UPDATE usuarios SET email = '$email' where id = '$codigo'";
          $resultado = mysqli_query($con,$sql);
          if($resultado){
            $_SESSION["email"] = $email;
            print "<script> alert('Email alterado'); window.location.href=window.location.href;</script>";
          }
          else{
            print "<script> alert('Erro de conexao')</script>";
          }
        }
        else{
          print "<script> alert('Email já está sendo utilizado.')</script>";
        }
      }
    ?>
  </div>
</div>
