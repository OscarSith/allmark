<?php
session_start();
//Almacenando los valores recibidos
$sNombre = $_POST['nombre'];
$sDe   = $_POST['correo'];
$stelefono   = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
$sTipo	= $_POST['asunto'];
$sPara     = "rmolina@allmark.pe";
$sAsunto = "Nuevo Mensaje Web  ".date("d-m-Y H:i:s");

$bHayFicheros = 0;
$sCabeceraTexto = "";
$sAdjuntos = "";
$mensajeA	.="Datos del contacto\n";
$mensajeA	.="---------------------------------\n";
$mensajeA	.="Motivo del Mensaje: ".$sTipo."\n";
$mensajeA	.="Nombres y Apellidos: ".$sNombre."\n";
$mensajeA	.="Email: ".$sDe."\n";
$mensajeA	.="Telefono: ".$stelefono."\n";
$mensajeA	.="Comentario: ".$mensaje."\n";


if ($sDe)$sCabeceras = "From:".$sDe."\n";
else $sCabeceras = "";
$sCabeceras .= "MIME-version: 1.0\n";

$sTexto .= "
".$mensajeA." ";


if ($bHayFicheros == 0)
{
$bHayFicheros = 1;
$sCabeceras .= "Content-type: multipart/mixed;";
$sCabeceras .= "boundary=\"--_Separador-de-mensajes_--\"\n";

$sCabeceraTexto = "----_Separador-de-mensajes_--\n";
$sCabeceraTexto .= "Content-type: text/plain; charset=iso-8859-1\n";
$sCabeceraTexto .= "Content-transfer-encoding: 7BIT\n";

$sTexto = $sCabeceraTexto.$sTexto;
}
if ($_FILES['adjunto']['size'] > 0)
{
$sAdjuntos .= "\n\n----_Separador-de-mensajes_--\n";
$sAdjuntos .= "Content-type: ".$_FILES['adjunto']['type'].";name=\"".$_FILES['adjunto']['name']."\"\n";;
$sAdjuntos .= "Content-Transfer-Encoding: BASE64\n";
$sAdjuntos .= "Content-disposition: attachment;filename=\"".$_FILES['adjunto']['name']."\"\n\n";

$oFichero = fopen($_FILES['adjunto']["tmp_name"], 'r');
$sContenido = fread($oFichero, filesize($_FILES['adjunto']["tmp_name"]));
$sAdjuntos .= chunk_split(base64_encode($sContenido));
fclose($oFichero);
}

if ($bHayFicheros)
$sTexto .= $sAdjuntos."\n\n----_Separador-de-mensajes_----\n";

$rpta = mail($sPara, $sAsunto,$sTexto, $sCabeceras);
var_dump($rpta);
if($rpta) {
	$_SESSION['MESSAGE'] = 'Mensaje enviado satisfactoriamente';
} else {
	$_SESSION['ERROR_MESSAGE'] = 'Ups.. hubo un error al intentar enviar el mensaje, intentelo de nuevo.';
}
header('location: /');