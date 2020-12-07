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
					<h4>Sorry for the inconvenience,</h4>
					<h4>Content not available.</h4>
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
			audio: []
		});
	</script>
	<script src="app.js"></script>
</body>

</html>