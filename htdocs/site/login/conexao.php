<?php
//conexão com o bd
$servername = "localhost";
$username= "root";
$password="";
$db_name="site_crud";

$conexao = mysqli_connect($servername,$username,$password,$db_name);

 if(!$conexao){
   die("não há conexão: ".mysqli_connect_error());

 }

?>
