<?php
session_start();

require_once 'conexao.php';


 $usuario=$_POST['email'];
 $password=$_POST['senha'];


 $query = mysqli_query($conexao, "SELECT * FROM usuario WHERE usuario='".$usuario."' and password = '".$password."'");
 $nr=mysqli_num_rows($query);

 if($nr == 1){
   //header("Location:página.html")
   echo "Bem-vindo: ".$usuario;
   echo "<br>ahhhhhhhhhhhhhhhhhhh";
 }
 else if ($nr ==0) {
   echo "Não foi";

 }
 ?>
