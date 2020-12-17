<!DOCTYPE HTML>
<html lang="en">

<head>
	<!-- Global site tag (gtag.js) - Google Analytics >
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-HWFY8Y6BP5"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-HWFY8Y6BP5');
	</script> -->
	<title>Bhajanaamrutham Gallery</title>
	<link rel="shortcut icon" type="image/ico" href="images/om.ico" alt="om">
	<meta name="description" content="Images that never get erased from our hearts.Images of Vadiveeswaram Gramam which now forms part of Naagercoil Town in Kanyakumari District of Tamil Nadu.">
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body class="is-preload">
	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/assets/php/";
		include($IPATH . "header.php"); ?>

		<!-- Main -->
		<div id="main">
			<div class="inner">
				<header style="text-align: center;">
					<h1>Gallery</h1>
				</header>
				<div class="gallery" id="gallery">
					<div class="gallery-item">
						<div class="content"><img src="images/sthanu.jpeg" alt=""></div>
					</div>
					<div class="column1">
						<!--div class="gallery-item">
						<div class="content"><img src="images/shiva.jpg" alt=""></div>
					</div-->
					</div>
				</div>
			</div>

			<!-- Footer -->
			<?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/assets/php/";
			include($IPATH . "foot.php"); ?>
		</div>

		<!--JAvaScript-->
		<script>
			var gallery = document.querySelector('#gallery');
			var getVal = function(elem, style) {
				return parseInt(window.getComputedStyle(elem).getPropertyValue(style));
			};
			var getHeight = function(item) {
				return item.querySelector('.content').getBoundingClientRect().height;
			};
			var resizeAll = function() {
				var altura = getVal(gallery, 'grid-auto-rows');
				var gap = getVal(gallery, 'grid-row-gap');
				gallery.querySelectorAll('.gallery-item').forEach(function(item) {
					var el = item;
					el.style.gridRowEnd = "span " + Math.ceil((getHeight(item) + gap) / (altura + gap));
				});
			};
			gallery.querySelectorAll('img').forEach(function(item) {
				if (item.complete) {
					console.log(item.src);
				} else {
					item.addEventListener('load', function() {
						var altura = getVal(gallery, 'grid-auto-rows');
						var gap = getVal(gallery, 'grid-row-gap');
						var gitem = item.parentElement.parentElement;
						gitem.style.gridRowEnd = "span " + Math.ceil((getHeight(gitem) + gap) / (altura + gap));
						item.classList.remove('byebye');
					});
				}
			});
			window.addEventListener('resize', resizeAll);
			gallery.querySelectorAll('.gallery-item').forEach(function(item) {
				item.addEventListener('click', function() {
					item.classList.toggle('full');
				});
			});
		</script>
		<!--JAvaScriptEnds-->
		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>

</body>

</html>