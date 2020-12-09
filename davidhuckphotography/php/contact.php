<?php

	if(isset($_POST['submit'])){
		$firstName = $_POST['fName'];
		$lastName = $_POST['lName'];
		$FromEmail = $_POST['email'];
		$message = $_POST['message'];

		$mailTo = 'contact@davidhuck.net';
		$headers = "From: " . $FromEmail;
		$txt = "You have recieved an email from " . $firstName. ".\n\n".$message;


		mail($mailTo, $message, $txt, $headers);
		echo "<script>alert(sentSuccess)</script>";
		header('Location: contact.html?sendMail');


	}

?>