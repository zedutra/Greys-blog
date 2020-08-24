<?php
/*function conecta_mysql(){
	$host = "mysql669.umbler.com";
	$usuario = "anaclara";
	$senha = "senha147";
	$nome_bd = "greys";

	$conexao = mysqli_connect($host,$usuario,$senha,$nome_bd);
	mysqli_set_charset($conexao, "utf8");

	return $conexao;
}*/
function conecta_mysql(){
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$nome_bd = "greys";

	$conexao = mysqli_connect($host,$usuario,$senha,$nome_bd);
	mysqli_set_charset($conexao, "utf8");

	return $conexao;
}

?>
