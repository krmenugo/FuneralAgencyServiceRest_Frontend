<?php
$cn = mysqli_connect("127.0.0.1","root","","vales_getsemani");
if(!$cn){
	echo "Error en la Conexion con el Servidor MySQL,
	      <br>Consulte al Administrador de BD";
	exit();
}

mysqli_query($cn,"SET NAMES 'utf8'");
?>