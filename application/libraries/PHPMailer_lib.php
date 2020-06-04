<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	class PHPMailer_lib{
		public function __construct(){
			log_message('Debug','PHPMailer class is loaded.');
		}

		public function load(){
			require_once APPPATH.'third_party/PHPMailer/Exception.php';
			require_once APPPATH.'third_party/PHPMailer/PHPMailer.php';
			require_once APPPATH.'third_party/PHPMailer/SMTP.php';

			$mail= new PHPMailer;
			$mail->isSMTP();
			$mail->Host='smtp.gmail.com';
			$mail->SMTPAuth=true;
			$mail->Username = USERNAME;
			$mail->Password = PWD;
			$mail->SMTPSecure = 'ssl';
			$mail->Port     = 465;
			$mail->isHTML(true);
			
			$mail->setFrom(USERNAME, 'Grace International School');
			$mail->addReplyTo(USERNAME, 'Grace International School');
			return $mail;
		}

	}
?>