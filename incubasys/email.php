<?php 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$phone = $_POST['phone'];
	$company = $_POST['company'];
	
	$to = 'khurram.javed@incubasys.com';
	$from = $email;
	$subject = $name.' has Contact You From Website';
	$message = "<strong>Name</strong> $name <br /> <strong>Email</strong> $email <br /> <strong>Company</strong> $company <br/> <strong>Phone</strong> $phone <br/><strong>Message</strong> $message";
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	if (mail($to, $subject, $message, $headers)) {
		echo 'Thank you for reaching out! We are mobilizing our team to respond to your query.'; 
	}else{
		//$error = error_get_last();
//			$err = json_encode($error);
//			return $err;
		echo '0';
	}

		
?>