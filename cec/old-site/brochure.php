<?php 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$org = $_POST['org'];
	
	$to = 'info@cecdubai.com';
	$from = $email;
	$subject = $name.' has Contact You From Website';
	$message = "<strong>Name</strong> $name <br /> <strong>Email</strong> $email <br /> <strong>Phone</strong> $phone <br/> <strong>Organization</strong> $org";
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	if (mail($to, $subject, $message, $headers)) {
		echo 'Thank you. Your Information has been send Sucessfully!'; 
	}else{
		echo '0';
	}

		
?>