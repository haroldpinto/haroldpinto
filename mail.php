<?php

if (isset($_POST['yourName'])) && 
	isset($_POST['yourEmail']) && 
	isset($_POST['yourSubject']) && 
	isset($_POST['yourMessage'])) {
	$yourName = $_POST['yourName'];
	$yourEmail = $_POST['yourEmail'];
	$yourSubject = $_POST['yourSubject'];
	$yourMessage = $_POST['yourMessage'];
	$to = 'harpinmer@hotmail.com';
	$subject = "New Request - Portfolio";
	$body = '<html>
				<body>
					<h2>Feedback - My Portfolio</h2>
					<hr>
					<p>Name:<br>'.$yourName.'</p>
					<p>Email:<br>'.$yourEmail.'</p>
					<p>Subject:<br>'.$yourSubject.'</p>
					<p>Mesage:<br>'.$yourmessage.'</p>
				</body>
			</html>';

	$headers = "From: ".$yourName." <".$yourEmail">\r\n";
	$headers .= "Reply_To: ".$yourEmail."\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html: charset=utf-8";

	$send = mail($to, $subject, $body, $headers);
	if ($send) {
		echo <'<br>';
		echo 'Message successfully sent. I will be back with you shortly.';
	else {
		echo 'An error was encountered when trying to send your message. Please verify the information entered and try again.';
	}
}

?>