<?php
	require_once 'mailer/class.phpmailer.php';
	  $mail = new PHPMailer();
	  $mail->IsSMTP(); 
	  $mail->Host = 'mail.host.com';
	  $mail->Port = 25;
	  $mail->SMTPAuth = true;
	  $mail->Username = 'no-reply@mail.com';
	  $mail->Password = 'Xd.GZwlSqegf';
	  $mail->From       = "no-reply@mail.com";
	  $mail->FromName   = "YOUR WEBSITE NAME";

	  $mail->AddAddress('test@gmail.com', 'Website Admin');
	  $mail->Subject = 'Booking Form';
	  $mail->IsHTML(true);
	  $mail->Body = $mail_content;

	  if(!$mail->Send()) {
	    echo 'Mailer error: '.$mail->ErrorInfo;
	  } else {
	    //echo "<script>alert('Mail Sent Successfully');</script>";
	    echo "ok";
	  }
?>