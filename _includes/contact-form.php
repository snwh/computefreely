{% raw %}
<?php

use PHPMailer\PHPMailer\PHPMailer;

require __DIR__.'/lib/autoload.php';

require __DIR__.'/lib/PHPMailer/Exception.php';
require __DIR__.'/lib/PHPMailer/PHPMailer.php';
require __DIR__.'/lib/PHPMailer/SMTP.php';

// reCAPTCHA
$siteKey = '6LdHOxwTAAAAAKazyZvRfN3pYsxee4HPFOt-mh-2';
$secret = '6LdHOxwTAAAAANjlygM5sO2UtVMYcMzArEW8-82-';
$recaptcha = new \ReCaptcha\ReCaptcha($secret);

// check form inputs
function check_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

// check form validity
if ( $_POST['send_email'] ) {
	$name = check_input($_POST['name']);
	$subject = check_input($_POST['subject']);
	$message = check_input($_POST['message']);
	$email = check_input($_POST['email']);

	if(!preg_match("/^[A-Za-z .'-]+$/", $name)){
		$name_error = "<div class='infobar coloured warning'>Invalid name. Please try again.</div>";
	}
	if(!preg_match("/^[A-Za-z .'-]+$/", $subject)){
		$subject_error = "<div class='infobar coloured warning'>Invalid subject. Please try again.</div>";
	}
	if(!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)){
		$email_error = "<div class='infobar coloured warning'>Invalid email address. Please try again.</div>";
	}
	if(strlen($message) === 0){
		$message_error = "<div class='infobar coloured warning'>Your message should not be empty.</div>";
	}
}

// send email if no errors
if ( $_POST['send_email'] && !isset($name_error) && !isset($subject_error) && !isset($email_error) && !isset($message_error)) {

	$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
	$msg = "";

	// if successful
	if ($resp->isSuccess()) {

		// Mail
		$mail = new PHPMailer();

		// Set up SMTP
		$mail->IsSMTP();
		$mail->Host = "localhost";
		$mail->Port = 25;

		// recipient
		$mail->setFrom('postmaster@snwh.org', 'Postmaster');

		// recipient
		$mail->addAddress('sam@snwh.org', 'Sam Hewitt');

		// sender's email address
		$mail->addReplyTo($email, $name);

		// Compose email
		$mail->Subject = "$subject - Contact Form"; // subject
		$mail->isHTML(false); // keep it simple
		//Build a simple message body
		$mail->Body = "Email: {$email}\nName: {$name}\nMessage: the following message was sent from the 'snwh.org' contact form.\n\n{$message}";
		//Send the message, check for errors
		if (!$mail->send()) {
			// The reason for failing to send will be in $mail->ErrorInfo
			// but you shouldn't display errors to users - process the error, log it on your server.
			$msg = "<div class='infobar coloured error'>Mailer error. Message not sent.</div>";
		} else {
			$msg = "<div class='infobar'>Mail sent successfully. Thank you $name, look forward to a reply.</div>";
		}
	} else {
		// if reCAPTCHA check fails display message
		$msg = "<div class='infobar coloured error'>Sorry, but please complete the reCAPTCHA (to prove you're not a robot).</div>";
	}
}

?>
{% endraw %}