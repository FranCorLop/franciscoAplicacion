<?php 

	$server ='localhost';
	$user ='root';
	$pass ='qwerty123';
	$bd ='software';

	$con = new mysqli($server, $user, $pass, $bd);
	if (mysqli_connect_errno()) {
		printf("Conexión fallida");
	}else{
		//printf("conexión exitosa");
	}

 ?>