<?php
$msg = "";

use PHPMailer\PHPMailer\PHPMailer;

include_once "PHPMailer/PHPMailer.php";
include_once "PHPMailer/Exception.php";
include_once "PHPMailer/SMTP.php";

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	//$file= $_POST['attachment'];

		/*if (isset($_FILES['attachment']['name']) && $_FILES['attachment']['name'] != "") {
			$file = "attachment/" . basename($_FILES['attachment']['name']);
			move_uploaded_file($_FILES['attachment']['tmp_name'], $file);
		} else
			$file = "";
		*/
	$mail = new PHPMailer();

	//if we want to send via SMTP
	$mail->Host = "smtp.gmail.com";
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->Username = "1103maheshwaran@gmail.com";
	$mail->Password = "ram12shyam";
	$mail->SMTPSecure = "tls"; //ssl
	$mail->Port = 587; //465

	$mail->addAddress('1103maheshwaran@gmail.com');
	$mail->setFrom($email);
	$mail->Subject = "name:" . $name . " mail:" . $email . " ";
	$mail->isHTML(true);
	$mail->Body = $message;
	//$mail->addAttachment($file);
	$mail->addAttachment($_FILES['attachment']['tmp_name'],$_FILES['attachment']['name']);

	if ($mail->send())
		$msg = "Your email has been sent, thank you!";
	else
		$msg = "Please try again!";

	//	echo $msg;
	//	echo $name;
	//	echo $email;
	//	echo $message;

	//unlink($file);
}
?>
<script>
	if (window.history.replaceState) {
		window.history.replaceState(null, null, window.location.href);
	}

	/*function myFunction() {
		alert("Please confirm to send the message");
	}*/
	function myFunction() {
		var x = document.getElementById("snackbar");
		x.className = "show";
		setTimeout(function() {
			x.className = x.className.replace("show", "");
		}, 3000);
	}
</script>

<footer id="footer">
	<div class="inner">
		<section>
			<h2>Anything to say</h2>
			<form method="post" enctype="multipart/form-data" action="">
				<div class="fields">
					<div class="field half">
						<input type="text" name="name" id="name" placeholder="Name" />
					</div>
					<div class="field half">
						<input type="email" name="email" id="email" placeholder="Email" />
					</div>
					<div class="field">
						<textarea name="message" id="message" placeholder="Message"></textarea>
					</div>
					<div class="field half">
						<input type="file" name="attachment" id="attachment" placeholder="Attachments">
					</div>
				</div>
				<ul class="actions">
					<li onclick="myFunction()"><input type="submit" name="submit" value="send" class="primary"></li>
				</ul>
				<div id="snackbar">Thanks for sending the message...</div>
			</form>
		</section>
		<section>
			<h2>Map</h2>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15797.896948071102!2d77.46537760000002!3d8.154881099999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2ba5b892b06c8c39!2sSree%20Thanumalayan%20Temple!5e0!3m2!1sen!2sin!4v1606124407634!5m2!1sen!2sin" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
			</iframe>

		</section>
		<ul class="copyright">
			<li>&copy; Copyrights. All rights reserved</li>
		</ul>
	</div>
</footer>