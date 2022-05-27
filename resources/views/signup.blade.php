<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Kawiarnia Amaryllis | Rejestracja</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="css/main.css" />
		<noscript><link rel="stylesheet" href="css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="home">Amaryllis</a></h1>
						
					</header>

				


						<!-- Content -->
							<div class="wrapper">
								<div class="inner">
							<h2 class="major">Rejestracja</h2>

							<form method="post" action="/signup">
								{{ csrf_field() }}
								<div class="fields">
									<div class="field">
										<label for="imie">Imię</label>
										<input type="text" name="imie" id="imie" />
									</div>
									<div class="field">
										<label for="nazwisko">Nazwisko</label>
										<input type="text" name="nazwisko" id="nazwisko" />
									</div>
									<div class="field">
										<label for="adres">Adres</label>
										<input type="text" name="adres" id="adres" />
									</div>
									<div class="field">
										<label for="E-mail">E-mail</label>
										<input type="text" name="Email" id="Email" />
									</div>
									
									<div class="field">
										<label for="password">Hasło</label>
										<input type="text" name="password" id="password" />
									</div>

								</div>
								
								<ul class="actions">
									<li><input type="submit" value="Sign up" /></li>
								</ul>
								</form>
								
								<a href="login">Masz konto? Zaloguj się</a>
				<!-- Footer -->
					<section id="footer">
						<div class="inner">



							</ul>
							<ul class="copyright">
								<li>&copy; Untitled Inc. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</section>

			</div>

		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/jquery.scrollex.min.js"></script>
			<script src="js/browser.min.js"></script>
			<script src="js/breakpoints.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main.js"></script>

	</body>
</html>
