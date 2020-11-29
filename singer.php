<!DOCTYPE HTML>
<html>

<head>
	<title>Singers</title>
	<link rel="shortcut icon" type="image/ico" href="images/om.ico">
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
		<<?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/assets/php/";
            include($IPATH . "header.php"); ?> 
            <!-- Menu -->
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
			<div id="main">
				<div class="inner">
					<h1>Singers</h1>
					<h4>Images will be uploaded soon</h4>
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

</body>

</html>