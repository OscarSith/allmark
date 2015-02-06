<?php
session_start();

$params = array(
	'nombre' => FILTER_SANITIZE_STRING,
	'correo' => FILTER_VALIDATE_EMAIL,
	'telefono' => FILTER_SANITIZE_STRING,
	'mensaje' => FILTER_SANITIZE_STRING,
	'asunto' => FILTER_SANITIZE_STRING
);

$values = filter_input_array(INPUT_POST, $params);

if (empty($values['nombre']))
{
	$_SESSION['ERROR_MESSAGE'] = 'El nombre es requerido';
}
else if (!$values['correo'])
{
	$_SESSION['ERROR_MESSAGE'] = 'Debe poner un email válido';
}
else if (empty($values['telefono']))
{
	$_SESSION['ERROR_MESSAGE'] = 'El teléfono es requerido';
}
else if (empty($values['mensaje']))
{
	$_SESSION['ERROR_MESSAGE'] = 'Debe escribir su mensaje';
}
else
{
	require 'mailer/PHPMailerAutoload.php';

	$mail = new PHPMailer(true);

	try {
		$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->Host = 'localhost';
		$mail->SMTPSecure = 'tls';
		$mail->Username = '';
		$mail->Password = '';
		$mail->CharSet = 'UTF-8';

		$mail->From = $values['correo'];
		$mail->FromName = $values['nombre'];

		$mail->addAddress('info@allmark.pe', 'Información');
		$mail->addAddress('rmolina@allmark.pe', 'Rafael Molina');
		$mail->addCC($values['correo'], $values['nombre']);
		$mail->addReplyTo('no-reply@allmark.pe', 'Allmark');

		if (isset($_FILES['adjunto']) && $_FILES['adjunto']['error'] == UPLOAD_ERR_OK) {
			$mail->AddAttachment($_FILES['adjunto']['tmp_name'], $_FILES['adjunto']['name']);
		}

		$mail->isHTML(true);

		$mail->Subject = 'Enviado desde allmark';
		$mail->Body    = nl2br('<br><h3>'.$values['asunto'].'</h3><b>Correo:</b> '.$values['correo'].'<br><b>Teléfono:</b> '.$values['telefono'].'<br><br><blockquote style="border-left:5px solid #CCC;padding: 4px 7px;">'.$values['mensaje'].'</blockquote>');
		$mail->AltBody = $values['mensaje'];

		if(!$mail->send()) {
			$_SESSION['ERROR_MESSAGE'] = 'El mensaje no pudo ser enviado, intentelo de nuevo, error: '.$mail->ErrorInfo;
		} else {
		    $_SESSION['MESSAGE'] = 'Tu mensaje ha sido enviado';
		}
	} catch (phpmailerException $pex) {
		$_SESSION['ERROR_MESSAGE'] = $pex->getMessage();
	}
}
header('location: '.$_SERVER['HTTP_REFERER']);