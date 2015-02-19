<?php

class GoogleRecaptcha
{
	  /* Google recaptcha API url */
	  private $google_url = "https://www.google.com/recaptcha/api/siteverify";
	  private $secret = '6LckAwITAAAAAC92o8NJ3ZHhmIqR3650VKbvVkrM';

	  public function VerifyCaptcha($response)
	  {
			$url = $this->google_url."?secret=".$this->secret.
					"&response=".$response;

			$curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, $url);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
			curl_setopt($curl, CURLOPT_TIMEOUT, 15);
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
			curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
			$curlData = curl_exec($curl);

			curl_close($curl);

			$res = json_decode($curlData, TRUE);
			if($res['success'] == 'true')
				  return TRUE;
			else
				  return FALSE;
	  }

}

$message = 'Google reCaptcha';

if($_POST)
{
	  $response = $_POST['g-recaptcha-response'];

	  if(!empty($response))
	  {
			$cap = new GoogleRecaptcha();
			$verified = $cap->VerifyCaptcha($response);

			if($verified) {
				  // echo  $message = "Captcha Success!";
				  $to=$_POST['email'];
				  $subject=$_POST['subject'];
				  $message0=$_POST['message'];
				  $message1=$_POST['message1'];
				  $contact=$_POST['contact-number'];
				  $message=$message0.$message1.$contact;
				  if(mail($to,$subject,$message))
						echo "mail sent";
				  else
						echo "mail not sent";
			} else {
				  echo $message = "Please re-enter captcha";
			}
	  }
}
?>






