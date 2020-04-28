<?php
session_start();

require_once 'conexao.php';

 ?>


<!DOCTYPE HTML>

<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/_forms.scss" />
    <link rel="stylesheet" href="assets/css/main.css"/>
    <!--  <link rel="stylesheet" href="assets/css/main.css"/> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<h1>Concessionária FOX</h1>
				<p>Aqui o cliente e a velocidade andam juntos.<br />
				Nosso produto é confiavél e seguro além de transportar <br />pessoas de um lugar para outro com mais velocidade.<a href="../index.html">Concessionária FOX</a>.</p>
			</header>

		<!-- formulário -->
<!--colocar o do bootstrap-->


			<form  action="processo.php"  method="POST" >
     <form>
          <div class="form-group">
				<input type="text" style="width:400px; height:50px;"  class="form-control" name="email" id="email" placeholder="Email "  />
      </div>  <br>
      <div class="form-group">
        <input type="password" style="width:400px; height:50px;" class="form-control" name="senha" id="senha" placeholder="Senha" />
			</div> <br>
      	<input type="submit" id="btn" value="Entrar" />
			</form>


		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
					<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
				</ul>
				<ul class="copyright">
					<!--<li>&copy; Untitled.</li><li>Credits: <a href="http://html5up.net">HTML5 UP</a></li>-->
				</ul>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/main.js"></script>

	</body>
</html>
