<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Kawiarnia Amaryllis | Logowanie</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="css/main.css" />
		<noscript><link rel="stylesheet" href="css/noscript.css" /></noscript>
	</head>
	

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="/">Amaryllis</a></h1>
						
					</header>

				


						<!-- Content -->
							<div class="wrapper">
								<div class="inner">
							<h2 class="major">Logowanie</h2>

							<form method="post" action="/login">
							{{ csrf_field() }}
								<div class="fields">
									
									<div class="field">
										<label for="E-mail">Email</label>
										<input type="text" name="Email" id="Email" />
									</div>
									<div class="field">
										<label for="password">Haslo</label>
										<input type="text" name="password" id="password" />
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Log in" /></li>
								</ul>
								@if ($errors -> has('message'))
								{{$errors ->first('message')  }}
								@endif
								</form>
								<a href="signup">Nie masz konta? Rejestracja</a>
				<!-- Footer -->
					<section id="footer">
						<div class="inner">




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
