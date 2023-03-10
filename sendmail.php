<?php
if(isset($_POST['submit'])){
	$to = ""; // Your email address
	$name = $_POST['contact-name'];
	$from = $_POST['contact-email'];
	$message = $_POST['contact-message'];
	$subject = "Contact Form Details";
	$headers = "From:" . $from;
	$result = mail($to,$subject,$message,$headers);

	if ($result) {
		echo '<script type="text/javascript">alert("Uw bericht is verzonden.  We bezorgen u zo snel mogelijk een antwoord!");</script>';
		echo '<script type="text/javascript">window.location.href = window.location.href;</script>';

	}else{
		echo '<script type="text/javascript">alert("Sorry! Uw bericht is niet verzonden, probeer later nog eens...");</script>';
		echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
	}
}
?>
