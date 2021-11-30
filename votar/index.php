<?php include ("../conexion/conexion.php"); session_start();
//si la variable ssesion existe realizara las siguiente evaluacion 
    if (isset($_SESSION['usuario'])) {
        //si se ha logeado evaluamos si el usuario que aya ingresado intenta acceder a este directorio no es de tipo administrador, no le es permitido el acceso .. si tipo usuario es distinto de admin , entonces no tiene nada que hacer en este directorio 
        // if($_SESSION['usuario']['privilegios'] == "SUPER_ADMIN" || $_SESSION['usuario']['privilegios'] || "ADMINISTRADOR"){
        //  //   y se redirecciona al directorio que le corresponde
        //    header("Location: voto.php");
        //    }        }else{
        //     //si no exixte quiere decir que nadie se ha logeado y lo regsara al inicio (login)
        //     header('Location: ../');
        // }
       // echo $_SESSION['usuario']['privilegios'];

}
      echo $id = $_SESSION['usuario']['id_usu'];
      $usu = $_SESSION['usuario']['usuario'];
      $pass = $_SESSION['usuario']['password'];
