<!DOCTYPE HTML>
<html lang="en">

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-HWFY8Y6BP5"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-HWFY8Y6BP5');
	</script>
	<title>Thodaka Mangalam</title>
	<link rel="shortcut icon" type="image/ico" href="images/om.ico">
	<meta name="description" content="Thodaka Mangalam is set of songs that Sree Subrahmanya Bhajanaamrutham starts with.">
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.css" />
	<link rel="stylesheet" href="assets/css/player.css" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body>
	<div class="startload">
		<img class="om" src="images/om.ico" alt="om" />
		<h3>Loading...</h3>
	</div>
	<div class="is-preload">
		<!-- Wrapper -->
		<div id="wrapper">
			<!-- Header -->
			<?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/assets/php/";
			include($IPATH . "header.php"); ?>

			<!-- Main -->
			<div id="main">
				<div class="inner">
					<header style="text-align: center;">
						<h1>Thodaka Mangalam</h1>
					</header>
					<div class="row1">
						<div class="column1">
							<a href="#" class="album-poster" data-switch="0">
								<div class="polaroid">
									<img src="images/shiva.jpg" style="width:100%" alt="Shiva Kutambam">
									<div class="container">
										<h4>Thodaka Dyahna Slokam​</h4>
									</div>
								</div>
							</a>
						</div>
						<div class="column1">
							<a href="#" class="album-poster" data-switch="1">
								<div class="polaroid">
									<img src="images/shiva.jpg" style="width:100%" alt="Shiva Kutambam">
									<div class="container">
										<h4>Jaya Janavi Thanaya​</h4>
									</div>
								</div>
							</a>
						</div>
						<div class="column1">
							<a href="#" class="album-poster" data-switch="2">
								<div class="polaroid">
									<img src="images/shiva.jpg" style="width:100%" alt="Shiva Kutambam">
									<div class="container">
										<h4>Sharanam Bhavathu</h4>
									</div>
								</div>
							</a>
						</div>
						<div class="column1">
							<a href="#" class="album-poster" data-switch="3">
								<div class="polaroid">
									<img src="images/shiva.jpg" style="width:100%" alt="Shiva Kutambam">
									<div class="container">
										<h4>Sharanaga Thamara</h4>
									</div>
								</div>
							</a>
						</div>
						<div class="column1">
							<a href="#" class="album-poster" data-switch="4">
								<div class="polaroid">
									<img src="images/shiva.jpg" style="width:100%" alt="Shiva Kutambam">
									<div class="container">
										<h4>Sura Nayaka</h4>
									</div>
								</div>
							</a>
						</div>
						<div class="column1">
							<a href="#" class="album-poster" data-switch="5">
								<div class="polaroid">
									<img src="images/shiva.jpg" style="width:100%" alt="Shiva Kutambam">
									<div class="container">
										<h4>Tharaka Hara</h4>
									</div>
								</div>
							</a>
						</div>
						<div class="column1">
							<a href="#" class="album-poster" data-switch="6">
								<div class="polaroid">
									<img src="images/shiva.jpg" style="width:100%" alt="Shiva Kutambam">
									<div class="container">
										<h4>Shamuka Nayaka</h4>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer -->
			<?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/assets/php/";
			include($IPATH . "foot.php"); ?>
		</div>
		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
	</div>

	<div id="aplayer"></div>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.js"></script>

	<script>
		$(".album-poster").on('click', function(e) {
			var dataSwitchId = $(this).attr('data-switch');
			//console.log(dataSwitchId);
			ap.list.switch(dataSwitchId);
			ap.play();
			$("#aplayer").addClass('showPlayer');
		});

		const ap = new APlayer({
			container: document.getElementById('aplayer'),
			listFolded: true,
			audio: [{
					name: 'Thodaka Dyahna Slokam',
					artist: 'Ragam-Naata',
					url: 'https://dl.dropbox.com/s/ovdz8wdstuw2mgw/dhayanaSlokam.mp3?dl=0',
					cover: 'images/shiva.jpg'
				},
				{
					name: 'Jaya Janavi Thanaya',
					artist: 'Ragam-Naata',
					url: 'https://dl.dropbox.com/s/miv7x9p31lx34ai/jayaJanakiThanaya.mp3?dl=0',
					cover: 'images/shiva.jpg'
				},
				{
					name: 'Sharanam Bhavathu',
					artist: 'Ragam-Aarabhee',
					url: 'https://dl.dropbox.com/s/049ys079vwfriv7/Sharanam.mp3?dl=0',
					cover: 'images/shiva.jpg'
				},
				{
					name: 'Sharanaga Thamara',
					artist: 'Ragam-Madhyamavti',
					url: 'https://dl.dropbox.com/s/b61ut8lq17jng2i/sharavanabava%20te%20namo.mp3?dl=0',
					cover: 'images/shiva.jpg'
				},
				{
					name: 'Sura Nayaka',
					artist: 'Ragam-Saveree',
					url: 'https://dl.dropbox.com/s/b0ikb6pkfafi1xf/sura%20nayaka.mp3?dl=0',
					cover: 'images/shiva.jpg'
				},
				{
					name: 'Tharaka Hara',
					artist: 'Ragam-Panthuvarali',
					url: 'https://dl.dropbox.com/s/3m4ejn5k6k2eb2j/Jaya%20Mangalam.mp3?dl=0',
					cover: 'images/shiva.jpg'
				},
				{
					name: 'Shamuka Nayaka',
					artist: 'Ragam-Nadanamakriya',
					url: 'https://dl.dropbox.com/s/stxmzede7cnfg50/shanmuka%20nayaka.mp3?dl=0',
					cover: 'images/shiva.jpg'
				},
			]
		});
	</script>
	<script src="app.js"></script>
</body>

</html>