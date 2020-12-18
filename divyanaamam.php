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
	<title>STHAANUNATHA Divyanaamam</title>
	<link rel="shortcut icon" type="image/ico" href="images/om.ico" alt="om">
	<meta name="description" content="Divyanaamam belongs to the first part of Sree Subrahmanya Bhajanaamrutham which comes after Deeparadhanam">
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
						<h1>Divyanaamam</h1>
					</header>
					<div class="row1">
						<div class="column1">
							<a href="#" class="album-poster" data-switch="0">
								<div class="polaroid">
									<img src="images/shiva.jpg" style="width:100%" alt="Shiva Kutambam">
									<div class="container">
										<h4>Deva Sena Adipathe</h4>
									</div>
								</div>
							</a>
						</div>
						<div class="column1">
							<a href="#" class="album-poster" data-switch="1">
								<div class="polaroid">
									<img src="images/shiva.jpg" style="width:100%" alt="Shiva Kutambam">
									<div class="container">
										<h4>Chandrakaladara</h4>
									</div>
								</div>
							</a>
						</div>
						<div class="column1">
							<a href="#" class="album-poster" data-switch="2">
								<div class="polaroid">
									<img src="images/shiva.jpg" style="width:100%" alt="Shiva Kutambam">
									<div class="container">
										<h4>Karthikeyavi Mukhe</h4>
									</div>
								</div>
							</a>
						</div>
						<div class="column1">
							<a href="#" class="album-poster" data-switch="3">
								<div class="polaroid">
									<img src="images/shiva.jpg" style="width:100%" alt="Shiva Kutambam">
									<div class="container">
										<h4>Shanmukasya Charita</h4>
									</div>
								</div>
							</a>
						</div>
						<div class="column1">
							<a href="#" class="album-poster" data-switch="4">
								<div class="polaroid">
									<img src="images/shiva.jpg" style="width:100%" alt="Shiva Kutambam">
									<div class="container">
										<h4>Slokas</h4>
									</div>
								</div>
							</a>
						</div>
						<div class="column1">
							<a href="#" class="album-poster" data-switch="5">
								<div class="polaroid">
									<img src="images/shiva.jpg" style="width:100%" alt="Shiva Kutambam">
									<div class="container">
										<h4>Skandha Deva</h4>
									</div>
								</div>
							</a>
						</div>
						<div class="column1">
							<a href="#" class="album-poster" data-switch="6">
								<div class="polaroid">
									<img src="images/shiva.jpg" style="width:100%" alt="Shiva Kutambam">
									<div class="container">
										<h4>Bahuleya</h4>
									</div>
								</div>
							</a>
						</div>
						<div class="column1">
							<a href="#" class="album-poster" data-switch="7">
								<div class="polaroid">
									<img src="images/shiva.jpg" style="width:100%" alt="Shiva Kutambam">
									<div class="container">
										<h4>Karthikeya</h4>
									</div>
								</div>
							</a>
						</div>
						<div class="column1">
							<a href="#" class="album-poster" data-switch="8">
								<div class="polaroid">
									<img src="images/shiva.jpg" style="width:100%" alt="Shiva Kutambam">
									<div class="container">
										<h4>Tharakare</h4>
									</div>
								</div>
							</a>
						</div>
						<div class="column1">
							<a href="#" class="album-poster" data-switch="9">
								<div class="polaroid">
									<img src="images/shiva.jpg" style="width:100%" alt="Shiva Kutambam">
									<div class="container">
										<h4>Dwadasakshe</h4>
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
					name: 'Deva Sena Adipathe',
					artist: 'Ragam-Kuranjee',
					url: 'https://dl.dropbox.com/s/2yje8b0uzwd7u6w/Deva%20Sena%20Adipathe.mp3?dl=0',
					cover: 'images/shiva.jpg'
				},
				{
					name: 'Chandrakaladara',
					artist: 'Ragam-Nadanamakriya',
					url: 'https://dl.dropbox.com/s/4awdmxot6l0udwk/Chandrakaladhara.mp3?dl=0',
					cover: 'images/shiva.jpg'
				},
				{
					name: 'Karthikeyavi Mukhe',
					artist: 'Ragam-Nadanamakriya',
					url: 'https://dl.dropbox.com/s/a9xxyuajqqgbjc5/Karthikeya%20Vinuthe.mp3?dl=0',
					cover: 'images/shiva.jpg'
				},
				{
					name: 'Shanmukasya Charita',
					artist: 'Ragam-Shankarabharanam',
					url: 'https://dl.dropbox.com/s/7cnk6bzn4zv5c7y/Shanmukasya%20Charita.mp3?dl=0',
					cover: 'images/shiva.jpg'
				},
				{
					name: 'Slokas',
					artist: 'Ragam-',
					url: 'https://dl.dropbox.com/s/rf9jllgn1dqcz7d/slokas.mp3?dl=0',
					cover: 'images/shiva.jpg'
				},
				{
					name: 'Choornika-Skanda Deva',
					artist: 'Ragam-Kedara Gowla',
					url: 'https://dl.dropbox.com/s/9t3obdxzh1iiii3/Choornika-Skanda%20Deva.mp3?dl=0',
					cover: 'images/shiva.jpg'
				},
				{
					name: 'Choornika-Bahuleya',
					artist: 'Ragam-Saaveri',
					url: 'https://dl.dropbox.com/s/lq1o0brdz9xuzjh/Choornika-bahuleya.mp3?dl=0',
					cover: 'images/shiva.jpg'
				},
				{
					name: 'Choornika-karthikeya',
					artist: 'Ragam-Mohanam',
					url: 'https://dl.dropbox.com/s/qsqszervh2zfdob/Choornika-karthikeya.mp3?dl=0',
					cover: 'images/shiva.jpg'
				},
				{
					name: 'Choornika-Tharakare',
					artist: 'Ragam-Aananda Bhairavi',
					url: 'https://dl.dropbox.com/s/6s3atch8a3xwlvv/Choornika-tharakare.mp3?dl=0',
					cover: 'images/shiva.jpg'
				},
				{
					name: 'Choornika-Dwadasakshe',
					artist: 'Ragam-Kapi',
					url: 'https://dl.dropbox.com/s/bwhzs7se1d1q8o3/Choornika-dwadasakshe.mp3?dl=0',
					cover: 'images/shiva.jpg'
				},
			]
		});
	</script>
	<script src="app.js"></script>
</body>

</html>