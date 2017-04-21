@extends('layout/master')

@section('title','Berita')

@section('main')
  <?php
session_start();

include("Main/php/simple-php-captcha/simple-php-captcha.php");
include("Main/php/php-mailer/PHPMailerAutoload.php");

// Step 1 - Enter your email address below.
$to = 'mugnirusmana95@gmail.com';

if(isset($_POST['emailSent'])) {

	$subject = $_POST['subject'];

	// Step 2 - If you don't want a "captcha" verification, remove that IF.
	if (strtolower($_POST["captcha"]) == strtolower($_SESSION['captcha']['code'])) {

		$name = $_POST['name'];
		$email = $_POST['email'];

		// Step 3 - Configure the fields list that you want to receive on the email.
		$fields = array(
			0 => array(
				'text' => 'Name',
				'val' => $_POST['name']
			),
			1 => array(
				'text' => 'Email address',
				'val' => $_POST['email']
			),
			2 => array(
				'text' => 'subject',
				'val' => $_POST['subject']
			),
			3 => array(
				'text' => 'Message',
				'val' => $_POST['message']
			)
		);

		$message = "Gila loe";

		foreach($fields as $field) {
			$message .= $field['text'].": " . htmlspecialchars($field['val'], ENT_QUOTES) . "<br>\n";
		}

		$mail = new PHPMailer;

		$mail->IsSMTP();                                      // Set mailer to use SMTP
		$mail->SMTPDebug = 0;                                 // Debug Mode

		// Step 4 - If you don't receive the email, try to configure the parameters below:

		//$mail->Host = 'mail.yourserver.com';				  // Specify main and backup server
		//$mail->SMTPAuth = true;                             // Enable SMTP authentication
		//$mail->Username = 'username';             		  // SMTP username
		//$mail->Password = 'secret';                         // SMTP password
		//$mail->SMTPSecure = 'tls';                          // Enable encryption, 'ssl' also accepted

		$mail->From = $email;
		$mail->FromName = $_POST['name'];
		$mail->AddAddress($to);
		$mail->AddReplyTo($email, $name);

		$mail->IsHTML(true);

		$mail->CharSet = 'UTF-8';

		$mail->Subject = $subject;
		$mail->Body    = $message;

		// Step 5 - If you don't want to attach any files, remove that code below
		if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] == UPLOAD_ERR_OK) {
			$mail->AddAttachment($_FILES['attachment']['tmp_name'], $_FILES['attachment']['name']);
		}

		if($mail->Send()) {
			$arrResult = array('response'=> 'success');
		} else {
			$arrResult = array('response'=> 'error', 'error'=> $mail->ErrorInfo);
		}

	} else {

		$arrResult['response'] = 'captchaError';

	}

}
?>
  <div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="index.php">Beranda</a></li>
									<li class="active">Hubungi Kami</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Hubungi Kami</h1>
							</div>
						</div>
					</div>
				</section>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				<div class="google-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5023527197854!2d107.62244311477308!3d-6.94991459497883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e85e4b70ea31%3A0xa80ced72f27427f5!2sLPKIA!5e0!3m2!1sid!2sid!4v1492452491412" width="100%" height="100%" allowfullscreen></iframe>
				</div>

				<hr>

				<div class="container">

					<div class="row">
						<div class="col-md-6">

							<div class="offset-anchor" id="contact-sent"></div>

							<?php
							if (isset($arrResult)) {
								if($arrResult['response'] == 'success') {
								?>
								<div class="alert alert-success" id="contactSuccess">
									<strong>Success!</strong> Pesan anda telah terkirim.
								</div>
								<?php
								} else if($arrResult['response'] == 'error') {
								?>
								<div class="alert alert-danger" id="contactError">
									<strong>Error!</strong> Ada kesalahan saat mengirim pesan. (<?php echo $arrResult['error'];?>)
								</div>
								<?php
								} else if($arrResult['response'] == 'captchaError') {
								?>
								<div class="alert alert-danger" id="contactError">
									<strong>Error!</strong> Gagal memverifikasi.
								</div>
								<?php
								}
							}
							?>

							<h2 class="mb-sm mt-sm"><strong>Hubungi</strong> Kami</h2>
							<form id="contactFormAdvanced" action="<?php echo basename($_SERVER['PHP_SELF']); ?>#contact-sent" method="POST" enctype="multipart/form-data">
								<input type="hidden" value="true" name="emailSent" id="emailSent">
								<div class="row">
									<div class="form-group">
										<div class="col-md-6">
											<label>Nama Lengkap <i class="red">*</i></label>
											<input type="text" value="" data-msg-required="Kolom nama tidak boleh kosong." maxlength="100" class="form-control" name="name" id="name" required>
										</div>
										<div class="col-md-6">
											<label>Email <i class="red">*</i></label>
											<input type="email" value="" data-msg-required="Kolom email tidak boleh kosong." data-msg-email="Masukan alamat email dengan benar." maxlength="100" class="form-control" name="email" id="email" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>Subject <i class="red">*</i></label>
											<input type="text" value="" data-msg-required="Kolom subject tidak boleh kosong." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="subject" id="subject" required>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>Pesan <i class="red">*</i></label>
											<textarea maxlength="5000" data-msg-required="Kolom pesan tidak boleh kosong." rows="6" class="form-control" name="message" id="message" required></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<label>Kode captcha <i class="red">*</i></label>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-4">
											<div class="captcha form-control">
												<div class="captcha-image">
													<?php
													$_SESSION['captcha'] = simple_php_captcha(array(
														'min_length' => 6,
														'max_length' => 6,
														'min_font_size' => 22,
														'max_font_size' => 22,
														'angle_max' => 3
													));

													$_SESSION['captchaCode'] = $_SESSION['captcha']['code'];

													echo '<img id="captcha-image" src="' . "php/simple-php-captcha/simple-php-captcha.php/" . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA code">';
													?>
												</div>
												<div class="captcha-refresh">
													<a href="#" id="refreshCaptcha"><i class="fa fa-refresh"></i></a>
												</div>
											</div>
										</div>
										<div class="col-md-8">
											<input type="text" value="" maxlength="6" data-msg-captcha="Kode captcha salah." data-msg-required="Kode captcha tidak boleh kosong" placeholder="" class="form-control input-lg captcha-input" name="captcha" id="captcha" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<input type="submit" id="contactFormSubmit" value="Kirim" class="btn btn-primary btn-lg pull-right" data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>
						<div class="col-md-6">

							<h4 class="heading-primary mt-lg"><strong>Informasi</strong></h4>
							<p class="lead">Pastikan kolom yang memiliki tanda <i class="red">* </i> diisi dengan benar</p>

							<p>(tidak boleh ada kolom yang kosong).</p>

							<hr>

							<h4 class="heading-primary">Kontak <strong>Kami</strong></h4>
							<ul class="list list-icons list-icons-style-3 mt-xlg">
								<li><i class="fa fa-map-marker"></i> <strong>Alamat:</strong> <p>Jl. Soekarno Hatta No.456, Batununggal, Bandung Kidul, Kota Bandung, Jawa Barat 40266</p>	</li>
								<li><i class="fa fa-phone"></i> <strong>Telepon:</strong> <p> (022) 7564283 / 7564284</p></li>
								<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <p><a class="c1" href="mailto:mail@example.com">mail@example.com</a></p></li>
							</ul>

							<hr>

						</div>
					</div>

				</div>

			</div>
@endsection
