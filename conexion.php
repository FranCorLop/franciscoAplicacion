<?php 

	$server ='localhost';
	$user ='francisco';
	$pass ='cisco';
	$bd ='software';

	$con = new mysqli($server, $user, $pass, $bd);
	if (mysqli_connect_errno()) {
		printf("Conexión fallida");
	}else{
		//printf("conexión exitosa");
	}

 ?>
