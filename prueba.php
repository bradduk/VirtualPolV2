<?php
/*echo "<p>El estado del servicio actual de etherpad es: </p>";
echo exec("service etherpad-lite status");
echo "<p>intentando apagar con /etc/rc.d/init.d/etherpad-lite stop</p>";
echo exec("/etc/rc.d/init.d/etherpad-lite stop");

echo "<p>El estado del servicio actual de etherpad es: </p>";
echo exec("service etherpad-lite status");

echo "<p>intentando apagar con service etherpad-lite stop</p>";
echo exec("service etherpad-lite stop");

echo "<p>El estado del servicio actual de etherpad es: </p>";
echo exec("service etherpad-lite status");

echo "<p> el usuario es </p>";
echo exec("whoami");*/

echo "<p>El estado del servicio actual de etherpad es: </p>";
echo exec("service etherpad-lite status");

define('CONTACTO_EMAIL', 'desarrollo@virtualpol.com');

$cabeceras = "From: VirtualPol <".CONTACTO_EMAIL.">;\nReturn-Path: VirtualPol <".CONTACTO_EMAIL.">;\nX-Sender: VirtualPol <".CONTACTO_EMAIL.">;\n MIME-Version: 1.0;\nContent-type: text/html; charset=UTF-8\n";
$email = '';
$asunto = 'probando';
$mensaje = 'esto es una prueba';

//echo mail($email, $asunto, $mensaje, $cabeceras);
	
//echo $email;
//echo $asunto;
//echo $mensaje;
//echo $cabeceras;
	

//echo exec("/var/www/vhosts/virtualpol.com/httpdocs/restart.sh");
//echo shell_exec("whoami");
?>
<br/><br/>
<a href="http://virtualpol.com:9001/">Link</a>
