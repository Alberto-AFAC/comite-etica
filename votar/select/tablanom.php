
<?php session_start();

require_once "../../conexion/conexion.php";

      if(isset($_SESSION['consulta']) && !empty($_SESSION['consulta'])){

      	echo $_SESSION['consulta'];

        if($_SESSION['consulta'] > 0){
          $Idpst=$_SESSION['consulta'];
     //     $query = "SELECT * FROM personal WHERE `gstIDSub` = $Idpst AND estado = 0";
            $query = "SELECT * FROM personal 
                      INNER JOIN  votacioncargo ON `n_empleado` = `gstNmpld`
                      WHERE `id_cargo` = $Idpst AND votacioncargo.estado = 0";       
        }


  		$resultado = mysqli_query($conexion,$query);

      // $result=mysqli_query($conexion,$sql);
      // $ver=mysqli_fetch_row($result);
?>
<style type="text/css">

/*.form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control{
background: white;
}*/
</style>      

                
                  <label>NOMINADOS</label>

	<select  id="idevl" class="form-control" name="idevl" type="text" data-live-search="true" style="width: 100%" >
              <option value="0">¿A QUIEN VA SELECCIONAR?</option>
<?php while($data = mysqli_fetch_assoc($resultado)){  ?>

              <option value="<?php echo $data['gstIdper']?>"><?php echo $data['gstNombr'].' '.$data['gstApell']?></option>
<?php } ?>
<!--               <option value="REPORTE DE SEGURIDAD OPERACIONAL">REPORTE DE SEGURIDAD OPERACIONAL </option>
              <option value="ACCIDENTE">ACCIDENTE</option>
              <option value="INCIDENTE">INCIDENTE</option>
              <option value="REPORTE DE FALLA">REPORTE DE FALLA</option>
  -->             </select>
                               

              
<?php   }else{   ?>




<?php } ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#idevl').select2();
		});
	</script>