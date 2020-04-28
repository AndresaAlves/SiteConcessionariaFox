<?php
//sessão
session_start();

//conexão
require_once 'conexao.php';

$nome = $_POST['name'];
$senha = $_POST['senha'];
$sexo = $_POST['category'];
$email = $_POST['email'];
$message = $_POST['message'];



	$sql = mysqli_query($conexao, "INSERT INTO cadastroclientes(nome, senha, sexo, email,mensagem) VALUES ('$nome', '$senha', '$sexo', '$email', '$message')");

	if (!$sql) {
		# code...
		echo "Não Inseriu.";
	} else {
		# code...
		echo "Inseriu com Sucesso!";
	}

?>
