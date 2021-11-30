<?php  
include ("conexion/conexion.php");
session_start(); 
	//evaluaremos si la variable de session existe de lo contrario no se ara nada 
	//si la variable session exite, se evaluara que tiepo de usuario esta ingresando de esa manera saber a donde se deve redireccionar en caso de que ya se haya logeado 
	if(isset($_SESSION['usuario'])){
		//si eta logeado con admnistrador lo redireccionara a su direcctorio que le corresponde 
		if($_SESSION['usuario']['privilegios'] == "admin")
		{	header('Location: admin');
		//si eta logeado con usuario lo redireccionara a su direcctorio que le corresponde 
		}else if($_SESSION['usuario']['privilegios'] == "inspector")
		{	header('Location: inspector');
		//si eta logeado con manejador lo redireccionara a su direcctorio que le corresponde 
		}else if($_SESSION['usuario']['privilegios'] == "instructor")
		{header('Location: instructor');
		}else if($_SESSION['usuario']['privilegios'] == "director")
		{header('Location: director');
		
		}
	}
?>