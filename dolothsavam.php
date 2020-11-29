<!DOCTYPE HTML>
<html>

<head>
	<title>Dolothsavam</title>
	<link rel="shortcut icon" type="image/ico" href="images/om.ico">
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body>
	<div class="is-preload">
		<!-- Wrapper -->
		<div id="wrapper">

			<!-- Header -->
			<!--?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; include($IPATH."header.php"); ?-->

			<!-- Menu -->
			<!-- Nav -->
			<header id="header">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="#menu">Menu</a></li>
						</ul>
					</nav>
				</div>
			</header>
			<nav id="menu">
				<h2>Menu</h2>
				<ul>
					<li><a href="index">Home</a></li>
					<li><a href="about_composer">About Composer</a></li>
					<li><a href="gallery">Gallery</a></li>
					<li><a href="singer">Singers</a></li>
				</ul>
			</nav>
			<!-- Main -->
			<!-- Bootstrap CSS -->
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
			<!-- APlayer CSS -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.css" />
			<link rel="stylesheet" href="assets/css/player.css" />
			<div class="main">
				<div class="inner">
					<header>
						<h1>Dolothsavam<br /></h1>
						<h3></h3>
					</header>
					<div class="container">
						<div class="row">

							<div class="col-md-3">
								<a href="#" class="album-poster" data-switch="0">
									<img src="images/shiva.jpg" alt="">
								</a>
								<h4>Indradi Deva Gana</h4>
							</div>
							<div class="col-md-3">
								<a href="#" class="album-poster" data-switch="1">
									<img src="images/shiva.jpg" alt="">
								</a>
								<h4>Shauryodha Sagara</h4>
							</div>
							<div class="col-md-3">
								<a href="#" class="album-poster" data-switch="2">
									<img src="images/shiva.jpg" alt="">
								</a>
								<h4>Deva Senapathe</h4>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="aplayer"></div>

			<!-- Jquery Link -->
			<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
			<!-- Bootstrap Link -->
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
			<!-- APlayer Jquery link -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.js"></script>

			<script>
				// NOW I CLICK album-poster TO GET CURRENT SONG ID
				$(".album-poster").on('click', function(e) {
					var dataSwitchId = $(this).attr('data-switch');
					//console.log(dataSwitchId);

					// and now i use aplayer switch function see
					ap.list.switch(dataSwitchId); //this is static id but i use dynamic 

					// aplayer play function
					// when i click any song to play
					ap.play();

					// click to slideUp player see
					$("#aplayer").addClass('showPlayer');
				});

				const ap = new APlayer({
					container: document.getElementById('aplayer'),
					listFolded: true,
					audio: [{
							name: 'Indradi Deva Gana',
							artist: 'Ramani',
							url: 'https://dl.dropbox.com/s/w686ozxgubh8yg6/21.mp3?dl=0',
							cover: 'images/shiva.jpg'
						},
						{
							name: 'Shauryodha Sagara', // SONG NAME
							artist: 'Ramini', //ARTIST NAME
							url: 'https://dl.dropbox.com/s/kwcigx3ydj6a0ij/22.mp3?dl=0', // PATH NAME AND SONG URL
							cover: 'images/shiva.jpg' // COVER IMAGE
						},
						{
							name: 'Deva Senapathe ',
							artist: 'Ramini',
							url: 'https://dl.dropbox.com/s/miy8we5smdz5rs5/25.mp3?dl=0',
							cover: 'images/shiva.jpg',
						},
					]
				});
			</script>

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
</body>

</html>