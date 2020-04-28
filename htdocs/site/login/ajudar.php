<?php

include_once("conexao.php");


$message = $_POST['message'];



	$sql = mysqli_query($conexao, "INSERT INTO feedback(mensagem) VALUES ('$message')");
//eu preciso validar na transferência de arquivo
	//if ($sql==$i) {
		# code...
		//echo "Não Inseriu.";
	//} else {
		# code...
		//echo "Inseriu com Sucesso!";
	//}
$salvar=mysqli_query($conexao,$sql);

mysqli_close($conexao);

?>