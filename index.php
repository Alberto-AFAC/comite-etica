<?php include('session_start.php');?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="../dist/img/iconafac.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Capacitación AFAC</title>
	
	<link rel="stylesheet" type="text/css" href="css/icono/iconos/style.css">
	<link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" type="text/css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="login/css/master.css"> <!--ligamos la carpeta-->
	<link rel="stylesheet" href="css/assets/signup-form.css" type="text/css" />
	<script type="text/javascript" src="val/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="val/validacion.js"></script>
	<script type="text/javascript" src="val/valida.js"></script>
	<link rel="stylesheet" type="text/css" href="../dist/css/sweetalert2.min.css">
    <script src="../dist/js/sweetalert2.all.min.js"></script>
<style>
	.swal-wide {
        width: 500px !important;
        font-size: 16px !important;
    }
	</style>
</head>
<body>

    <main>


<!--Formulario de Login y registro-->
<div class="contenedor__login-register">

<!--Formulario tecnicos-->
	<form action="" id="formtec" class="formulario__tecnico">				         
		<div class="form-header">
		<h3 class="form-title">
		<span class="glyphicon glyphicon-plane"></span>
		<b>COMITÉ DE ÉTICA </b> 
		</h3>
		</div>
			<div class="rowadmin">                  
				<div class="form-body">
					<div class="form-group">
					<label>Nombre (si cuenta con dos nombres, agregar)</label>
						<div class="input-group col-md-12">
						<div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
						<input type="text" class="form-control" onkeyup="mayus(this);" name="tecn" pattern="[A-Z,a-z,0-9,_-,ñ,Ñ]{1,15}" required/>
						</div>
					<span class="help-block" id="error"></span>
					</div>
						<div class="form-group">
							<label>Número de empleado </label> 
							<div class="input-group col-md-12">                       
								<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
								<input type="password" name="pass" class="form-control" pattern="[A-Z,a-z,0-9,_-ñÑ]{1,15}" required />
							</div> 
							<span class="help-block" id="error"></span>                     
						</div>                                  
				</div>
				<p><span class="errortec">Usuario o contraseña incorrecto, intente de nuevo</span></p>
				<span class="help-block" id="error"></span>
			    <div class="form-footer">
				<input type="submit" class="botton" value="Iniciar Sesion" />
				</div>
			</div>
	</form>

	<link rel="stylesheet" type="text/css" href="boots/bootstrap/css/select2.css">
	<script src="js/jquery-1.12.3.min.js"></script>





<!--Formulario registro--> 
	<form id="form" action="" method ="POST" class="formulario__registro" onsubmit="return registrarse(this)" >
	    
		<div class="form-header">
			<h3 class="form-title">
				<span class="glyphicon glyphicon-plane"></span>
					<b>Capacitación AFAC</b>
			</h3>					
		</div>
			<div class="row">                  
				<div class="form-body">
					<div class="form-group" >
						<label>Ingrese correo electrónico</label>
						<div class="input-group col-md-12">
							<div class="input-group-addon">
							<span class="glyphicon glyphicon-envelope"></span></div>
							<input type="email" name="correo" id="correo" class="form-control" pattern="[0-9]{1,7}" required/>
						</div>
						<div >

						</div>
						                   
						<span class="help-block" id="error"></span>
						<p>
				<span  class="error" id="vacio">Favor de ingresar su correo electrónico </span>
				<span class="error" id="aviso">El correo que ingreso no existe</span>
				<span class="error" id="exito" style="color:green;">Se mando contraseña restablecida a su correo</span>
				<span class="error" id="falla">Error al restablecer contraseña, consulte con el administrador</span>
						</p>
					</div>
				</div>
				<div class="form-footer">
				<button type="button" class="botton" onclick="enviarCorreo()">Enviar</button>
				</div>
			</div>
	</form>
	</div>
    </main>
	<script src="login/js/sript.js"></script>
	<script src="css/bootstrap/js/bootstrap.min.js"></script>
	<script src="css/assets/jquery-1.11.2.min.js"></script>
	<script src="css/assets/jquery.validate.min.js"></script>
	<script src="css/assets/validations.js"></script>
	<script type="text/javascript" src="js/usuarios.js"></script>
	<script src="js/select2.js"></script>	

</body>
























