<?php
if ( isset($_POST["r_usuario"]) ) {
	$usuario = $_POST["r_usuario"];
	$email = $_POST["r_email"];
	$senha = $_POST["r_senha"];
	$senha2 = $_POST["r_senha2"];

	if ($senha == $senha2) {
		$senha = md5($senha);
		include_once "conexao.php";
		$con = conecta_mysql();
		if ($con) {
			include_once "funcoes.php";
			if (verificar_email($con,$email)) {
				$sql = "INSERT INTO usuarios (usuario, email, senha) values ('$usuario', '$email', '$senha')";
				$resultado = mysqli_query($con,$sql);
				if ($resultado) {
					print "<script>alert('Registrado com sucesso, faça login para postar comentários.'); window.location.href=window.location.href; </script>";
						header("location:../login.php");
					}
					else {
						print "Conexão mal sucedida (erro de SQL)";
						}
				}
				else {
					print "Email já cadastrado";
				}
			}
		else {
			print "Conexão mal sucedida";
		}
	}
	else {
		// print "Suas senhas são diferentes";
		print "<script> alert('Suas senhas são diferentes') </script>";
	}
}
?>