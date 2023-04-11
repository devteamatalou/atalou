<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require_once "PHPMailer/src/Exception.php";
	require_once "PHPMailer/src/PHPMailer.php";
	require_once "PHPMailer/src/SMTP.php";

	$mail = new PHPMailer(true);
	$alert = "";

	if(isset($_POST['send_btn']))
	{
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$msg = $_POST['msg'];

		try
		{
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = 'twistaboy20@gmail.com';
			$mail->Password = 'jqyjtvtpnycaorvx';
			$mail->SMTPSecure = 'tls';
			$mail->Port = '587';

			$mail->setFrom($email, $fullname);
			$mail->addAddress('twistaboy20@gmail.com');
			// $mail->addAddress('pierrechriswesley@gmail.com');

			$mail->isHTML(true);
			$mail->Subject = $subject;
			$mail->Body = $msg;
			$mail->send();

			$alert = "<div class='alert-success'><span>Message sent! Thank you for contacting us.</span></div>";
		}
		catch (Exception $e)
		{
			$alert = "<div class='alert-danger'><span>Message not sent! ERROR->".$e->getMessage()."</span></div>";
		}
	}

?>