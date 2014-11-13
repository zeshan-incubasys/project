<?php if($_POST['fname']){	
	require_once('PHPMailer/class.phpmailer.php');
	include_once("PHPMailer/class.smtp.php");
	$body='Mongolia Business Congress Web Enquiry <br/>';
	$body.='First Name:'.$_POST['fname'].' <br/>';
	$body.='Surname:'.$_POST['lname'].' <br/>';
	$body.='Company:'.$_POST['company'].' <br/>';
	$body.='Position:'.$_POST['position'].' <br/>';
	$body.='Email:'.$_POST['email'].' <br/>';
	$body.='Phone:'.$_POST['phone'].' <br/>';
	$body.='Message:'.$_POST['message'].' <br/>';
	$mail = new PHPMailer(); // defaults to using php "mail()"
	$mail->IsSMTP(); // enable SMTP
	//$mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true; // authentication enabled
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465; // or 587
	$mail->IsHTML(true);
	$mail->Username = "no-reply@incubasys.com";
	$mail->Password = "no-rep@$$";
	
	$mail->AddReplyTo("info@mongoliabusinesscongress.com","Mongolia Congress");
	$mail->SetFrom("info@mongoliabusinesscongress.com","Mongolia Congress");
	
	$mail->AddReplyTo("info@mongoliabusinesscongress.com","Mongolia Congress");
	
	$address = "info@mongoliabusinesscongress.com";
	//$address = "zeshan.hassan@incubasys.com";
	$mail->AddAddress($address,"Mongolia Congress");
	
	$mail->Subject    = "Mongolia Business Congress Web Enquiry ";
	
	$mail->AltBody    = "Mongolia Business Congress – Web Enquiry "; // optional, comment out and test
	
	$mail->MsgHTML($body);
	
	if(!$mail->Send()) {
	  //echo "Mailer Error: " . $mail->ErrorInfo;
		header('Location: http://mongoliabusinesscongress.com/register.php');
	} else {
		header('Location: http://mongoliabusinesscongress.com/register.php');
	}
}?>