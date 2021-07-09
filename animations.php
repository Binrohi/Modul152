<?php $Page = "animations"; ?>
<!DOCTYPE HTML>
<html>
	<head>
		<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="1f7aa78c-c868-4f0d-a39e-2914a5d0cc6a" data-blockingmode="auto" type="text/javascript"></script>
		<title>animations</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="assets/js/game.js" type="text/javascript"></script>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Nav -->
				<?php include "menu.php";?>

			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="content">

									<!-- Content -->
										<h1 style="font-size:50px;">Animationen</h1>
										<section>
											<h2>Css Animationen</h2>
											<p>Hier habe ich 3 verschiedene animationen implementiert, die habe ich mit keyframes gemacht. Sie werden mit dem Pseudo Element :focus angefangen, das heisst man muss bevor man die gleiche Animation ein zweites mal anschauen kann zuerst den focus vom element nehmen, sprich einmal irgendwo anders hin Klicken.</p>
											<button id="effect">Effekt 1</button>
											<button id="effect2">effekt 2</button>
											<button id="effect3">Effekt 3</button>
										</section>
										<br/><br/>
										<section>
											<h2>Html5 Canvas</h2>
											<p>Hier habe ich einen Canvas und ein Kleines Quadrat welches sich darin bewegen kann.</p>
											<Button><a href="game.html">Hier ist ein Spiel</a></button>
										</section>
										<section>
											<h2>SVG animation</h2>
											<p>Dies ist meine SVG Animation, ich habe sie mit <a href="https://.svgator.com/">Svgator</a> gemacht.</p>
											<object id ="amogus" type="image/svg+xml" data="images/amogus.svg"></object>
										</section>
										<section>
											<h2>Scroll Animation</h2>
											<p>Für die Scroll Animation hatte ich keine Zeit mehr.</p>
										</section>
								</div>
							</div>
						</div>
					</div>
				</section>

			<!-- Footer -->
			<?php include "footer.php";?>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>