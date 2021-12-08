<?php 
include ("../conexion/conexion.php");

	$opcion = $_POST["opcion"];
	

if($opcion === 'votar'){
     $perid = $_POST['perid'];
     $idevl = $_POST['idevl'];
     $idarper = $_POST['idarper'];

    	if(votacion($idarper,$perid,$idevl,$conexion)){
					echo "0";
				}else{
						echo "1";
				 		}

	}else if($opcion === 'votarpor'){

     $perid = $_POST['perid'];
     $idevl = $_POST['idevl'];
     $idarper = $_POST['idarper'];

    	if(votacionpor($idarper,$perid,$idevl,$conexion)){
					echo "0";
				}else{
						echo "1";
				 		}
	}

function votacion($idarper,$perid,$idevl,$conexion){

	$query="SELECT * FROM votacion 
			WHERE idareas = '$idarper' 
			AND perid = '$perid'
			AND idevl = '$idevl' 
			AND estado = 0";
			$resultado= mysqli_query($conexion,$query);
		if($resultado->num_rows==0){

		$sql="INSERT INTO votacion VALUES(0,1,$idarper,$perid,$idevl,0)";

		if(mysqli_query($conexion,$sql)){
		return true;
		}else{
		return false;
		}

		$this->conexion->cerrar();

		}else{

		}
}

function votacionpor($idarper,$perid,$idevl,$conexion){
	$query="SELECT * FROM votacion 
			WHERE idasnt = 2 
			AND idareas = '$idarper' 
			AND perid = '$perid'
			AND idevl = '$idevl' 
			AND estado = 0";
			$resultado= mysqli_query($conexion,$query);
		if($resultado->num_rows==0){

		$sql="INSERT INTO votacion VALUES(0,2,$idarper,$perid,$idevl,0)";

		if(mysqli_query($conexion,$sql)){
		return true;
		}else{
		return false;
		}

		$this->conexion->cerrar();

		}else{

		}
}