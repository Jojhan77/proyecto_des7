<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sistema de Apoyo Economico Estudiantil</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="estudiantetemplate/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="estudiantetemplate/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="estudiantetemplate/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="estudiantetemplate/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="estudiantetemplate/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="estudiantetemplate/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="estudiantetemplate/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="estudiantetemplate/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="estudiantetemplate/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="estudianteTemplate/css/util.css">
	<link rel="stylesheet" type="text/css" href="estudianteTemplate/css/main.css">
	<link rel="stylesheet" type="text/css" href="estudianteTemplate/assets/css/styles.css">
<!--===============================================================================================-->
</head>
<body >
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('estudianteTemplate/images/img1.jpg'); " >
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="verificar.php" method="POST">
					<span class="login100-form-title p-b-49">
						INICIAR SESIÓN
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Se requiere el nombre de usuario">
						<span class="label-input100">Correo</span>
						<input class="input100" type="text" name="user">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="se requiere contraseña">
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="password" name="contraseña" >
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							¿Se te olvidó tu contraseña?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						
							<div class="login100-form-bgbtn">
								 
							</div>
							<button class="boton" type="sumbit">
								INICIAR SESIÓN
							</button>
						
					</div>

					

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">

						<a href="registrarse.php" class="txt2">
							REGISTRARSE
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>