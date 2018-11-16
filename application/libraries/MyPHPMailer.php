<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MyPHPMailer {
	public function MyPHPMailer() {
		//require_once('PHPMailer/src/PHPMailerAutoLoad.php');
		//use PHPMailer\PHPMailer\PHPMailer;
		//use PHPMailer\PHPMailer\Exception;
		
		// require 'PHPMailer/src/Exception.php';
		// require 'PHPMailer/src/PHPMailer.php';
		// require 'PHPMailer/src/SMTP.php';
		require_once (APPPATH.'libraries/phpmailer/src/Exception.php');
		require_once (APPPATH.'libraries/phpmailer/src/PHPMailer.php');
		require_once (APPPATH.'libraries/phpmailer/src/SMTP.php');

	}	
}