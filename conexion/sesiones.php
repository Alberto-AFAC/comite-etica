<?php 
require 'conexion.php';
//**con seguridad**/
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
	
	require 'conexion.php';
	sleep(1);
	//palabra reservada de inicio de session 
	session_start();
//para validar tipo de caracteres especificar el tipo de caracteres que va escapar
	$conexion->set_charset('utf8');
//creacion de 2 variables. 
	//datos llamar objeto y funcion
	$usuario = $conexion->real_escape_string($_POST['tecn']);
	$pas = $conexion->real_escape_string($_POST['pass']);
//declaraciones preparadas realizamos la consulta en variables ponemos signo de interrogacion ya que resiviran los parametros nuetsra instruccion sql
if($nueva_consulta = $conexion->prepare("SELECT * FROM accesos WHERE usuario= ? AND password = ? AND activo = 0 AND baja = 0")){
//pasamos los parametros primer parametro el tipo de datos locovamos dos s para indicar que son dos string, el primer dato variable usuario y el segundo dato pas que tre la contraseña
//	$pass = md5($pas);
	$nueva_consulta->bind_param('ss', $usuario, $pas);
//llamamos el metodo execute para que ejecurte la consulta base de datos 
	$nueva_consulta->execute();
//obtener el resultado que devuelve con el metodo, con esto tenenmos el resultado de la consulta
	$resultado = $nueva_consulta->get_result();
//evaluamos si la consulta devulve resultados. si la variable resultado encuentra filas nos interesa un registro por eso ponemos ==1
if($resultado->num_rows == 1){
	//variable datos = a variable resultado arreglo asosiativo colocamos el arreglo fetch_assoc
	$datos = $resultado->fetch_assoc();

	//creamos una varieble de sesion = valor asignado que contenga esa variable <- arreglo de tipo asociativo que contendra todos los datos del usuario que inicie session 
		$_SESSION['usuario'] = $datos;
	
	//si encontro datos enviaremos la respuesta 
		echo json_encode(array('error' => false ,'tipo' => $datos['privilegios']));
}else{
	//en caso de que no encuentre 
		echo json_encode(array('error' => true ));		
	}
	//cerra consulta
	$nueva_consulta->close();
		}
			}
			$conexion->close();
	?>