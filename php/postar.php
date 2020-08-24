<?php
session_start();
if (isset($_POST["texto"])) {
	if (isset($_SESSION["usuario"])) {
		session_start();
		$id = $_SESSION["id"];
		$texto = $_POST["texto"];
		include_once "conexao.php";
		$con = conecta_mysql();
		$sql = "INSERT INTO postagem (id_usuario, texto) values ('$id', '$texto')";
		$resultado = mysqli_query($con,$sql);
		if ($resultado) {
			header("location:../comentarios.php");
		}
		else{
			print "<script> alert('Conexão mal sucedida, erro de SQL'); window.location.href=window.location.href; </script>";
		}
	}
	else{
		print "<script> alert('Faça login para continuar'); window.location.href=window.location.href; </script>";
	}
}
?>