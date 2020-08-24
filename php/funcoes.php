<?php
session_start();

// VERIFICACOES
function verificar_email($con,$email){
	$sql = "SELECT email FROM usuarios
	WHERE email='$email'";
	$resultado = mysqli_query($con,$sql);
	$usuario = mysqli_fetch_assoc($resultado);
	if(isset($usuario["email"])) {
	  //Email encontrado
	  return false;
	}
	else {
	  // Email não encontrado
	  return true;
	}
}

function verificar_usuario($con,$usuario){
	$sql = "SELECT usuario FROM usuarios
	WHERE usuario='$usuario'";
	$resultado = mysqli_query($con,$sql);
	$usuarios = mysqli_fetch_assoc($resultado);
	if(isset($usuarios["usuario"])) {
	  //Email encontrado
	  return false;
	}
	else {
	  // Email não encontrado
	  return true;
	}
}

function verificar_login(){
	if (!isset($_SESSION["usuario"])) {
		print "<script>alert('Faça login para continuar.'); window.location.href=window.location.href; </script>";
		header("location:login.php");
	}
}

// MOSTRAR, LISTAR

function mostrar_nome(){
	if (isset($_SESSION["usuario"])) {
		print($_SESSION["usuario"]);
	}
	else{
		print("Login");
	}
}

function mostrar_usuario($con, $id){
	$sql = "SELECT usuario FROM usuarios WHERE id='$id'";
	$resultado = mysqli_query($con,$sql);
	$dados = mysqli_fetch_assoc($resultado);
	if(isset($resultado)) {
	  print $dados["usuario"];
	}
	else {
	  print('Usuário nao encontrado.');
	}
}

function mostrar_email(){
	if (isset($_SESSION["email"])) {
		print($_SESSION["email"]);
	}
	else{
		print("Login");
	}
}

function mostrar_link(){
	if (isset($_SESSION["usuario"])) {
		print("configuracoes.php");
	}
	else{
		print("login.php");
	}
}

function listar_mensagem($con){
	$sql = "SELECT id, id_usuario, texto, data FROM postagem ORDER BY id DESC limit 10";
	$resultado = mysqli_query($con,$sql);
	if($resultado){
		$mensagens = array();
		while( $linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC) ){
			$mensagens[] = $linha;
		}
	}
	else{
		echo 'erro';
	}
	return $mensagens;
}

?>
