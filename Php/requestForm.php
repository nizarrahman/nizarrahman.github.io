<?
$email = $_REQUEST["email"];
$to    = "rnizar221@gmail.com"; // ENTER YOUR EMAIL ADDRESS
if (isset($email)) {
    $email_subject = "This message was sent via Site Nai Topup"; // ENTER YOUR EMAIL SUBJECT
		$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "Email: ".$email.">\r\n"."Reply-To: ".$email."\r\n" ;
$msg     = "Email: $email";
	
   $mail =  mail($to, $email_subject, $msg, $headers);
  if($mail)
	{
		echo 'success';
	}

else
	{
		echo 'failed';
	}
}

?>