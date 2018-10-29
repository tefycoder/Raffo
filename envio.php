<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$movil = $_POST['numpiso'];
$mensaje = $_POST['mensaje'];
$para = 'igor.romero@ntfutura.com';
$titulo = 'NT-FUTURA';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Movile: $movil\n Mensaje:\n $mensaje";
 
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		if (strlen(trim($movil)) >= 7 ) {
			if (strlen($mensaje) >= 4 ) {
				mail($para, $titulo, $msjCorreo, $header);
			}
		}	
	}


echo '<script> 
alert("Nos contactaremos  a la brevedad");   
</script>';


echo "<script language='javascript'>window.location.href = 'http://ntfutura.com/';</script>";





 

?>