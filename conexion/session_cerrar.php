<?php 
	session_start();
	//para destruir cualquier variable de session  
	session_destroy();
	//lo redirecionamos a login
	header('Location: ../');

 ?>