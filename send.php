<?php
session_start();
//Almacenando los valores recibidos
// $sNombre = $_POST['nombre'];
// $sDe   = $_POST['correo'];
// $stelefono   = $_POST['telefono'];
// $mensaje = $_POST['mensaje'];
// $sTipo	= $_POST['asunto'];
// $sPara     = "rmolina@allmark.pe";
// $sAsunto = "Nuevo Mensaje Web  ".date("d-m-Y H:i:s");

// $bHayFicheros = 0;
// $sCabeceraTexto = "";
// $sAdjuntos = "";
// $mensajeA	.="Datos del contacto\n";
// $mensajeA	.="---------------------------------\n";
// $mensajeA	.="Motivo del Mensaje: ".$sTipo."\n";
// $mensajeA	.="Nombres y Apellidos: ".$sNombre."\n";
// $mensajeA	.="Email: ".$sDe."\n";
// $mensajeA	.="Telefono: ".$stelefono."\n";
// $mensajeA	.="Comentario: ".$mensaje."\n";


// if ($sDe)$sCabeceras = "From:".$sDe."\n";
// else $sCabeceras = "";
// $sCabeceras .= "MIME-version: 1.0\n";

// $sTexto .= "
// ".$mensajeA." ";


// if ($bHayFicheros == 0)
// {
// $bHayFicheros = 1;
// $sCabeceras .= "Content-type: multipart/mixed;";
// $sCabeceras .= "boundary=\"--_Separador-de-mensajes_--\"\n";

// $sCabeceraTexto = "----_Separador-de-mensajes_--\n";
// $sCabeceraTexto .= "Content-type: text/plain; charset=iso-8859-1\n";
// $sCabeceraTexto .= "Content-transfer-encoding: 7BIT\n";

// $sTexto = $sCabeceraTexto.$sTexto;
// }
// if ($_FILES['adjunto']['size'] > 0)
// {
// $sAdjuntos .= "\n\n----_Separador-de-mensajes_--\n";
// $sAdjuntos .= "Content-type: ".$_FILES['adjunto']['type'].";name=\"".$_FILES['adjunto']['name']."\"\n";;
// $sAdjuntos .= "Content-Transfer-Encoding: BASE64\n";
// $sAdjuntos .= "Content-disposition: attachment;filename=\"".$_FILES['adjunto']['name']."\"\n\n";

// $oFichero = fopen($_FILES['adjunto']["tmp_name"], 'r');
// $sContenido = fread($oFichero, filesize($_FILES['adjunto']["tmp_name"]));
// $sAdjuntos .= chunk_split(base64_encode($sContenido));
// fclose($oFichero);
// }

// if ($bHayFicheros)
// $sTexto .= $sAdjuntos."\n\n----_Separador-de-mensajes_----\n";

// $rpta = mail($sPara, $sAsunto,$sTexto, $sCabeceras);
// if($rpta) {
// 	$_SESSION['MESSAGE'] = 'Mensaje enviado satisfactoriamente';
// } else {
// 	$_SESSION['ERROR_MESSAGE'] = 'Ups.. hubo un error al intentar enviar el mensaje, intentelo de nuevo.';
// }

$params = [
	'nombre' => FILTER_SANITIZE_STRING,
	'correo' => FILTER_VALIDATE_EMAIL,
	'telefono' => FILTER_SANITIZE_STRING,
	'mensaje' => FILTER_SANITIZE_STRING,
	'asunto' => FILTER_SANITIZE_STRING
];

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

	if ($_FILES['adjunto']['size'] > 0)
	{
		$oFichero = fopen($_FILES['adjunto']["tmp_name"], 'r');
		$sContenido = fread($oFichero, filesize($_FILES['adjunto']["tmp_name"]));
		$sAdjuntos = base64_encode($sContenido);
		fclose($oFichero);
	}

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
		$mail->addAddress('larriega@gmail.com', 'Oscar Larriega');
		$mail->addReplyTo('no-reply@allmark.pe', 'Allmark');
		$mail->AddAttachment($sAdjuntos, 'Archivo adjuntado');

		$mail->isHTML(true);

		$mail->Subject = 'Enviado desde allmark';
		$mail->Body    = nl2br('<br>Teléfono: </b>'.$values['telefono'].'<br><br><hr>'.$values['mensaje']);
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