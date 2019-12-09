<?php 

	UserQuery($_POST['user'], $_POST['pass']);
	
	function UserQuery($user, $pass){
		include 'conexion.php';
		$query = "SELECT *  FROM login WHERE usuario = '.$user.' AND pass = '.$pass.' "; 
		$res = $con->query($query) or die ("error de compravación de usario: ".mysqli_error($con));

		$count = mysqli_num_rows($res);
		if ($count =! 0) {
				echo "<script> 
						alert('Bienvenido');
						window.location.href='calculadora.php';
			 		</script>";
		}else{
			echo "<script> 
						alert('Error al iniciar sesión, usario y/o contraseña incorrectos');
						window.location.href='index.php';
			 		</script>";
		}
	}

 ?>