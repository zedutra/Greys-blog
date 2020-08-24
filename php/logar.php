<?php
if (isset($_POST["email"])){
  $email = $_POST["email"];
  $senha = $_POST["senha"];
  $senha = md5($senha);
  include_once "conexao.php";
  $con = conecta_mysql();
  $sql = "SELECT * FROM usuarios WHERE email='$email' and senha='$senha'";
  $resultado = mysqli_query($con,$sql);
  if ($resultado) {
    $dados = mysqli_fetch_assoc($resultado);
    if (isset($dados["id"])) {
      session_start();
      $_SESSION["id"] = $dados["id"];
      $_SESSION["usuario"] = $dados["usuario"];
      $_SESSION["email"] = $dados["email"];
      header("location:../index.php");
    }
    else {
      print "<script> alert('Email ou Senha Incorretos'); </script>";
    }
  }
}
?>