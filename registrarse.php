<!DOCTYPE html>
<html lang="en">
<head>
	<title>Regístrate</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="estudianteTemplate/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="estudianteTemplate/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="estudianteTemplate/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="estudianteTemplate/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="estudianteTemplate/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="estudianteTemplate/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="estudianteTemplate/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="estudianteTemplate/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="estudianteTemplate/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="estudianteTemplate/css/util.css">
	<link rel="stylesheet" type="text/css" href="estudianteTemplate/css/main.css">
	<link rel="stylesheet" type="text/css" href="estudianteTemplate/assets/css/styles.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('estudianteTemplate/images/img1.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="insertar.php" method="POST">
					<span class="login100-form-title p-b-49">
						REGISTRARSE
					</span>


					<div class="wrap-input100 validate-input" >
						<span >Cedula:</span>
						<input  type="text" name="cedula" >
						<span data-symbol="&#xf206;"></span>
					</div><br><br>

					
					<div class="wrap-input100 validate-input" >
						<span >Correo:</span>
						<input type="email" name="email" >
						<span  data-symbol="&#xf206;"></span>
					</div><br><br>

					<div class="wrap-input100 validate-input" >
						<span >Nombre:</span>
						<input  type="text" name="nom" >
						<span data-symbol="&#xf206;"></span>
					</div><br><br>

					<div class="wrap-input100 validate-input" >
						<span >Apellido:</span>
						<input  type="text" name="apel" >
						<span data-symbol="&#xf206;"></span>
					</div><br><br>


					<div class="wrap-input100 validate-input" >
						<span >Contraseña:</span>
						<input  type="password" name="contra" >
						<span data-symbol="&#xf206;"></span>
					</div><br><br>

					<div class="wrap-input100 validate-input" >
						<span >Repite la contraseña:</span>
						<input  type="password" name="recontra" >
						<span data-symbol="&#xf206;"></span>
					</div><br><br>

					<div class="wrap-input100 validate-input" >
						<span >Telefono:</span>
						<input  type="text" name="telefono" >
						<span  data-symbol="&#xf206;"></span>
					</div>
					
					
					
					<br><br>
					
					
					
					<div class="container-login100-form-btn">
						
							<div class="login100-form-bgbtn">
								
							</div>
							<button class="boton" type="sumbit">
								REGISTRARSE
							</button>
						
					</div>

					

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							ir al login
						</span>

						<a href="index.php" class="txt2">
							Login
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/daterangepicker/moment.min.js"></script>
	<script src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../js/main.js"></script>

</body>
</html>