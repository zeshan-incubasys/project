<?php 
	$name = 'Tester';
	$email = 'kamililyas@gmail.com';
	$message = 'Any messsage that I can give...';
	$phone = '0304-8695183';
	$company = 'Incubasys';
	
	$to = 'kamil.ilyas@incubasys.com';
        $from = $email;
        $subject = $name.' has Contact You From Website';
        $headers = "Content-type: text/html\r\n";
        $headers  .= "From: $from\r\n";

        $success = mail($to, $subject, $message);//, $headers);

//        echo 'Status' . $success;
        print_r(error_get_last());
		
?>