<?php

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['email'];
	$message = $_POST['message'];

	$mailTo = "play360247@hotmail.com";
	$headers = "From: ".mailFrom;
	$txt = "You have received an e-mail from ".$name.".\n\n".$message;

	email($mailTo, $subject, $txt, $headers);

	header("Location: contact.php?mailsend");
}
