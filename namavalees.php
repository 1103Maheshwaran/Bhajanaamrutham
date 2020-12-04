<!DOCTYPE HTML>
<html>

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
	<title>Namavalees</title>
	<link rel="shortcut icon" type="image/ico" href="images/om.ico">
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
						<h1>Namavalees</h1>
					</header>
					<div class="row1">
						<div class="column1">
							<a href="#" class="album-poster" data-switch="0">
								<div class="polaroid">
									<img src="images/shiva.jpg" style="width:100%">
									<div class="container">
										<h4>Gaja mukha​</h4>
									</div>
								</div>
							</a>
						</div>
						<div class="column1">
							<a href="#" class="album-poster" data-switch="1">
								<div class="polaroid">
									<img src="images/shiva.jpg" style="width:100%">
									<div class="container">
										<h4>Shankara Sutha</h4>
									</div>
								</div>
							</a>
						</div>
						<div class="column1">
							<a href="#" class="album-poster" data-switch="2">
								<div class="polaroid">
									<img src="images/shiva.jpg" style="width:100%">
									<div class="container">
										<h4>DuaDasha Netra</h4>
									</div>
								</div>
							</a>
						</div>
						<div class="column1">
							<a href="#" class="album-poster" data-switch="3">
								<div class="polaroid">
									<img src="images/shiva.jpg" style="width:100%">
									<div class="container">
										<h4>Sampoorna Chandramukha</h4>
									</div>
								</div>
							</a>
						</div>
						<div class="column1">
							<a href="#" class="album-poster" data-switch="4">
								<div class="polaroid">
									<img src="images/shiva.jpg" style="width:100%">
									<div class="container">
										<h4>Bala Netraja </h4>
									</div>
								</div>
							</a>
						</div>
						<div class="column1">
							<a href="#" class="album-poster" data-switch="5">
								<div class="polaroid">
									<img src="images/shiva.jpg" style="width:100%">
									<div class="container">
										<h4>Valli Vallabha</h4>
									</div>
								</div>
							</a>
						</div>
						<div class="column1">
							<a href="#" class="album-poster" data-switch="6">
								<div class="polaroid">
									<img src="images/shiva.jpg" style="width:100%">
									<div class="container">
										<h4>Valli Pathe</h4>
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
					name: 'Gaja Mukha',
					artist: 'Ragam-Yamunaa Kalyaani',
					url: 'https://dl.dropbox.com/s/a707r6a5zjwisgs/34.mp3?dl=0',
					cover: 'images/shiva.jpg'
				},
				{
					name: 'Shankara Sutha',
					artist: 'Ragam-',
					url: 'https://dl.dropbox.com/s/vps8s2srqqaimre/35.mp3?dl=0',
					cover: 'images/shiva.jpg'
				},
				{
					name: 'DuaDasha Netra',
					artist: 'Ragam',
					url: 'https://dl.dropbox.com/s/i7myktdltpp1k0p/36.mp3?dl=0',
					cover: 'images/shiva.jpg'
				},
				{
					name: 'Sampoorna Chandramukha',
					artist: 'Ragam-',
					url: 'https://dl.dropbox.com/s/0dhylnw80y9ki5s/37.mp3?dl=0',
					cover: 'images/shiva.jpg'
				},
				{
					name: 'Bala Netraja',
					artist: 'Ragam',
					url: 'https://dl.dropbox.com/s/a7ngpp72d6h3m2l/38.mp3?dl=0',
					cover: 'images/shiva.jpg',
				},
				{
					name: 'Valli Vallabha',
					artist: 'Ragam',
					url: 'https://dl.dropbox.com/s/qwuouoo6al5q9k7/41.mp3?dl=0',
					cover: 'images/shiva.jpg',
				},
				{
					name: 'Valli Pathe',
					artist: 'Ragam-',
					url: 'https://dl.dropbox.com/s/3au3xzoufl9rae3/42.mp3?dl=0',
					cover: 'images/shiva.jpg',
				},
			]
		});
	</script>
	<script src="app.js"></script>
</body>

</html>