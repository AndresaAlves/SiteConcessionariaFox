<?php
//sessão
session_start();

//conexão
require_once 'login/conexao.php';
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>CADASTROS</title>
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
							<li><a href="login/login.php" class="button primary">Entrar</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>Cadastre-se</h2>
							<p>Crie a sua conta única para todos os produtos deste site! </p>
						</header>

						<!-- Text -->









						<!-- Table -->


						<!-- Form -->
							<section>
								<h3>Form</h3>
								<form method="post" action="login/cadastroclientebd.php">
									<div class="row gtr-uniform gtr-50">
										<div class="col-6 col-12-xsmall">
											<input type="text" name="name" id="name" value="" placeholder="Nome" />
										</div>
										<div class="col-6 col-12-xsmall">
											<input type="email" name="email" id="email" value="" placeholder="Email" />
										</div><div class="row gtr-uniform gtr-50">
										<div class="col-6 col-12-xsmall">
											<input type="password" name="senha" id="password" value="" placeholder="senha" />
										</div>
										<div class="col-12">
											<select name="category" id="category">
												<option value="">- Sexo -</option>
												<option value="Masculino">Masculino</option>
												<option value="Feminino">Feminino</option>
												<option value="Nbinario">Não binário</option>

											</select>
										</div>
										<div class="col-4 col-12-medium">
											<input type="radio" id="priority-low" name="aceitar" checked>
											<label for="priority-low">Aceitar os termos de uso.</label>
										</div>

										<div class="col-6 col-12-medium">
											<input type="checkbox" id="copy" name="copy">
											<label for="copy">Envie-me uma cópia desta mensagem por e-mail</label>
										</div>
										<div class="col-6 col-12-medium">
											<input type="checkbox" id="human" name="human" checked>
											<label for="human">Eu sou humano e não um robô</label>
										</div>
										<div class="col-12">
											<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
										</div>
										<div class="col-12">
											<ul class="actions">
												<li><input type="submit" value="Concluir" class="primary" /></li>
												<li><input type="reset" value="Apagar" /></li>
											</ul>
										</div>
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
