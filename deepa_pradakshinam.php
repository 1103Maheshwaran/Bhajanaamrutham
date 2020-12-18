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
	<title>Deepa Pradakshinam</title>
	<link rel="shortcut icon" type="image/ico" href="images/om.ico" alt="om">
	<meta name="description" content="Deepa Pradakshinam belongs to the first part of Sree Subrahmanya Bhajanaamrutham after Divyanaamam">
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
						<h1>Deepa Pradakshinam</h1>
					</header>
					<div class="row1">
						<div class="column1">
							<a href="#" class="album-poster" data-switch="0">
								<div class="polaroid">
									<img src="images/shiva.jpg" style="width:100%" alt="Shiva Kutambam">
									<div class="container">
										<h4>Skanda Deva Shanmukha</h4>
									</div>
								</div>
							</a>
						</div>
						<div class="column1">
							<a href="#" class="album-poster" data-switch="1">
								<div class="polaroid">
									<img src="images/shiva.jpg" style="width:100%" alt="Shiva Kutambam">
									<div class="container">
										<h4>Amara Sena Adipathe</h4>
									</div>
								</div>
							</a>
						</div>
						<div class="column1">
							<a href="#" class="album-poster" data-switch="2">
								<div class="polaroid">
									<img src="images/shiva.jpg" style="width:100%" alt="Shiva Kutambam">
									<div class="container">
										<h4>Deva Deva Nayaki</h4>
									</div>
								</div>
							</a>
						</div>
						<div class="column1">
							<a href="#" class="album-poster" data-switch="3">
								<div class="polaroid">
									<img src="images/shiva.jpg" style="width:100%" alt="Shiva Kutambam">
									<div class="container">
										<h4>Shanmuka Natha Pahi</h4>
									</div>
								</div>
							</a>
						</div>
						<div class="column1">
							<a href="#" class="album-poster" data-switch="4">
								<div class="polaroid">
									<img src="images/shiva.jpg" style="width:100%" alt="Shiva Kutambam">
									<div class="container">
										<h4>Palayamam Guha</h4>
									</div>
								</div>
							</a>
						</div>
						<div class="column1">
							<a href="#" class="album-poster" data-switch="5">
								<div class="polaroid">
									<img src="images/shiva.jpg" style="width:100%" alt="Shiva Kutambam">
									<div class="container">
										<h4>Kedayalo</h4>
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
			audio: [
				{
					name: 'Skanda Deva Shanmukha',
					artist: 'Ragam-',
					url: 'https://dl.dropbox.com/s/ol1vtut04tmku9z/Shanmukha.mp3?dl=0',
					cover: 'images/shiva.jpg'
				},
				{
					name: 'Amara Sena Adipathe',
					artist: 'Ragam-Ananda Bhairavi',
					url: 'https://dl.dropbox.com/s/c4w0g3pq36udjza/Amarasenadepa.mp3?dl=0',
					cover: 'images/shiva.jpg'
				},
				{
					name: 'Deva Deva Nayaki',
					artist: 'Ragam-Kuranjee',
					url: 'https://dl.dropbox.com/s/gw9g167fgoryvkh/Deva%20Deva%20Nayaki.mp3?dl=0',
					cover: 'images/shiva.jpg'
				},
				{
					name: 'Shanmuka Natha Pahi',
					artist: 'Ragam-Kaanada',
					url: 'https://dl.dropbox.com/s/2lh02s6u6ymt7g3/Shanmuka%20natha%20pahi.mp3?dl=0',
					cover: 'images/shiva.jpg'
				},
				{
					name: 'Palayamam Guha',
					artist: 'Ragam-Ananda Bhairavi',
					url: 'https://dl.dropbox.com/s/s8upan267gal1ce/Palayamam%20Guha.mp3?dl=0',
					cover: 'images/shiva.jpg'
				},
				{
					name: 'Kedayalo',
					artist: 'Ragam-Thodi',
					url: 'https://dl.dropbox.com/s/yyhz3dm43ugfsg8/Kedayalo.mp3?dl=0',
					cover: 'images/shiva.jpg'
				},
			]
		});
	</script>
	<script src="app.js"></script>
</body>

</html>