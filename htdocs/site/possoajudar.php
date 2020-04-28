

<?php

include_once("login/conexao.php");


$message = $_POST['message'];



	$sql = mysqli_query($conexao, "INSERT INTO feedback(mensagem) VALUES ('$message')");
//eu preciso validar na transferência de arquivo
	if (!$sql) {
		# code...
		//echo "Não Inseriu.";
	} else {
		# code...
		echo "Inseriu com Sucesso!";
	}
$salvar=mysqli_query($conexao,$sql);

mysqli_close($conexao);

?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Feedback</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index1.html">C.FOX</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="index1.html">Home</a></li>
							<li>
								<a href="#">Mais</a>
								<ul>
									<li><a href="possoajudar.html">Feedback</a></li>
									<li><a href="pagamento.html">...</a></li>
									<li><a href="inforproduto.html">Desenvolvedores</a></li>
									
								</ul>
							</li>
							<li><a href="cadastro.html">Cadastro</a></li>
							<li><a href="pastalogin/login.html" class="button primary">Entrar</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>Posso ajudar?</h2>
							<p></p>
						</header>
						<div class="row gtr-150">
							<div class="col-4 col-12-medium">

								<!-- Sidebar -->
								<section>
								
								<form method="post" action="possoajudar.php">
									<div class="col-12">
											<textarea name ="message"  id="message" placeholder="..." cols="" rows="8" required ></textarea>
										</div>
										</br><div class="col-12">
											<ul class="actions">
												<li><input type="submit" value="Concluir" class="primary" /></li>
												<li><input type="reset" value="Apagar" /></li>
											</ul>
										</div>
										</form>
							</section>


			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
