<?php $Page = "Images_&_Videos"; ?>
<!DOCTYPE HTML>
<html>
	<head>
		<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="1f7aa78c-c868-4f0d-a39e-2914a5d0cc6a" data-blockingmode="auto" type="text/javascript"></script>
		<title>Bilder und Videos</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
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

										<article class="box page-content">

											<header>
												<h1 style="font-size:50px;">Dateiformate und Vergleiche</h1>
											</header>

											<section>
                                                <h2>Bilder(Einfach)</h3>
											</section>

											<section>
                                                <h3>PNG</h3>
												<br/>
												<img src="images/noDetail.png" height="500px">
												<br/>
												<p>
                                                    Png's haben einen Transparenten Hintergrund und sind mässig gut komprimiert.
                                                </p>
											</section>

											<section>
                                                <h3>Bitmap</h3>
												<br/>
												<img src="images/noDetail.bmp" height="500px">
												<br/>
												<p>
                                                    Bitmap's speichern jeden Pixel mit Farbe und Position, sie sind genau, jedoch auch sehr gross.
                                                </p>
											</section>

                                            <section>
                                                <h3>Gif</h3>
												<br/>
												<img src="images/noDetail.gif" height="500px">
												<br/>
												<p>
                                                    Gif's sind klein und können nicht sehr viele Details anzeigen.
                                                </p>
											</section>
											
											<section>
                                                <h3>Jpg</h3>
												<br/>
												<img src="images/noDetail.jpg" height="500px">
												<br/>
												<p>
                                                    JPG ist das vermutlich weitverbreiteste Bildformat. Es lässt sich leicht komprimieren aber es gibt dann auch schnell verluste.
                                                </p>
											</section>

											<section>
                                                <h2>Bilder(Komplex)</h3>
											</section>

											<section>
                                                <h3>PNG</h3>
												<br/>
												<img src="images/Detail.png" height="500px">
											</section>

											<section>
                                                <h3>Bitmap</h3>
												<br/>
												<img src="images/Detail.bmp" height="500px">
											</section>

                                            <section>
                                                <h3>Gif</h3>
												<br/>
												<img src="images/Detail.gif" height="500px">
											</section>
											
											<section>
                                                <h3>Jpg</h3>
												<br/>
												<img src="images/Detail.jpg" height="500px">
											</section>

                                            <section>
                                                <h2>Videos</h3>
											</section>

											<section>
                                                <h3>MP4</h3>
												<br/>
												<video width="320" height="240" controls>
													<source src="images/video.mp4" type="video/mp4">
												</video>
												<p>
                                                    MP4 ist ein sehr verbreitetes Video Format. Es kann untertitel beinhalten und wird von fast allen systemen unterstüzt.
                                                </p>
											</section>

											<section>
                                                <h3>Webm</h3>
												<br/>
												<embed type="video/webm" src="images/video.webm" width="320" height="240">
												<p>
                                                    Webm ist ein ebenfalls sehr verbreitetes Video Format, es ist etwa gleich auf wie mp4 es kann auch meistens mühelos eingebunden werden.
                                                </p>
											</section>

                                            <section>
                                                <h3>Mov</h3>
												<br/>
												<video width="320" height="240" controls>
													<source src="images/video.mov" type="video/mov">
												</video>
												<p>
                                                    Mov ist ein von Apple entwickeltes video Format, welches sich nicht sehr gut einbinden lässt.
                                                </p>
											</section>

											<section>
                                                <h2>Audio</h3>
											</section>

											<section>
                                                <h3>MP3</h3>
												<br/>
												<audio controls>
													<source src="images/sound.mp3" type="audio/mp3">
												</audio>
												<p>
                                                   Mp3 ist das weitverbreiteste Audio Format, es ist einfach einzubinden und läuft sehr stabil.
                                                </p>
											</section>

											<section>
                                                <h3>Wav</h3>
												<br/>
												<audio controls>
													<source src="images/sound.wav" type="audio/wav">
												</audio>
												<p>
                                                    Wav ist vermutlich das zweit häufigste Audio Format, es lässt sich ebenfalls gut einbinden, allerdings ist es nicht komprimiert.
                                                </p>
											</section>

                                            <section>
                                                <h3>Ogg</h3>
												<br/>
												<audio controls autoplay muted>
													<source src="images/sound.ogg" type="audio/ogg">
												</audio>
												<p>
                                                    OGG ist ein Audio Format welches fast so gut ist wie mp3. Die Komprimierung ist gut und die Qualität der Audio auch.
                                                </p>
											</section>
										</article>
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