<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Gmail extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->library('MyPHPMailer');
	}
	public function index()
	{
		echo "CRUD EMAIL YA BROW";
	}

	public function email()
	{
		$mail=New PHPMailer\PHPMailer\PHPMailer(true);

		try {
			
		//$mail->SMTPDebug = 2;
		$mail->isSMTP();

		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'nrrendra.09@gmail.com';
		$mail->Password = 'XIItkjC24';
		$mail->SMTPSecure = 'tls';
		$mail->Port = '587';

		$mail->setFrom('nrrendra.09@gmail.com', 'Rendra');
		$mail->addAddress('sdnmanahan@gmail.com', 'NurRendraPrasetya');
		$mail->addReplyTo('nrrendra_09@yahoo.co.id','NurRendraPrasetya');
		//$mail->addBCC('bcc@example.com');

		//$mail->Attachment('/var/tmp/file.tar.gz');
		//$mail->Attachment('/tmp/image.jpg', 'new.jpg')

		$mail->isHTML(true);
		$mail->Subject = 'Registrasi Akun Sukses';
		$mail->Body = 'Terimakasih ya';
		$mail-> AltBody = 'Ini catatan';

		$mail->send();
			echo "Pesan telah terkirim";
		} catch(Exception $e) {
			echo "pesan gagal dikirim: <br><br> <b>Detail Error:<b><br>", $mail->ErrorInfo;
		}
	}

function random($length)
{
	$karakter='QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm1234567890!@#$%^&*()-+_=?<>{}[]:"';
	$string = ' ';
	for($i =0; $i < $length; $i++) {
	$pos = rand(0,strlen($karakter)-1);
	$string .= $karakter{$pos};
	}
	return $string;
}
public function sendemail()
{
	$nama= $this->input->post('nama');
	$email= $this->input->post('email');

	$username=$email;
	$password=$this->random(10); //membuat random 10 digit
	$this->kirim_email($email,$nama,$username,$password);
	echo "selamat email telah terkirim";
	echo"<meta http-equiv='Refresh' content='3; url=http://localhost/test24/index.php/input'>";
}

public function kirim_email($tujuan,$nama,$username,$password)
{
	$mail =new PHPMailer\PHPMailer\PHPMailer(true);
	try {
		//$mail->SMTPDebug = 2;
		$mail->isSMTP();

		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'nrrendra.09@gmail.com';
		$mail->Password = 'XIItkjC24';
		$mail->SMTPSecure = 'tls';
		$mail->Port = '587';

		$mail->setfrom('nrrendra.09@gmail.com', 'Admin');
		$mail->addAddress($tujuan,$nama);
		$message = '
			<html><body>
			<table border="0">
			<tr>
				<td width="40%">
					<img src="https://serving.photos.photobox.com/2438122914c4b4007688af660823b26cf99caa55e15c2c20c65195991d8a9fee22a61e10.jpg" width="150" height="200">
				</td>
				<td width="60%">
					<h3> RENDRA ONLINE SHOP</h3>
				</td>
			</tr>
			</table>
			halo '.$nama.' <br>
			Selamat akun anda telah teregistrasi
			<br>Anda bisa melakukan login dengan detail :
			<br>
			-------------------<br>
			Username: '.$username.' <br>
			Password: '.$password.' <br>
			-------------------<br>

			Jika ada kesulitan bisa menghubungi email : nrrendra.09@gmail.com
			<br>atau nomor telepon (1234)567
			';

		$mail->isHTML(true);
		$mail->Subject ='Account Anda';
		//$mail->body ='pesan yang dikirimkan ';
		$mail->Header= 'Aktivasi Akun';
		$mail->Body= $message;

		$mail->send();

		
		} catch(Exception $e) {
			echo "pesan gagal dikirim: <br><br> <b>Detail Error:<b><br>", $mail->ErrorInfo;
		}

	}
}