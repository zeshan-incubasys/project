<?php
require 'PHPMailerAutoload.php';

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$phone = $_POST['phone'];
	$company = $_POST['company'];

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "no-reply@incubasys.com";
$mail->Password = "no-rep@$$";
$mail->SetFrom("info@incubasys.com");
$mail->Subject = $name.' has contacted you from Incubasys.com';
$mail->Body = "<strong>Name</strong> $name <br /> <strong>Email</strong> $email <br /> <strong>Company</strong> $company <br/> <strong>Phone</strong> $phone <br/><strong>Message</strong> $message";
$mail->AddAddress("info@incubasys.com");
if(!$mail->Send())
    {
    //echo "Mailer Error: " . $mail->ErrorInfo;
	echo '0';
    }
    else
    {
    echo "Thank you for reaching out! We are mobilizing our team to respond to your query.";
    }
?>