<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="btrap/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<title>Document</title>
</head>
<body>
	<br><br>
	<style>
		#cont {
 		 border: 1px solid gray;
 		 padding: 20px;
 		 background: #ffff;
		}
	</style>
	<section class="container-sm" id="cont">
		<div>
			<h1>Cualcualdora Online</h1><br>
			<h6>bienvenido a la única calculadora que ocupa login para usarse...</h6><hr>
		</div>
		<form action="" class="form-inline">
			<input type="text" class="form-control" name="n1">
			<select name="options" class="form-control form-control-sm">
				<option value="1">sumar</option>
				<option value="2">restar</option>
				<option value="3">multiplicacar</option>
				<option value="4">dividir</option>
			</select>
			<input type="text" class="form-control" name="n2"><br>	
			<input type="submit" class="btn btn-primary btn-lg" value="calcular" name="cal">
		</form>
		
	<?php 

		if (isset($_REQUEST['cal'])) {

			$n1 = $_REQUEST['n1'];
			$n2 = $_REQUEST['n2'];
			$op = $_REQUEST['options'];

			switch ($op) {
				case 1:
					echo "$n1 + $n2 = ".suma($n1,$n2);
					break;
				case 2:
					echo "$n1 - $n2 = ".resta($n1,$n2);
					break;
				case 3:
					echo "$n1 * $n2 = " .mult($n1,$n2);
					break;
				case 4:
					echo "$n1 / $n2 = ".div($n1,$n2);
					break;
			}
		}

		//funciones-------------------------------------------
		 function suma ($n1, $n2){
			$suma = $n1+$n2;
			return $suma;
		}
		 function resta ($n1, $n2){
			$resta = $n1-$n2;
			return $resta;
		}
		 function mult ($n1, $n2){
			$mult = $n1*$n2;
			return $mult;
		}
		 function div ($n1, $n2){
			$div = $n1/$n2;
			return $div;
		}

	 ?>
	</section>

</body>
</html>