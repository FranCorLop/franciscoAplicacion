<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="btrap/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<title>Login</title>
</head>
<body style="background: #F4F4F4;" class="text-center">
	<br><br><br><br>
	<style>
		#cont {
 		 border: 1px solid gray;
 		 padding: 20px;
 		 background: #ffff;
		}
	</style>

	<section class="container-sm">
		<center><h1>¡Bienvenido!</h1></center><hr>
		<div class="container-sm" id="cont">
		<section>
			<center><h1>Inicia sesión</h1></center><hr>
		</section>	
		<form action="login.php" method="POST" class="form-signin">
			<div class="form-group form-control-sm">
				<input type="text" name="user" class="form-control" placeholder="Usuario" required>
			</div>
			<div class="form-group form-control-sm">
				<input type="password" name="pass" class="form-control" placeholder="Contraseña" required>
			</div>
			<div class="form-group form-control-sm">	
				<center><input type="submit" name="btn-1" class="btn btn-primary btn-lg" value="Iniciar sesión"></center>
			</div>
			
		</form>
		</div>
	</section>
	<p class="mt-5 mb-3 text-muted">&copy; STAR TEAM 2019</p>


	<!-- ---------------------------------------------------------------------------------------------------- -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script> src="btrap/js/bootstrap.min.js"</script>
</body>
</html>